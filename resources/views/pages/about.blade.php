@extends('layout.base')


@section('content')
    <div class="container">
        <h1>About Subheading</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
            </ol>
        </nav>


    </div>
@endsection
