@extends('layouts.appSec')
@section('content')
    <div class="container">
        <h1> المقررات</h1>
        <!--  start person1 code  -->
        <div class="sub-container2">
            @foreach ($collage as $c)
            <div class="swiper-wrapper">
            <a href="{{ url()->current()}}/{{$c->subject}}">
            <div class="card2">
                <div class="name2">{{ $c->subject }} </div>
                <div class="colleges">اسم الشارح</div>
                <div class="desig2">{{ $c->instructorAll }}</div>
            </div>
        </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
