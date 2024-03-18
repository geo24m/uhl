@extends('layouts.site')

@section('title', $title)

@section('content')

@include('partials.breadcrumb')

{!! $page->body !!}
@endsection