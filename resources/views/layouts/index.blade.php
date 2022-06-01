@extends('layouts.layout')

@section('title', 'fumetti')
@section('content')
<main>
    <div class="bg-main">
        <div class="container">
            <div class="row ">
                @forelse($fumetti as $key=>$fumetto )
                <div class="card">
                    <img src="{{ $fumetto['thumb'] }} " alt="immagine fumetto" class="img-fumetto">
                    <h3>{{ $fumetto['title'] }}</h3>
                    <a href="{{route('show', ['id' =>$key])}}"> vai</a>
                </div>

                @empty
                <h2>Non ci sono fumetti</h2>
            </div>

        </div>
    </div>
    @endforelse

</main>
<div class="bg-dark">
    <button class="btn"> load more</button>
</div>
<div class="bg-blue">
    <div class="container">
        <ul class="text-uppercase">
            <li>
                <img src=" {{asset('assets/images/buy-comics-digital-comics.png')}} " alt="img-dc" style="width:50px;">

            </li>
            <li>
                <h5>digital comics</h5>
            </li>
            <li>
                <img src=" {{asset('assets/images/buy-comics-merchandise.png')}} " alt="img-merchandise"
                    style="width:50px;">

            </li>
            <li>
                <h5>dc merchandise</h5>
            </li>
            <li>
                <img src=" {{asset('assets/images/buy-comics-subscriptions.png')}} " alt="img-subscriptions"
                    style="width:50px;">

            </li>
            <li>
                <h5>subscriptions</h5>
            </li>
            <li>
                <img src=" {{asset('assets/images/buy-comics-shop-locator.png')}} " alt="img-shop-locator"
                    style="width:50px;">

            </li>
            <li>
                <h5>comics shop locator</h5>
            </li>

            <li>
                <img src=" {{asset('assets/images/buy-dc-power-visa.svg')}} " alt="img-visa" style="width:50px;">

            </li>
            <li>
                <h5>dc power visa</h5>
            </li>
        </ul>
    </div>
</div>
@endsection
