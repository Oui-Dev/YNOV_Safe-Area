@extends('layouts.frontend')

@section('content')
    <div class="flex flex-col flex-wrap justify-center content-center w-full p-4">
        <h2 class="mt-6 mb-6 text-3xl font-bold tracking-tight text-gray-900">Historique des versions</h2>
        <div class="flow-root" id="changelog">
            <ul role="list" class="-mb-8">
                @foreach ($versions->reverse() as $version)
                    <li :key="{{ $version->id }}">
                        <div class="relative pb-8">
                            @if (!$loop->last)
                                <span class="absolute top-5 left-5 -ml-[5px] h-full w-0.5 bg-gray-200"
                                    aria-hidden="true"></span>
                            @endif
                            <div class="relative flex space-x-3">
                                <div>
                                    <span
                                        class="h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-white {{ !$version->is_archived() ? 'bg-green-400' : 'bg-blue-400' }}">
                                        @if (!$version->is_archived())
                                            <span class="material-icons text-white text-xl">done</span>
                                        @else
                                            <span class="material-icons text-white text-xl">radio_button_checked</span>
                                        @endif
                                    </span>
                                </div>
                                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                    <div>
                                        <p class="font-medium text-gray-900">
                                            Version {{ $version->name }}
                                            ({{ $version->generation }}.{{ $version->revision }}.{{ $version->correction }})
                                        </p>
                                        <p class="text-sm text-gray-500">{{ $version->changelog }}</p>
                                    </div>
                                    <div class="whitespace-nowrap text-left text-sm text-gray-500">
                                        <time
                                            datetime="event.datetime">{{ Carbon\Carbon::parse($version->created_at)->format('d/m/Y') }}</time>
                                        @if ($version->is_updated())
                                            <span
                                                class="text-xs text-gray-400 whitespace-pre-line">{{ "\n(modifié)" }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
