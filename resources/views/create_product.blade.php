@extends('layout')

@section('title')
    New product
@endsection

@section('header')
    <h1>Create a new Product</h1><br>
@endsection

@section('content')
    <form action="/products" method="post">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter title">
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="slug" class="form-control" placeholder="Slug">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="price" class="form-control" placeholder="Price">
        </div>
        <br>
        <div class="form-group">
            <input type="number" name="user_id" class="form-control" placeholder="User id">
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection
