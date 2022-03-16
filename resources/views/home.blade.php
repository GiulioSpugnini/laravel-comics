@extends('layouts.main')

@section('main-content')
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
@endsection
