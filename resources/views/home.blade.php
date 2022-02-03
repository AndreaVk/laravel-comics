@extends('layouts.base')

@section('pageTitle')
        Home
@endsection

@section('pageContent')
<div class="bg-jumbo">
</div>
<div class="container">
        <h2>Current Series</h2>
        <div class="card-container">
                @foreach($comics as $comic)
                <div class="cm-card">
                        <img src="{{$comic['thumb']}}" alt="">
                        <p>{{$comic['series']}}</p>
                </div>
                @endforeach
        </div>
        <button class="btn">Load more</button>
</div>
@endsection
