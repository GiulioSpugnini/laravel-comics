@extends ('layouts.main')

@section('comics-items')
    <div class="item-container" id="bg-item">
        <div id="item-cover">
            <img src="{{ $item['thumb'] }}" alt="cover">
        </div>
        <div class="info-item">
            <h3 class="fw-bolder">
                {{ $item['title'] }}
            </h3>
            <div class="bg-green my-2 p-3 text-light">
                U.S Price: {{ $item['price'] }}
            </div>
            <p class="fw-bolder"> {{ $item['description'] }} </p>
        </div>
        <div class="advertisement">
            <img src="{{ asset('images/advs.jpg') }}" alt="adv">
        </div>
    </div>
    <div class="bg-talent-specs">
        <div class="talent-specs">
            <div class="w-50">
                <h5 class="fw-bolder py-3">Talent</h5>
                <h6 class="fw-bolder border-top py-2">Art by:
                    @foreach ($item['artists'] as $artist)
                        {{ $artist }}
                    @endforeach
                </h6>
                <h6 class="fw-bolder border-top">Written by:
                    @foreach ($item['writers'] as $writers)
                        {{ $writers }}
                    @endforeach
                </h6>
            </div>
            <div class="w-50 mx-3">
                <h5 class="fw-bolder py-3">Specs</h5>
                <h6 class="fw-bolder border-top py-2">Series: {{ $item['series'] }} </h6>
                <h6 class="fw-bolder border-top py-2">U.S Price: {{ $item['price'] }} </h6>
                <h6 class="fw-bolder border-top py-2">On Sale Date: {{ $item['sale_date'] }} </h6>
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
