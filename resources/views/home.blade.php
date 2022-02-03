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
<div class="end-main">
<div class="icon-container">
        <div class="box">
        <div class="icons">
                <img src="img/buy-comics-digital-comics.png" alt="">
                <span>Digital comics</span>
        </div>
        <div class="icons">
                <img src="img/buy-comics-merchandise.png" alt="">
                <span>DC merchandise</span>
        </div>
        <div class="icons">
                <img src="img/buy-comics-subscriptions.png" alt="">
                <span>Subscription</span>
        </div>
        <div class="icons">
                <img class="sp" src="img/buy-comics-shop-locator.png" alt="">
                <span>Comic Shop Locator</span>
        </div>
        <div class="icons">
                <img src="img/buy-dc-power-visa.svg" alt="">
                <span>Dc power visa</span>
        </div>
        </div>
        
</div>
</div>

@endsection
