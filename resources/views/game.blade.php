@extends('layout.gametitle')
@section('content')
<ul>
    @foreach($gamename as $name)
        @foreach($name as $x )
        <li>
            {{$x}}<br>
        </li>
        @endforeach
    @endforeach
</ul>
@endsection
