@extends('layout.base')


@section('content')
    <div class="container">
        <h1 class="text-5xl py-4">About Subheading</h1>

        <nav aria-label="breadcrumb" class="bg-gray-300">
            <ol class="breadcrumb py-3 pl-4">
                <li class="breadcrumb-item"><a href="welcome">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageName }}</li>
            </ol>
        </nav>

        <div class="row py-4">
            <div class="col-md-6">
                <img src="{{ asset('images/Landscape-Color (1).jpg') }}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h1 class="text-3xl">About modern school</h1>
                <p class="text-base">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae dignissimos ad corporis
                    labore ea consequatur nihil dolorem quam sed, fuga ducimus quis, odit eos placeat inventore vero
                    aperiam. Assumenda, optio?</p>
                <p class="text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis corporis quam dolor,
                    amet id dolore?</p>
                <p class="text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, voluptas,
                    modi expedita porro eligendi odit cupiditate alias iusto praesentium, eos hic saepe quo excepturi dolore
                    cumque? Numquam voluptates magnam, ex minus alias accusantium aspernatur, explicabo aliquid asperiores,
                    dolor id placeat.</p>
            </div>
        </div>


    </div>
@endsection
