@extends('layout.base')


@section('content')
    <div class="container">
        <h1>Services Subheading</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
            </ol>
        </nav>

        <img src="{{ asset('images/Landscape-Color (1).jpg') }}" alt="landscape picture" width="100%">

        @include('partials.servicePage.cards')
    </div>
@endsection
