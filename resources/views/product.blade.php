@extends('layout')

@section('title')
    Product: {{$product->title}}
@endsection

@section('header')
    <h1>Product: {{$product->title}}</h1>
@endsection

@section('content')
    <div class="container">
        The title: {!! $product->title !!} <br>
        The price: {!! $product->price !!}<br>
        The description: {!! $product->description !!}<br>
        <a href="/products" class="bold">Back</a>
        <a href="/products/{{$product->slug}}/edit" class="bold">Edit</a>

        @if(!$product->trashed())
            <form action="/products/{{$product->slug}}" method="post">
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Delete</button>
                @csrf
            </form>
        @else
            <a href="/products/{{$product->slug}}/restore">Restore</a>
        @endif

    </div>
@endsection


