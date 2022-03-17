@extends('layouts.main')

@section('current')
    <span id="current">CURRENT SERIES</span>
@endsection
@section('comics-items')
    <div id="bg-items">
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
    </div>
    <div id="main-footer-container">
        <section class="container" id="figures">
            @php
                $shop_items = config('shop_items');
            @endphp

            @foreach ($shop_items as $shop_item)
                <figure>
                    <img src="{{ asset($shop_item['url']) }}" alt="item" />
                    {{ $shop_item['title'] }}
                </figure>
            @endforeach
        </section>
    </div>
    </section>
    </section>
    </div>
@endsection
