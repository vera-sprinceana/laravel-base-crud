@extends('layouts.layout')
@section('title', 'edit')
@section('content')
<div class="mt-4 py-5 text-center">
    <div>
        <h1>Modificare  comics</h1>
        <div class="container">
            {{-- Errori validazione --}}
            @if($errors ->any()) 
            {{-- Se presenti errori lato backend --}}
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('characters.update', $fumetto->id)}}" method="POST" novalidate>
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-6 my-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" class="form-control"
                            name="title" required value="{{$fumetto->title}}">
                        <div id="passwordHelpBlock" class="form-text">
                            *Modifica il titolo
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <div class="form-floating">
                            <h6>*Modifica la descrizione</h6>
                            <textarea class="form-control" placeholder="*Inserisci la descrizione"
                                id="description" name="description"  required style="height: 100px" >{{$fumetto->description}}</textarea>
                            <label for="description"></label>
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input id="thumb" class="form-control" name="thumb" value="{{$fumetto->thumb}}">
                        <div id="passwordHelpBlock" class="form-text">
                            *Modifica l'immagine
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="price" class="form-label">Price</label>
                        <input id="price" class="form-control" name="price" required value="{{$fumetto->price}}">
                        <div  class="form-text">
                            *Modifica il prezzo del fumetto
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="series" class="form-label">Series</label>
                        <input  id="series" class="form-control" name="series" required value="{{$fumetto->series}}">
                        <div  class="form-text">
                            *Modifica serie del fumetto
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="sale_date" class="form-label">Sale_date</label>
                        <input id="sale_date" class="form-control" name="sale_date" required value="{{$fumetto->sale_date}}">
                        <div  class="form-text">
                            *Modifica la data dell'inizio vendita
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="type" class="form-label">Type</label>
                        <input id="type" class="form-control" name="type" required value="{{$fumetto->type}}">
                        <div class="form-text">
                            *Modifica il tipo di fumetto
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success">Salva le modifiche</button>
            </form>
        </div>
    </div>
</div>

</body>

</html>
@endsection