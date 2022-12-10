@extends('layouts.appSec')
@section('content')
<div class="container">
    <h1>دروس مقرر {{ $chapter[0]['name'] }}</h1>
    <div class="section3">
        <ol class="">
            @foreach ($chapter as $s)
            <li class="listchpaters"><a href="{{ url()->current()}}/{{ $s->slug }}">{{ $s->name }} </a></li>
            @endforeach
        </ol>

</div>
{{--
<div class="section3">
    @foreach ($subject as $s)
    @if ($s->chapter == 1)
    <ol class="first-ol">
        <li class="lists">
        <ol class="nested-ol first-ol">
            <li class="lists"><a href="{{ url()->current()}}/{{$s->chapter}}/{{ $s->slug }}">الدرس </a></li>
        </ol>
    </li>
</ol>
@continue
@endif
@endforeach
</div> --}}


</div>

@endsection
