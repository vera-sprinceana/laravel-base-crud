@extends('layouts.layout')
@section('title', 'create')
@section('content')
<div class="mt-4 py-5 text-center">
    <div>
        <h1 class="">Creare nuovo comics</h1>
        <div class="container">
            <form action="{{route('characters.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6 my-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" class="form-control"
                            name="title" required>
                        <div id="passwordHelpBlock" class="form-text">
                            *Inserisci il titolo
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <div class="form-floating">
                            <h6>*Inserisci la descrizione</h6>
                            <textarea class="form-control" placeholder="*Inserisci la descrizione"
                                id="description" name="description"  required style="height: 100px"></textarea>
                            <label for="description"></label>
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input id="thumb" class="form-control" name="thumb" required>
                        <div id="passwordHelpBlock" class="form-text">
                            *Inserisci l'immagine
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="price" class="form-label">Price</label>
                        <input id="price" class="form-control" name="price" required>
                        <div  class="form-text">
                            *Inserisci il prezzo del fumetto
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="series" class="form-label">Series</label>
                        <input  id="series" class="form-control" name="series" required>
                        <div  class="form-text">
                            *Inserisci serie del fumetto
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="sale_date" class="form-label">Sale_date</label>
                        <input id="sale_date" class="form-control" name="sale_date" required>
                        <div  class="form-text">
                            *Inserisci la data dell'inizio vendita
                        </div>
                    </div>
                    <div class="col-6 mb-1">
                        <label for="type" class="form-label">Type</label>
                        <input id="type" class="form-control" name="type" required>
                        <div class="form-text">
                            *Specifica il tipo di fumetto
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Invia dati</button>
            </form>
        </div>
    </div>
</div>

</body>

</html>
@endsection
