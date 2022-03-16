<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dc Comics | Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="bg-top-header">
        <div class="top-header container">
            <a>DC POWER VISA</a>
            <a>ADDITIONAL DC SITES</a>
        </div>
    </div>
    {{-- HEADER --}}
    <header class="container">
        <figure>
            <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo" />
        </figure>
        <nav>
            <ul>
                @php
                    $links = config('links');
                @endphp
                @foreach ($links as $link)
                    <li>
                        {{ $link['text'] }}
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
    {{-- MAIN --}}
    <main>
        <div class="main-content">
            <div id="content">
                <span id="current">CURRENT SERIES</span>
                <section id="jumbo"></section>


                @yield('main-content')

            </div>
        </div>
    </main>
    {{-- FOOTER --}}
    <footer>
        <div>
            <div class="bg-section">
                <section class="container">
                    <section id="links">
                        <ul>
                            <li class="list-item">DC COMICS</li>
                            @php
                                $dc_comics = config('dc_comics');
                            @endphp
                            @foreach ($dc_comics as $link)
                                <li>{{ $link['text'] }}</li>
                            @endforeach
                            <li class="list-item">SHOP</li>
                            @php
                                $shop = config('shop');
                            @endphp
                            @foreach ($shop as $link)
                                <li>{{ $link['text'] }}</li>
                            @endforeach
                        </ul>
                        <ul>
                            <li class="list-item">DC</li>
                            @php
                                $dc = config('dc');
                            @endphp
                            @foreach ($dc as $link)
                                <li>
                                    {{ $link['text'] }}
                                </li>
                            @endforeach
                        </ul>
                        <ul>
                            <li class="list-item">SITES</li>
                            @php
                                $sites = config('sites');
                            @endphp
                            @foreach ($sites as $link)
                                <li>
                                    {{ $link['text'] }}
                                </li>
                            @endforeach
                        </ul>
                    </section>
                    <section id="dc-img"></section>
                </section>
            </div>
            <div id="footer-bottom">
                <section id="socials">
                    <div class="container">
                        <button>SIGN-UP NOW!</button>
                        <div class="icons">
                            <p>FOLLOW US</p>
                            <img src="{{ asset('images/footer-facebookotto.png') }}" alt="icon" />
                            <img src="{{ asset('images/footer-twitterotto.png') }}" alt="icon" />
                            <img src="{{ asset('images/footer-youtube.png') }}" alt="icon" />
                            <img src="{{ asset('images/footer-pinterest.png') }}" alt="icon" />
                            <img src="{{ asset('images/footer-periscope.png') }}" alt="icon" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
