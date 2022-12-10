<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body class="antialiased container">
{{--    {{print_r($cache)}}<br>--}}
{{--    {{print_r($volunteer)}}<br>--}}
{{--    {{print_r($friend)}}--}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="storeLesson">
        @csrf
        <div class="form-group">
            <label for="exampleInstructor">instructor</label>
            <input type="text" class="form-control" id="exampleInstructor" name="instructor" aria-describedby="instructorHelp" placeholder="Enter instructor">
        </div>
        <div class="form-group">
            <label for="exampleInputPhone">phone</label>
            <input type="number" class="form-control" id="exampleInputPhone" name="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
        </div>
        <div class="form-group">
            <label for="exampleInputMajor">major</label>
            <input type="text" class="form-control" id="exampleInputMajor" name="major" aria-describedby="majorHelp" placeholder="Enter major">
        </div>
        <div class="form-group">
            <label for="exampleInputLinkedin">linkedin</label>
            <input type="text" class="form-control" id="exampleInputLinkedin" name="linkedin" aria-describedby="linkedinHelp" placeholder="Enter linkedin">
        </div>
        <div class="form-group">
            <label for="exampleInputTwitter">twitter</label>
            <input type="text" class="form-control" id="exampleInputTwitter" name="twitter" aria-describedby="twitterHelp" placeholder="Enter twitter">
        </div>
        <div class="form-group">
            <label for="exampleInputUrl">url</label>
            <input type="text" class="form-control" id="exampleInputUrl" name="url" aria-describedby="urlHelp" placeholder="Enter url">
        </div>
        <div class="form-group">
            <label for="exampleInputCollage">collage</label>
            <input type="text" class="form-control" id="exampleInputCollage" name="collage" aria-describedby="collageHelp" placeholder="Enter collage">
        </div>
        <div class="form-group">
            <label for="exampleInputSubject">subject</label>
            <input type="text" class="form-control" id="exampleInputSubject" name="subject" aria-describedby="subjectHelp" placeholder="Enter subject">
        </div>
        <div class="form-group">
            <label for="exampleInputChapter">chapter</label>
            <input type="text" class="form-control" id="exampleInputChapter" name="chapter" aria-describedby="chapterHelp" placeholder="Enter chapter">
        </div>
        <div class="form-group">
            <label for="exampleInputName">name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputDescription">description</label>
            <input type="text" class="form-control" id="exampleInputDescription" name="description" aria-describedby="descriptionHelp" placeholder="Enter description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>
