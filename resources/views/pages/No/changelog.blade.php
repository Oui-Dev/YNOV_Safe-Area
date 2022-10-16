@extends('layouts.frontend')

@section('content')
    <section id="changelog" class="flex-row">
        <h1>Historique des versions</h1>
        <div class="w-1/2">
            <ul role="list" class="divide-y divide-gray-200">
                @foreach($versions as $version)
                    <li :key="{{$version->id}}" class="py-4">
                        <div class="flex space-x-3">
                            @if($version->is_archived())
                                <div class="h-6 w-6 rounded-full"></div>
                            @else
                                <span class="material-icons h-6 w-6 rounded-full text-blue">check_circle</span>
                            @endif
                            <div class="flex-1 space-y-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm font-medium">Version {{$version->name}} ({{$version->generation}}.{{$version->revision}}.{{$version->correction}})</h3>
                                    <p class="text-sm text-gray-800">{{Carbon\Carbon::parse($version->created_at)->format('d/m/Y')}}</p>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm text-gray-500">{{$version->changelog}}</p>
                                    <p class="text-sm text-gray-800">
                                        @if($version->is_updated())
                                            Mis à jour
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

@endsection
