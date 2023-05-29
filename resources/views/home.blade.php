@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('main_content')
    <div class="container d-flex justify-content-center mt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Vai alla lista dei fumetti</a>
    </div>
@endsection
