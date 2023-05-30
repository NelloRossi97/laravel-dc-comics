@extends('layouts.app')

@section('page_title')
@endsection

@section('main_content')
    <div class="container">
        <h1>Modifica il fumetto: {{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp"
                    value="{{ $comic->title }}">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">
                    {{ $comic->description }}
            </textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelp"
                    value="{{ $comic->thumb }}">
                <div id="thumbHelp" class="form-text">Inserisci immagine</div>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                    value="{{ $comic->price }}">
                <div id="priceHelp" class="form-text">Inserisci prezzo</div>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelp"
                    value="{{ $comic->series }}">
                <div id="seriesHelp" class="form-text">Inserisci la serie</div>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp"
                    value="{{ $comic->sale_date }}">
                <div id="sale_dateHelp" class="form-text">Inserisci la data (AAAA/MM/DD)</div>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp"
                    value="{{ $comic->type }}">
                <div id="typeHelp" class="form-text">Inserisci il tipo</div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
