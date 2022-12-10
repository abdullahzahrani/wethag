@extends('layouts.appSec')
@section('content')
    <style>
        a{
            color: white !important;
        }
    </style>
    <div class="container">
        <h1> من فضلك قم باختيار رقم الشابتر </h1>
        <!--  start person1 code  -->
        <div class="sub-container2">
            @foreach ($subject as $c)
                <div class="swiper-wrapper">
                    <a href="{{ url()->current()}}/{{$c->chapter}}">
                        <div class="card2">
                            <div class="name2">{{ $c->chapter }} </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection


