@extends('layouts.client')
@section('title')
    DinhCanh
@endsection
@section('content')
    <h1>Home</h1>
@endsection

@section('sidebar')
    @parent
    <h1>Product Sidebar</h1>    
@endsection

@section('js')
    
@endsection

@push('scripts')
    <script>
        console.log('1')
    </script>
@endpush