@extends('layout.base')


@section('content')
    <div class="container">
        <h1>Welcome Subheading</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Welcome</li>
            </ol>
        </nav>

        <p>{{$url}}</p>

        @include('partials.welcomePage.body')
    </div>
@endsection

