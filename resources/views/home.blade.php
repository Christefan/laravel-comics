@extends('layouts.app')

@section('main_content')
<div class="container-shop">
    <ul>
        <li>
        <div class="cont">
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" />
            <p>Digital Comics</p>
        </div>
        </li>
        <li>
        <div class="cont">
            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" />
            <p>DC MERCHANDISE</p>
        </div>
        </li>
        <li>
        <div class="cont">
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" />
            <p>SUBSCRIPTION</p>
        </div>
        </li>
        <li>
        <div class="cont">
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" />
            <p>COMIC SHOP LOCATOR</p>
        </div>
        </li>
        <li>
        <div class="cont">
            <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" />
            <p>DC POWER</p>
        </div>
        </li> 
        </ul>
    </div>
@endsection