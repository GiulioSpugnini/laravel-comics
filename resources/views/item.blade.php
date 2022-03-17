@extends ('layouts.main')

@section('comics-items')
    <div class="item-container" id="bg-item">
        <div class="info-item">
            <h3>
                {{ $item['title'] }}
            </h3>
            <div>
                {{ $item['price'] }}
            </div>
            <p> {{ $item['description'] }} </p>
        </div>
        <div class="advertisement">
            <img src="{{ asset('images/advs.jpg') }}" alt="adv">
        </div>
        <div class="talent-specs">
            <div class="w-50">
                <h5>Talent</h5>
                <h6>Art by:
                    @foreach ($item['artists'] as $artist)
                        {{ $artist }}
                    @endforeach
                </h6>
                <h6>Written by:
                    @foreach ($item['writers'] as $writers)
                        {{ $writers }}
                    @endforeach
                </h6>
            </div>
            <div class="w-50">
                <h5>Specs</h5>
                <h6>Series: {{ $item['series'] }} </h6>
                <h6>U.S Price: {{ $item['price'] }} </h6>
                <h6>On Sale Date: {{ $item['sale_date'] }} </h6>
            </div>
        </div>
    </div>
    <div class="bg-item-footer">
        <div id="item-footer-container">
            <section class="container" id="figures">
                @php
                    $shop_items = config('shop_item_footer');
                @endphp
                @foreach ($shop_items as $shop_item)
                    <figure>
                        <h6>{{ $shop_item['title'] }}</h6>
                        <img src="{{ asset($shop_item['url']) }}" alt="item" />
                    </figure>
                @endforeach
            </section>
        </div>
    </div>
@endsection
