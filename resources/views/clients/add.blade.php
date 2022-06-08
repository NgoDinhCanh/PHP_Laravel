@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h1>Add Product</h1>
    <form action="" method="POST">
        @if($errors->any())
            <div class="alert alert-danger text-center">
                {{$errorMessage}}
            </div>
        @endif
        <div class="mb-3">
            <label for="">Name Product</label>
            <input type="text" class="form-control" name="product-name" placeholder="Name Product..." value="{{old('product-name')}}">
            @error('product-name')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="text" class="form-control" name="product-price" placeholder="Price..." value="{{old('product-price')}}">
            @error('product-price')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Add product</button>
    </form>
@endsection



@section('css')
    
@endsection