@extends('layouts.client')
@section('title')
    {{$title}}
@endsection
@section('content')
    <h1>Add Product</h1>
    <form action="" method="POST">
        <input type="text" name="username">
        @csrf
        @method('PUT')
        <button type="submit">Submit</button>
    </form>
@endsection



@section('css')
    
@endsection