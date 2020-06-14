
@extends ('layout')

  @section('pasta')

    <main>
      @for($i = 1; $i < $numero; $i++)

        <div class="">
          {{$i}}

          {{-- @for($t = 1; $t <= 3; $t++) --}}
            {{$test}}
          {{-- @endfor --}}

          {{$prova}}
        </div>

      @endfor
    </main>


  @endsection
