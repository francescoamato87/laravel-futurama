@extends('Layouts.main')

@section('content')
    <main>
        <div class="container">
            <img src=" {{$charactersFiltered['image']}} " alt="{{$charactersFiltered['first-name']}} {{$charactersFiltered['last-name']}} ">
                <h1>{{$charactersFiltered['first-name']}} {{$charactersFiltered['last-name']}} </h1>
            <h4>{{$charactersFiltered['gender']}}</h4>
            <ul>
                @foreach ($charactersFiltered['sayings'] as $item)
                 <li> {{$item}} </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
