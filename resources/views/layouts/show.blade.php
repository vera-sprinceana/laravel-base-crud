@extends('layouts.layout')
@section('title', 'fumetto')
@section('content')


<div>
    <div class="container">
        <div class="rows">
            <div class="col-8">
                <div>
                    {{-- <img src="{{ $fumetto['thumb'] }} " alt="immagine fumetto" class="img-fumetto"> --}}
                    <h2>{{ $fumetto['title'] }}</h2>
                    <ul class="bg-green">
                        <li>U.S Price: {{ $fumetto['price'] }}</li>
                        <li>AVAILABLE</li>
                        <LI>Check Availability</LI>
                    </ul>
                    <p>{{ $fumetto['description'] }}</p>
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

<!-- <footer>

    </footer> -->
</body>

</html>
