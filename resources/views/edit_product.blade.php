@extends('layout')

@section('title')
    Edit the product
@endsection

@section('header')
    <h1>Edit a Product</h1><br>
@endsection

@section('content')
    <form action="/products/{{$product->slug}}" method="post">
        @method('PUT')
        <div class="form-group">
            <input type="text" name="title" value="{{$product->title}}" class="form-control" placeholder="Enter title">
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="slug" value="{{$product->slug}}" class="form-control" placeholder="Slug">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="Price">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="user_id" value="{{$product->user_id}}" class="form-control" placeholder="User id">
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="description" value="{{$product->description}}" class="form-control" placeholder="Description">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
    </form>
@endsection
