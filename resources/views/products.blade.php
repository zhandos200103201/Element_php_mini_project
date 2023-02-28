@extends('layout')

@section('title')
    Products
@endsection

@section('header')
    <h1>Products</h1>       <a href="/products/create">Create a new product</a>
@endsection

@section('content')
    @foreach($products as $product)
        <article class="{{!$product->trashed() ? 'bg-info' : 'bg-danger'}}">
            <h1><a href="/products/{{$product->slug}}">{{$product->title}}</a></h1>
            <div>{{$product->description}}</div>
        </article>
    @endforeach
@endsection
