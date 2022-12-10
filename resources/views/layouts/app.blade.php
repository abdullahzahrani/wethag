<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrab link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- start slider  link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <!-- end slider  link -->
    <title>وثاق</title>

    <link rel="stylesheet" href={{asset('assets/CSS/home.css')}}>
</head>

<body>
    <!-- to allow the addition of icon social media  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <section class="section-header">
        <div class="header" >
            <h1 class="text-wethaq-center" >مبادرة وثاق التعليمية</h1>
             </div>
        <nav class="xl bg-logo" style="background-color: aliceblue;" >
            <img class="logo" src="./assets/imgs/logo.png" alt="logo">
            <ul class="nav_linke">
                <li><a style="color: white;" href="{{ route('index') }}">الرئيسية</a></li>
                <li><a style="color: white;" href="{{ route('teachers') }}">فريق عمل وثاق</a></li>
                <li><a style="color: white;" href="{{ route('team') }}">رفقاء وثاق</a></li>
                <li><a style="color: white;" href="#college">الكليات</a></li>
                <li><a style="color: white;" href="{{ route('join') }}">الانضمام لرفقاء وثاق</a></li>
                <li><a style="color: white;" href="#contact">تواصل معنا</a></li>

            </ul>
        </nav>
        <!-- start PHONE navigation Bar -->
        <nav class="menu sm"><br>
            <li class="menu-button-father"><button class="menu-button"><img src="./assets/imgs/home-menu.svg" style=" width: 30px" alt="menu bars"></button></li>
            <img class="logo" src="./assets/imgs/logo.png" alt="logo">
            <ul class="nav_linke" style="width: 100%;">
                <div class="menu-content">
                    <li><a href="{{ route('index') }}">الرئيسية</a></li>
                    <li><a href="{{ route('team') }}">فريق عمل وثاق</a></li>
                    <li><a href="{{ route('teachers') }}">رفقاء وثاق</a></li>
                    <li><a href="#college">الكليات</a></li>
                    <li><a href="{{ route('join') }}">الانضمام لرفقاء وثاق</a></li>
                    <li><a href="#contact">تواصل معنا</a></li>
                </div>
            </ul>
        </nav>

        <!-- end PHONE nav -->
    </section>

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
            <div class="sociallinks">
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
                <p style="font-size: 3.5rem; float: right; padding: 0!important">تواصل معنا</p><br><br>
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

