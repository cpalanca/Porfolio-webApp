@extends('layout')

@section('title', 'Portada')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo Web</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Ab aliquid corporis culpa
                    debitis delectus dolore eaque facere iste, labore,
                    mollitia neque nobis obcaecati qui rem saepe tenetur
                    veritatis voluptatibus voluptatum.
                </p>
                <a class="btn btn-lg btn-block btn-primary"
                   href="{{ route('contact') }}">
                    Contáctame</a>
                <a class="btn btn-lg btn-block btn-outline-primary"
                   href="{{ route('projects.index') }}">
                    Portafolio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
            </div>
        </div>
    </div>



@endsection
