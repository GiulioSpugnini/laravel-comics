@extends ('layouts.main')

@section('main-content')
    <div>
        <h3>
            {{ $item['title'] }}
        </h3>
        <p>{{ $item['description'] }}</p>
        <h6>Talent</h6>
        <h6>Art by: {{ $item['artists'] }}</h6>
    </div>
@endsection
