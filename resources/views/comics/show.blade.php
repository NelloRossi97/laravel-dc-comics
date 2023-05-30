@extends('layouts.app')

@section('page_title')
@endsection

@section('main_content')
    <div class="container d-flex my-5 justify-content-center info">

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="pe-5">
                    <h1>{{ $comic->title }}</h1>
                    <p>{{ $comic->description }}</p>
                    <p>Prezzo: {{ $comic->price }}</p>
                    <p>Serie: {{ $comic->series }}</p>
                    <p>Data di rilascio: {{ $comic->sale_date }}</p>
                    <p class="text-capitalize">Tipo: {{ $comic->type }}</p>
                    <div class="d-flex">

                        <a class="btn btn-primary align-self-end" href="{{ route('comics.index') }}">
                            Torna alla lista dei
                            fumetti
                        </a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning ms-3">
                            Modifica Fumetto
                        </a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger ms-3"
                                data-item-title="{{ $comic->title }}">
                                Elimina fumetto
                            </button>
                        </form>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success mt-5">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
        </div>



    </div>
    <div class="container"> </div>
@endsection
