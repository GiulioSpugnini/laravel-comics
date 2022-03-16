@extends('layouts.main')


@section('main-content')
    <section class="container">
        <section>
            <ul id="cards">
                @foreach ($items as $index => $item)
                    <li class="card-game">
                        <a href="{{ route('item', ['id' => $index]) }}">
                            <img src="{{ asset($item['thumb']) }}" alt="" />
                            <p>{{ $item['series'] }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
            <span id="load-button"><button><strong>LOAD MORE</strong></button></span>
        </section>
    </section>
@endsection
