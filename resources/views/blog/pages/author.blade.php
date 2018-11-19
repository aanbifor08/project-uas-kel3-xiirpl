@extends('layouts.app')

@section('template_title'){{ trans('larablog.author.title', ['author' => $author]) }}@endsection
@section('template_description'){{ trans('larablog.author.description', ['author' => $author]) }}@endsection

@push('head')
@endpush

@section('content')


@endsection
