@extends('layouts.main')
@section('body')
    @include('layouts.header')

    <div id="layoutSidenav">
        @include('layouts.sidenav')

        <div id="layoutSidenav_content">
            @yield('body_content')
        </div>
    </div>
@endsection