@extends('layouts.app')

@section('title', $camp->name)

@section('content')
    <h1 class=" text-heading-1">{{ $camp->name }}</h1>
@endsection