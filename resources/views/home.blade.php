@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo">
</div>
<section>
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $items)
            <div class="row">
                <div class="col d-flex align-items-stretch p-2 m-2">
                    <div class="card">
                        <img src="{{$items['thumb']}}" class="card-img-top thumb" style="width: 18rem;" alt="descr">
                        <div class="card-body">
                            <!-- <h5 class="card-title">{{$items['title']}}</h5> -->
                            <!-- <p class="card-text">{{$items['description']}}</p> -->
                        </div>
                    </div>
                </div>

            </div>

        @endforeach
    </div>

</section>

@endsection