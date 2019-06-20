@extends('master')

@section('content')
    <div id="app">
        <my-header></my-header>
        <router-view></router-view>
        <my-footer></my-footer>
    </div>
@endsection