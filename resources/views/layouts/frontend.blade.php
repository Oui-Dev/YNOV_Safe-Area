@extends('app')

@section('body')
    <div id="frontend">
        <div class="header">
            @include('components/navbar')
        </div>
        <div class="body">
            @yield('content')
        </div>
        <div class="footer">
            @include('components/footer')
        </div>
    </div>
@endsection
