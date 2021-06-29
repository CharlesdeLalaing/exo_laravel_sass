@extends('layout.base')


@section('content')
    <div class="container">
        <h1 class="text-5xl py-4">Services Subheading</h1>

        <nav aria-label="breadcrumb" class="bg-gray-300">
            <ol class="breadcrumb py-3 pl-4">
                <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageName }}</li>
            </ol>
        </nav>
        <div class="pb-3">
            <img src="{{ asset('images/Landscape-Color (1).jpg') }}" alt="landscape picture" width="100%">
        </div>

        @include('partials.servicePage.cards')
    </div>
@endsection
