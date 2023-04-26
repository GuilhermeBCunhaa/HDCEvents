@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<img src="/img/banner.jpg" alt="Banner">

@if (10 > 5)
        <p>true</p>
@endif

<p>{{$nome }}</p>

@if ($nome == "pedro")
       <p>nome é predro</p>
@else
        <h1>nome é {{$nome}} e a idade é {{$idade}}</h1>
@endif

@for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
@endfor

@foreach ($nomes as $nome)
        <p>{{$loop->index }}</p>
        <p>{{$nome }}</p>
@endforeach

@endsection