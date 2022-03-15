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
    <header class="container">
        <figure>
            <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo" />
        </figure>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li>
                        {{ $link }}
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
            <span id="current">CURRENT SERIES</span>
            <section id="jumbo"></section>
            <section class="container">
                <section>
                    <ul id="cards">
                        @foreach ($products as $product)
                            <li class="card-game">
                                <img src="{{ asset($product['thumb']) }}" alt="" />
                                <p>{{ $product['series'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                    <span id="load-button"><button><strong>LOAD MORE</strong></button></span>
                </section>
            </section>
        </div>
        <div id="main-footer-container">
            <section class="container" id="figures">
                <figure>
                    <img src="" alt="" />

                </figure>
            </section>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
