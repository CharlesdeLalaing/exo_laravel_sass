@extends('layout.base')


@section('content')
    <div class="container">
        <h1 class="text-5xl py-4">Welcome Subheading</h1>

        <nav aria-label="breadcrumb" class="bg-gray-300">
            <ol class="breadcrumb py-3 pl-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageName }}</li>
            </ol>
        </nav>

        <p>{{ url()->full() }}</p>

        @include('partials.welcomePage.body')
    </div>

    <div class="text-center py-5">
        <h4 class="text-base text-2xl">Bonus:</h4>
        <p class="text-base py-1">url de la page: <span class="text-muted">{{ url()->current() }}</span> </p>
        <p class="text-base py-1">url de la page precedente: <span class="text-muted">{{ url()->previous() }}</span></p>
    </div>
@endsection
