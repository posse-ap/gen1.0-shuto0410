@extends('layouts.select')

@section('content')
    @foreach ( $categories as $category)
    <a href="/{{$category->link}}">{{$category->name}}</a>
    @endforeach 
@endsection
