<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;

class inx extends Controller
{
    private $lesson;
    private $name;
    private $collage;
    private $volunteer;
    private $nameOfWeak;

    public function __construct()
    {
        $this->lesson = Lesson::query();

        $this->volunteer = \cache()->remember('volunteers', 60 * 60 * 24, function () {
            return DB::table('volunteers')->select('name', 'job', 'phone',
                'twitter', 'linkedin')->get();
        });

        $this->collage = \cache()->remember('collage', 60 * 60 * 24, function () {
            return DB::table('lessons')->pluck('collage')->unique();
        });

        // frind
        $this->name = \cache()->remember('name', 60 * 60 * 24, function () {
            return DB::table('lessons')->select('instructor', 'phone',
                'twitter', 'linkedin')->
            groupBy('instructor', 'phone',
                'twitter', 'linkedin')

                ->get();
        });
        // frinds of the weak
        $this->nameOfWeak = \cache()->remember('nameOfWeak', 60 * 60 * 24, function () {
            return DB::table('lessons')
                ->select('instructor', DB::raw('count(*) as total'))->
                groupBy('instructor')
                ->whereBetween('created_at',
                    [
                        now()->locale('en')->startOfWeek(),
                        now()->locale('en')->endOfWeek(),
                    ])
                ->get();
        });

    }


    // $collage = null, $subject = null, $chapter = null, $slug = null
    public function index($collage = null, $subject = null, $chapter = null, $slug = null,$s=null)
    {
        if($s){
            return redirect('/');
            dd();
        }
        try {
            if ($slug) {
                //after chose chapter + lesson 4
                // echo $this->slug($slug, $collage, $subject, $chapter);
                $lessons = $this->slug($slug, $collage, $subject, $chapter);
                $chapter = DB::table('lessons')->where([['collage', '=', $this->clean($collage)],
                    ['subject', '=', $this->clean($subject)],
                    ['chapter', '=', $this->clean($chapter)],
                    ['flag', '=', 1]])
                    ->select('subject','collage','chapter'
                        ,'name', 'slug')
                    ->get()
                    ->whenEmpty(function () {
                        Throws::create('no result');
                    });
                return view('video', compact('lessons','chapter'));

            } elseif ($chapter) {
                $chapter = $this->chapter($collage, $subject, $chapter);
                return view('chapters2', compact('chapter'));
            } elseif ($subject) {
                //after chose subject 3
                $subject = $this->subject($collage, $subject);
                return view('chapters',compact('subject'));
            } elseif ($collage) {
                //after chose collage 2
                $collage = $this->collage($collage);
                return view('subjects', compact('collage'));
            } else {
                //first visit 1
                $collages = $this->collage;
                $top5 = $this->nameOfWeak;
                return view('home', compact('collages','top5'));
            }
        } catch (\Exception $exception) {
            return redirect('/');
        }


    }
    // Replaces all spaces with hyphens and  special chars.
    function clean($string)
    {
        $string = str_replace(' ', '-', $string);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }

    //this well show lesson
    function slug($slug, $collage, $subject, $chapter)
    {
        //after chose chapter
        return $this->lesson->where([['collage', '=', $this->clean($collage)]
            , ['subject', '=', $this->clean($subject)],
            ['chapter', '=', $this->clean($chapter)],
            ['flag', '=', 1],
            ['slug', '=', $this->clean($slug)]])
            ->select('instructor'
                , 'phone', 'url', 'name', 'description')->get()
            ->whenEmpty(function () {
                Throws::create('no result');
            });
    }

    //this well show subject
    function collage($collage)
    {
        return $this->lesson->where('collage', '=',
            $this->clean($collage))->select('subject',
            'instructorAll')->get()->unique('collage')
            ->whenEmpty(function () {
                Throws::create('no result');
            });
    }

//this well show chapter + name of lesson
    function subject($collage, $subject)
    {
        return $this->lesson->where([['collage', '=', $this->clean($collage)],
            ['subject', '=', $this->clean($subject)],
            ['flag', '=', 1]])
            ->select('name','chapter'
                )->get()
            ->unique('chapter')
            ->whenEmpty(function () {
                Throws::create('no result');
            });
    }

    function team()
    {
        $friends = $this->name ;
        return view('Team', compact('friends'));
    }

    function teachers()
    {
        $volunteers = $this->volunteer;
        return view('teacher', compact('volunteers'));
    }

    function chapter( $collage, $subject, $chapter,$slug=null)
    {
        return $this->lesson->where([['collage', '=', $this->clean($collage)],
            ['subject', '=', $this->clean($subject)],
            ['chapter', '=', $this->clean($chapter)],
            ['flag', '=', 1]])
            ->select(
                 'name', 'slug')
            ->get()
            ->whenEmpty(function () {
                Throws::create('no result');
            });
    }
}
