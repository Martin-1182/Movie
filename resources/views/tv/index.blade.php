@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-shows">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Populárne seriály</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularTv as $tvshow)
            <x-tv-card :tvshow="$tvshow" />
            @endforeach
        </div>
    </div> <!-- end pouplar-shows -->
    <div class="now-playing-shows py-24">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Najlepšie hodnotené</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($topRatedTv as $tvshow)
            <x-tv-card :tvshow="$tvshow" />
            @endforeach
        </div>
    </div>
</div> <!-- end now-playing-shows -->
</div>
@endsection
