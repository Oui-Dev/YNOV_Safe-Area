@extends('layouts/frontend')

@section('content')
<section id="changelog" class="flex-row">
    <h1>Changelog and update history</h1>
    <div class="w-1/2">
        <ul role="list" class="divide-y divide-gray-200">
            @foreach($changes as $change)
            <li :key="{{$change['id']}}" class="py-4">
                <div class="flex space-x-3">
                    <img class="h-6 w-6 rounded-full" src="{{Vite::asset('resources/images/check_mark_circle_32x32.png')}}" alt="Checkmark" />
                    <div class="flex-1 space-y-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium">Version {{$change['version']}}</h3>
                            <p class="text-sm text-gray-800">{{$change['date']}}</p>
                        </div>
                        <p class="text-sm text-gray-500">{{$change['content']}}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>

@endsection