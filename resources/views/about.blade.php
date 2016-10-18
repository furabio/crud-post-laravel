<h1>About us</h1>

My name is {{ $name }}, I'm have {{ $age }} years and alive from
{{ $city }}.

@section('content')
    @for ($i = 0; $i < 10; $i++)
        <p> {{ $i }} </p>
    @endfor
@endsection

