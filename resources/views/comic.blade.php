@extends('layouts.app')

@section('main_content')
<section class="container-comic">
    <div class="comic-id">
        <div class="comic-id-img"></div>
    </div>
    <div class="comic-information">
        <div class = "comic-information-sx">
            <h1>PROVA PROVA PROVA</h1>
            <div class="barra">
                <div class="barra-sx">
                    <p>U.S Price:<span>PREZZO</span></p>
                </div>
                <div class="barra-dx">
                    <p>Check Availability</p>
                </div>
            </div>
        	<p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
        </div>

        <div class = "comic-information-dx">
            <h4>ADVERTISEMENT</h4>
            <img src="{{ asset('images/adv.jpg') }}">
        </div>
    </div>
</section>
@endsection