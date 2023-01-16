@extends('layouts.app')

@section('title-page', 'Movies-Home')

@section('main-content')

    @foreach ($all_movies as $elem)

            <h2>{{ $elem->title }}</h2>
            <h3>{{ $elem->original_title }}</h3>
            <h3>{{ $elem->nationality }}</h3>
            <h4>{{ $elem->date }}</h4>
            <h4>{{ $elem->vote }}</h4>

    @endforeach

@endsection