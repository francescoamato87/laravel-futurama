@extends('Layouts.main')

@section('content')
    <main>
        <h1>HOMEPAGE</h1>
        <section class= "container">
                <ul class="character-list">
                @foreach($characters as $item)
                    <li>
                        <a href=" {{route('character-detail', $item['id'])}} ">
                            <h2> {{$item['first-name']}} {{$item['last-name']}} </h2>
                            <img class="img-futurama" src=" {{$item['image']}} " alt="{{$item['first-name']}} {{$item['last-name']}}">
                                <p>{{$item['age']}}</p>
                            <p>{{$item['gender']}}</p>
                            <p>{{$item['species']}}</p>
                            <p>{{$item['homePlanet']}}</p>
                            <p>{{$item['occupation']}}</p>
                     </a>
                    </li>
                @endforeach
                </ul>
        </section>
    </main>
@endsection
