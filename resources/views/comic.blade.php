@extends('layouts.app')

@section('main_content')
<section class="container-comic">
    <div class="comic-id">
        <div class="comic-id-img"> 
            <img src="{{$comic_card['thumb']}}">
        </div>
    </div>
    <div class="comic-information">
        <div class = "comic-information-sx">
            <h1>{{$comic_card['title']}}</h1>
            <div class="barra">
                <div  class="barra-sx">
                    <p>U.S Price: <span>{{$comic_card['price']}}</span></p>
                </div>
                <div class="barra-dx">
                </div>
            </div>
        	<p>{{$comic_card['description']}}</p>
        </div>

        <div class = "comic-information-dx">
            <h4>ADVERTISEMENT</h4>
            <img src="{{ asset('images/adv.jpg') }}">
        </div>
    </div>
    <div></div>
</section>
@endsection