@extends('layouts.client')
@section('title')
    DinhCanh
@endsection
@section('content')
    <h1>Home</h1>
    @datetime('2022-07-06 17:31:20')
    <x-package-alert type="info" :content="$message" data-icon='check' />
    <p><img src="https://i.pinimg.com/564x/e9/05/3e/e9053e67a78858269796ef283dab1790.jpg" alt=""></p>
    <p><a href="{{route('dowload-picture').'?picture='.'https://i.pinimg.com/564x/e9/05/3e/e9053e67a78858269796ef283dab1790.jpg'}}" class="btn btn-primary">Dowload Picture</a></p>
    <p><img src="https://i.pinimg.com/originals/37/b2/80/37b280f371c78379530e531b6005fd4d.jpg" alt=""></p>
    <p><a href="{{route('dowload-picture').'?picture='.'https://i.pinimg.com/originals/37/b2/80/37b280f371c78379530e531b6005fd4d.jpg'}}" class="btn btn-primary">Dowload Picture</a></p>

@endsection

@section('sidebar')
    @parent
    <h1>Home Sidebar</h1>    
@endsection

@section('css')
    
@endsection