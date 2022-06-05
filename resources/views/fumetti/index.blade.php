@extends('layouts.layout')

@section('title', 'fumetti')
@section('content')
<main>
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <div class="bg-main">
        <div class="container"> 
            <div class="row d-flex flex-wrap g-5 mt-4">
                @forelse($fumetti as $key=>$fumetto)
                <div class="col-2">

                    <div>
                        <img src="{{$fumetto->thumb}} " alt="immagine fumetto">
                        <h5 class="text-white mt-2">{{ $fumetto->title }}</h5>
                        <a href="{{route('characters.show', $fumetto->id)}}" class="btn btn-primary">view</a>
                        <a href="{{route('characters.edit', $fumetto->id)}}" class="btn btn-warning rounded-pill"></a>
                        <form action="{{route('characters.destroy', $fumetto->id)}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger rounded-pill" type="submit"></button>
                        </form>
                    </div>
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
