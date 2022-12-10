    @extends('layouts.appSec')
    @section('content')
    <br><br>
    <!-- div for ...يارفاقَ  -->
    <div class="center">
        <p>يارفاقَ العِلمِ هيَّا نَشُدُّ وِثاقَ العِلمِ سَويّا </p>
    </div>
    <!-- class for the main addres -->
    <h1 class="main-addres">الانضمام لرفقاء وثاق</h1>
    <!-- start contact-section -->
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
@endif
<form method="POST" action="storeLesson" style="max-width: 100%!important">
    @csrf
    <section class="contact-section">
        <label for="name" class="contact-section">الاسم الثلاثي</label>
        <br>
        <input type="text" id="name" name="instructor"  class="contact-section">
        <br><br>
        <label for="number" class="contact-section"> رقم الجوال</label>
        <br>
        <input type="text" id="number" name="phone" maxlength="10" class="contact-section">
        <br><br>
        <label for="specialisation" class="contact-section">التخصص</label>
        <br>
        <input type="text" id="major" name="major"  class="contact-section">
        <br><br>
    </section>
    <!-- end contact-section -->
    <br><br> <br>
    <!-- start socail media for the teacher -->
    <section class="socail-teacher">
        <label for="social" class="socail-teacher"> الحسابات الرسمية للتواصل </label><br>
        <h2 class="socail-teacher"> ستعرض هذي البيانات الخاصة بك في صفحة رفقاء وثاق</h2>
        <div class="socail-teacher-img">
            <input type="text" id="linkedin" name="linkedin" class="socail-teacher">
            <img class="socail-teacher-linkedin" src="./assets/imgs/linkedin.png" width="20px" height="20px"><br>
        </div>

        <div class="socail-teacher-img">
            <input type="text" id="twitter" name="twitter" class="socail-teacher">
            <img class="socail-teacher-twitter" src="./assets/imgs/twitter.png" width="20px" height="20px"><br>
        </div>
    </section>
    <!-- end socail media for the teacher -->
    <br> <br> <br>
    <!-- start Lesson information -->
    <section class="Lesson-information">
        <div class="addSec">
        <label for="googledrive" class="Lesson-information-video"> رفع مقطع الدرس </label><br>
        <h3 class="Lesson-information-link">لرفع مقطع الدرس على googledrive <a href="https://www.google.com/intl/ar_sa/drive/">من هنا</a></h3>
        <div class="form-group">
            <label for="linke" class="Lesson-information-linksubject"> من فضلك انسخ رابط المقطع وارفقه هنا </label><br>
            <input type="text" id="linke" name="url2" class="Lesson-information">
        </div>
        <br>
        <div class="form-group">
            <label for="colleges" class="Lesson-information-colleges">الكلية</label><br>
            <input type="text"  name="collage2" class="Lesson-information"><br>
        </div>
        <br>
        <div class="form-group">
            <label for="colleges" class="Lesson-information-name">المقرر</label><br>
            <input type="text" id="linke" name="subject2" class="Lesson-information"><br>
        </div>
        <br>
        <div class="form-group">
            <label for="subject" class="Lesson-information-subject">عنوان المقطع</label><br>
            <input type="text" id="subject"  name="name2" class="Lesson-information"><br>
        </div>
        <br>
        <div class="form-group">
            <label for="subject" class="Lesson-information-subject"> رقم الوحدة </label><br>
            <input type="number" id="subject" name="chapter2" class="Lesson-information"><br>
        </div>
        <br>
        <div class="form-group">
            <label for="subject" class="Lesson-information-subject">الوصف </label><br>
            <input type="textarea" id="subject" name="description2" class="Lesson-information"><br>
        </div>
        <br>
    </div>

        <div class="addSec2" style="display: none">
            <label for="googledrive" class="Lesson-information-video"> رفع مقطع الدرس </label><br>
            <h3 class="Lesson-information-link"><a href="https://www.google.com/intl/ar_sa/drive/"> من هنا </a> Googledrive لرفع مقطع الدرس على </h3>
            <div class="form-group">
                <label for="linke" class="Lesson-information-linksubject"> من فضلك انسخ رابط المقطع وارفقه هنا </label><br>
                <input type="text" id="linke" name="url2" class="Lesson-information">
            </div>
            <br>
            <div class="form-group">
                <label for="colleges" class="Lesson-information-colleges">الكلية</label><br>
                <input type="text"  name="collage2" class="Lesson-information"><br>
            </div>
            <br>
            <div class="form-group">
                <label for="colleges" class="Lesson-information-name">المقرر</label><br>
                <input type="text" id="linke" name="subject2" class="Lesson-information"><br>
            </div>
            <br>
            <div class="form-group">
                <label for="subject" class="Lesson-information-subject">عنوان المقطع</label><br>
                <input type="text" id="subject"  name="name2" class="Lesson-information"><br>
            </div>
            <br>
            <div class="form-group">
                <label for="subject" class="Lesson-information-subject"> رقم الوحدة </label><br>
                <input type="number" id="subject" name="chapter2" class="Lesson-information"><br>
            </div>
            <br>
            <div class="form-group">
                <label for="subject" class="Lesson-information-subject">الوصف </label><br>
                <input type="textarea" id="subject" name="description2" class="Lesson-information"><br>
            </div>
            <br>
        </div>


        <div id="moreAdd">

    </div>

    <div class="form-group">
        <button type="button" id="off" class="Lesson-information-morevideo" onclick="add()"> اضافة درس اخر </button>
    </div>
    <br>
    </section>
    <button class="Lesson-information" type="submit">ارسال</button>
</form>

    <!-- end Lesson information -->

    <script type="text/javascript">
        function add() {
            $( ".addSec2" ).show();
            $( "#off" ).hide();
        }
    </script>


    <!--  End Jquery script  -->

<!-- start footer  -->
@endsection
