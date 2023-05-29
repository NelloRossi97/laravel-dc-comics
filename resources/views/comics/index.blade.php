@extends('layouts.app')

@section('page_title')
@endsection

@section('main_content')
    <div class="container d-flex my-5 justify-content-center">
        <div class="row justify-content-center">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-card">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h2>
                        <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
