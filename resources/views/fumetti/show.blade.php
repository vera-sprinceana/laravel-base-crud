@extends('layouts.layout')
@section('title', 'fumetto')
@section('content')


<div class="mt-4 py-5">
    <div class="container">
        <div class="rows">
            <div class="col-8">
                <img src="{{$fumetto->thumb}}" alt="img-comics" class="img-show">
                <div>
                    <button class="button-current">current series</button>
                    <h2>{{$fumetto->title}}</h2>
                    <ul class="bg-green">
                        <li>U.S Price: {{$fumetto->price}}</li>
                        <li>AVAILABLE</li>
                        <li>Check Availability</li>
                    </ul>
                    <p>{{$fumetto->description}}</p>
                </div>
            </div>
            <div class="col-4">
                <h2>ADVERTIMENT</h2>
                <img src="{{asset('assets/images/adv.jpg')}}" alt="">
            </div>
        </div>
        <div>
        </div>
        <div>
        </div>
    </div>
</div>


@endsection
</body>

</html>
