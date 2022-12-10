@extends('layouts.app')
@section('content')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <div class="section-one">
        <div class="section-one-title">
            <h1 class="title-h1">عن وثاق</h1>
            <p class="title-p">
                منصة طلابية تعليمية نبادر فيهابشرح المقررات الجامعية
                <br> ونحن على أتم الإيمان بأن ( زكاة العلم تعليمه )
            </p>
        </div>
        <div class="section-one-vision">
            <h1 class="vision-h1">رؤيتنا</h1>
            <p class="vision-p">خلق بيئة تعليمية محفزة كفيلة بأنها تصنع مننا طلاب متفوقين ومبادرين </p>
        </div>
        <div class="section-one-goal">
            <h1 class="goal-h1">هدفنا</h1>
            <p class="goal-p">نغطي المناهج الدراسية لكل التخصصات والكليات بشروحات مجانية من الطلاب نفسهم</p>
        </div>
    </div>
    <!-- end  section one in page -->

    <!--  start section two in page (Cards Names) -->
    <div class="section-two mt-5">
        <h1 class="section-two-h1"> صناع الأثر هذا الأسبوع </h1>

        @if ($top5)
            @if (count($top5))

            <section class="sub-section-two">
                @foreach ($top5 as $top)
                <div class="card-section-two">
                    <img src="./assets/imgs/logocards.png" alt="logo" class="logocards" width="140rem">
                    <h2 class="h1-section-two">{{ $top->instructor }} </h2>
                    <h2 class="h2-section-two">{{ $top->total }}</h2>
                    <h2 class="h2-section-two">عدد المقررات المشروحة</h2>
                    <span></span>
                </div>
                @endforeach
            </section><br><br><br><br><br>
            @else
            <br><br><br><br><br>
            @endif
        @endif
        <!--  end section two in page (Cards Names) -->
        <!--  start section three in page (join page) -->
        <div class="box-join">
            <div class="box-in">
            <div class="box-inside">
        <h1 style="font-size: 35px" class="section-join"> سجل كمحاضر واشرح درس </h1>
        <button type="button" class="section-join">  <a href="{{ route('join') }}">انضم معنا</a></button><br><br>
        <!--  end section three in page (join page) -->
            </div>
            </div>
    </div>
        <h1 class="college" id="college"> الكليات</h1>

  <section class="sub-section-two">
    <!-----  start section four (Cards college) ------->
    <!-- Slider main container -->
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
            @foreach ($collages as $c)
            <div class="swiper-slide">
                <a href="{{ $c }}">
                <a href="34">
                <h1 class="title">CSIS</h1>
                <h2 class="college">كلية الحاسب والمعلومات</h2>
                <div class="num">
                    <span>  {{count($collages)}} </span>
                    <span> testsetest </span>
                    <br>
                <span> عدد المقررات المشروحة</span>
                </div>
            </a>
            </div>
            @endforeach




            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>
    <br><br>
    <br><br>
    <br><br>



    <!-----  start slider js section four (Cards college) ------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>

const swiper = new Swiper('.swiper', {

    slidesPerView: 3,
  spaceBetween: 50,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 40
    },
  },
direction: 'horizontal',
    autoplay: {
      delay: 2500,
      disableOnInteraction: true,
    },


pagination: {
el: '.swiper-pagination',
clickable: true,
},

});
</script>
    <!-----  end slider js section four (Cards college) ------->
    <!-----  end section four (Cards college) ------->

    @endsection

