<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use App\Http\Requests\ContactRequset;
use App\Mail\ContactMail;


class storeLesson extends Controller
{
    //
    public function store(Request $request){

        $validated = $request->validate([
//            'description' => 'required',
//           'url' => 'required|active_url|starts_with:https://drive.google.com/',
//            'collage' => 'required|'.Rule::in('cs') ,
//            'subject' => 'required|regex:/^[a-zA-Z ]+$/u',
//            'chapter' => 'required|numeric|max:12',
//            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
//            'linkedin' => 'required|active_url|starts_with:https://sa.linkedin.com/',
//            'twitter' => 'required||active_url|starts_with:https://twitter.com/',
//            'major' => 'required|regex:/^[a-zA-Z ]+$/u',
//            'phone' => 'required|numeric|regex:/(5)[0-9]{8}$/|digits_between:9,9',
//            'instructor' => 'required|regex:/^[a-zA-Z ]+$/u',
        ],
        [
            'url.*'=> "incorrect url",
            'description.*'=> "incorrect description",
            'collage.*'=> "incorrect collage",
            'subject.*'=> "incorrect subject",
            'chapter.*'=> "incorrect chapter",
            'name.*'=> "incorrect name",
            'linkedin.*'=> "incorrect linkedin",
            'twitter.*'=> "incorrect twitter",
            'major.*'=> "incorrect major",
            'phone.*'=> "incorrect phone",
            'instructor.*'=> "incorrect instructor",

            ]);
        $lesson = new Lesson();
        $lesson->description=$request['description'];
        $lesson->url=$request['url'];
        $lesson->collage=$request['collage'];
        $lesson->subject=$request['subject'];
        $lesson->chapter=$request['chapter'];
        $lesson->name=$request['name'];
        $lesson->linkedin=$request['linkedin'];
        $lesson->twitter=$request['twitter'];
        $lesson->major=$request['major'];
        $lesson->phone=$request['phone'];
        $lesson->instructor=$request['instructor'];
        $lesson->save();
        if ($request['description2'] || $request['url2'] ||$request['collage2'] ||
        $request['subject2'] ||$request['chapter2'] ||$request['name2'] ){
        $validated = $request->validate([
            'description2' => 'required',
            'url2' => 'required|active_url|starts_with:https://drive.google.com/',
            'collage2' => 'required|'.Rule::in('cs') ,
            'subject2' => 'required|regex:/^[a-zA-Z ]+$/u',
            'chapter2' => 'required|numeric|max:12',
            'name2' => 'required|regex:/^[a-zA-Z ]+$/u',
        ],
            [
                'url2.*'=> "incorrect url",
                'description2.*'=> "incorrect description",
                'collage2.*'=> "incorrect collage",
                'subject2.*'=> "incorrect subject",
                'chapter2.*'=> "incorrect chapter",
                'name2.*'=> "incorrect name",
            ]);
        $lesson2 = new Lesson();
        $lesson2->description=$request['description2'];
        $lesson2->url=$request['url2'];
        $lesson2->collage=$request['collage2'];
        $lesson2->subject=$request['subject2'];
        $lesson2->chapter=$request['chapter2'];
        $lesson2->name=$request['name2'];
        $lesson2->linkedin=$request['linkedin'];
        $lesson2->twitter=$request['twitter'];
        $lesson2->major=$request['major'];
        $lesson2->phone=$request['phone'];
        $lesson2->instructor=$request['instructor'];
        $lesson2->save();
        }
        return view('joinsecound');
    }

    function join()
    {
        return view('join');
    }
    function email(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255' ],
            'message' => ['required', 'string', 'max:255']
        ]);
        $contact = [
            'email' => $request['email'],
            'message' => $request['message'],
        ];
        Mail::to('husseinalammari1@gmail.com')->send(new ContactMail($request->all()));
        return redirect('/');
        dd();
    }
}
