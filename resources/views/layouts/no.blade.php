@extends('app')

@section('body')
    <div class="min-h-screen">
        @include('components/navbar')
        @yield('content')
    </div>
    @include('components/footer')
@endsection
