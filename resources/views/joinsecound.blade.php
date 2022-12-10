<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="50;"  url=" "> --}}
    <title>وثاق</title>
    <link rel="stylesheet" href="assets/CSS/joinsecound.css">
</head>

<body>
    <section class="background">
        <!-- start navigation Bar -->
        <div class="navbar xl">
            <!-- social navigation Bar -->
            <ul class="navbar-links">
                <li><img src="./assets/imgs/logosecound.png" alt="logo"></li><br>
            </ul>
            <div class="clearflix"></div>
        </div>
        <!-- end nav -->
        <!-- start navigation Bar -->
        <div class="navbar menu">
            <!-- social navigation Bar -->
            <ul class="navbar-links">
                <div class="out-menu">
                    <li style="width: 50%"><img src="./assets/imgs/logosecound.png" alt="logo"></li>
                </div>
                <div class="menu-content">
                </div>
            </ul>
            <div class="clearflix"></div>
        </div>
        <!-- end nav -->
        <!-- start main page  -->
        <div class="main-text">
            <h1>شكراً لانضمامك لرفقاء وثاق </h1>
            <p>سيتم تحديث بياناتكم بعد 24 ساعة  </p>
        </div>
        <!-- end  main page  -->
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(".menu-content").hide();
        $(".menu-button").click(function() {
            $(".menu-content").slideToggle();
        })
    </script>
     <script>
        $( document ).ready(function() {   setTimeout(function () {
             window.location.href = "{{ route('index') }}"; //will redirect to your blog page (an ex: blog.html)
          }, 2000); //will call the function after 2 secs.

      });
          </script>
</body>

</html>
