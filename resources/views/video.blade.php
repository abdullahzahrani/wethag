@extends('layouts.appSec')
@section('content')

    <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: right;
  padding: 8px;
  border-radius: 12px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.listchpaters {
    text-align: right !important;
    border: 1pxsolid #d4cfcf !important;
    /* border-radius: 12
px
; */
    padding: 20px;
    margin: 10px;
}
</style>
        <div class="container2">

            <div class="video2" style="float: right; width: 95%; height: 195%;">
                <h1>${{ $lessons[0]['subject'] }} </h1>


                <iframe width="100%" height="315" src="{{ $lessons[0]['url'] }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
                <h4>أسم المقدم: <span> {{ $lessons[0]['instructor'] }}</span></h4>
            </div>
<a href="{{$lessons[0]['url']}}" target="_blank">اذا لم يعمل الفيديو قم بالضغط هنا</a>
            <div class="" style="float: left">
                <div class="text2">
                    <h2>وصف المقطع </h2>
                    <div class="block" style="margin: 0px 0 175px 0px;">
                    {{ $lessons[0]['description'] }}
                </div>
                <div class="denote2">
                    <div style="width: 100%">
                    زميلك الشارح فك لك أزمة وودك ترد له الجميل ؟
                    تقدر تهديه تبرع عبر منصة إحسان ولعل هذه كفيل بإسعاده
                    <br>
                    <span class="teacher-number2"> رقم المقدم:<span> {{ $lessons[0]['phone'] }}</span></span>
                    </div>
                    <a href="https://ehsan.sa"><button style=" width:60px;
                        height: 100%;" >تبرع</button></a>
                    </div>
                </div>
                </div>
            {{-- قائمة الدرووس  --}}
        </div>
            <div class="container">
                <div>
                    <div class="section3">
                        <h1 style="font-size: 35px;">الدروس الاخرى</h1>
                        <table>
                            <tr>
                              <th>اسم الدرس</th>
                              <th>مشاهدة</th>
                            </tr>

                            @foreach ($chapter as $s)
                            <tr>
                                <td class="listchpaters">{{ $s->name }} </a></td>
                                <td class="listchpaters"><a href="{{ url('/') }}/{{$s->collage}}/{{$s->subject}}/{{$s->chapter}}/{{$s->slug}}/">▶️</a></td>
                            </tr>
                            @endforeach
                        </table>
                        {{-- <ol class="">
                            @foreach ($chapter as $s)
                            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
                            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
                            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
                            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
                            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
                            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
                            @endforeach
                        </ol> --}}
                </div>
            </div>
        </div>
@endsection
