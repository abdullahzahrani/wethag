<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وثاق</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{-- <link rel="stylesheet" href="assets/CSS/team.css"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/CSS/join.css') }}">

</head>

<body>
    <!--icon for social  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- start navigation Bar -->

    <div class="navbar">
        <!-- social navigation Bar -->
        <ul class="navbar-links">
            <li><img src="{{ asset('assets/imgs/logo.png') }}" alt="logo"></li><br>
            <li><a style="color: white;" href="{{ route('index') }}">الرئيسية</a></li>
            <li><a style="color: white;" href="{{ route('teachers') }}">فريق عمل وثاق</a></li>
            <li><a style="color: white;" href="{{ route('team') }}">رفقاء وثاق</a></li>
            <li><a style="color: white;" href="#college">الكليات</a></li>
            <li><a style="color: white;" href="{{ route('join') }}">الانضمام لرفقاء وثاق</a></li>
            <li><a style="color: white;" href="#contact">تواصل معنا</a></li>
        </ul>
        <div class="clearflix"></div>
    </div>
    <!-- end nav -->

    <!-- start PHONE navigation Bar -->
    <div class="navbar menu">
        <!-- social navigation Bar -->
        <ul class="navbar-links" style="width: 100%">
            <div class="menu-content">
                <li><a href="{{ route('index') }}">الرئيسية</a></li>
                <li><a href="{{ route('team') }}">فريق عمل وثاق</a></li>
                <li><a href="{{ route('teachers') }}">رفقاء وثاق</a></li>
                <li><a href="{{ route('index') }}">الكليات</a></li>
                <li><a href="{{ route('join') }}l">الانضمام لرفقاء وثاق</a></li>
                <li><a href="#contact">تواصل معنا</a></li>
            </div>
            <div class="out-menu">
                <li style="width: 50%"><img src="{{asset('assets/imgs/logo.png')}}" alt="logo"></li>
                <li class="menu-button-father"><button class="menu-button"><img src="{{asset('assets/imgs/home-menu.svg')}}" style="height: 30px; width: 30px"></button></li>
            </div>
        </ul>
        <div class="clearflix"></div>
    </div>
    <!-- end PHONE nav -->

    @yield('content')

</body>
<!-- start footer  -->
<footer class="footer-distributed">
    <div class="footer-div">
        <!--   start footer right -->
        <div class="footer-right">
            <h3>وثاق</h3>
            <br>
            <h4>نسعى لتوفير شروحات مجانية تدعم جميع مناهج الكليات والتخصصات</h4>
            <br>
            <h5>تابعنا على</h5>
            <div class="sociallinks" style="    color: #999;
            ">
                <a href="">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </div>
            <br>
            <p>حقوق النشر &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>, محفوظة لمبادرة وثاق التعليمية </p>
        </div>
        <!--   end footer right -->
        <!--   start footer left -->
        <div class="footer-left" id="contact">
            <form action="{{ route('email') }}" method="POST">
                @csrf
                 <p style="font-size: 2.5rem;text-align: right;float: right;text-align: l;">تواصل معنا</p><br><br>
                <input type="text" name="email" placeholder="البريد الالكتروني">
                <textarea name="message" placeholder="رسالتك"></textarea>
                <button style="float: right;">ارسال</button>
            </form>
        </div>
        <!--   end footer left -->
    </div>
</footer>
<!--   end footer -->
{{-- jquery & slide bars --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(".menu-content").hide();
    $(".menu-button").click(function() {
        $(".menu-content").slideToggle();
    })
</script>

</html>

