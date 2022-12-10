@extends('layouts.appSec')
@section('content')
    <div class="container">
        <h1>رفقاء وثاق</h1>
        <!--  start person1 code  -->
        <div class="sub-container">
            @foreach ($volunteers as $volunteer)
            <div class="card">
                <img class="imagecard" src="./assets/imgs/chat.png" alt="">
                <div class="name">{{ $volunteer->name }}</div>
                <div class="colleges">{{ $volunteer->job }}</div>
                <div class="desig">{{ $volunteer->phone }}</div>
                <div class="social-links">
                    <a href="{{ url($volunteer->twitter) }}">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="{{ url($volunteer->linkedin) }}">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
@endsection
