@extends('layouts.style')

@section('form')
    @include('replies.formReply')
@endsection

@section('content')
    @include('replies.allComments')
@endsection