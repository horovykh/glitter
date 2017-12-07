@extends('layouts.style')

@section('form')
    @include('partials.form')
@endsection

@section('content')
    @include('partials.allPosts')
@endsection

@section('paginate')
        @include('partials.paginator')
@endsection

