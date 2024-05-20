@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <ul>
    @foreach ( $comics as $items)
        <li>{{$items['title']}}</li>

    @endforeach
    </ul>
</section>

@endsection
