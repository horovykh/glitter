@extends('layouts.style')

@section('content')
    @include('partials.allPosts')
@endsection

@section('paginate')
        @include('partials.paginator')
@endsection