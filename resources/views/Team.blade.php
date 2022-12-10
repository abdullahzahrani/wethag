@extends('layouts.appSec')
@section('content')
    <!-- div for subject -->
    <div class="container">
        <h1>فريق عمل وثاق</h1>
        <!--  start person1 code  -->
        <div class="sub-container">
            @foreach ($friends as $friend)
            <div class="card">
                <img class="imagecard" src="./assets/imgs/chat.png" alt="">
                <div class="name">{{ $friend->instructor }}</div>
                <div class="desig">{{ $friend->phone }}</div>
                <div class="social-links">
                    <a href="{{ $friend->twitter }}">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="{{ $friend->linkedin }}">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        </div>

@endsection
