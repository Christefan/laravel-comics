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
    <section class="comic-description-bg">
        <div class="comic-description">
            <div class="comic-description-sx">
                <h3>Talent</h3>
                <div class="prova">
                    <h4>Art by:</h4>
                    <p>
                        @foreach($comic_card['artists'] as $item)
                        {{$item}},
                        @endforeach
                    </p> 
                </div>
                <div class="prova">
                    <h4>Written by:</h4>
                    <p>
                        @foreach($comic_card['writers'] as $item)
                        {{$item}},
                        @endforeach
                    </p>
                </div>  
            </div>
            <div class="comic-description-dx">
                <h3>Specs</h3>
                <div class="prova">
                    <h4>Series: <span>{{$comic_card['series']}}</span></h4>
                </div>
                <div class="prova">
                    <h4>U.S. Price: <span>{{$comic_card['price']}}</span></h4>
                </div>
                <div class="prova">
                    <h4>On Sale Date: <span>DATA</span></h4>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection