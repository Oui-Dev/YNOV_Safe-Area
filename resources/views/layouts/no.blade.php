@extends('app')

@section('body')
    <div class="min-h-screen flex flex-col">
        @include('components.no.navbar')
        @yield('content')
    </div>
    @include('components.no.footer')
@endsection
