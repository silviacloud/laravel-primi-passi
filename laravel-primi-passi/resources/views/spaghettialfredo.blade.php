
@extends ('layout')

@section('pasta')

  <main>

    @foreach($pastas as $key => $pasta)

      <h2>{{$pasta['titolo']}}</h2>
      <h4>Pasta {{$pasta['tipo']}}</h4>
      <p>Tempo di cottura: {{$pasta['cottura']}}</p>
      <img src="{{$pasta['src']}}" alt="">

    @endforeach

  </main>

@endsection
