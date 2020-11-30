@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }}</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com">Laramap.com</a>.</p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <strong>This app has been built by @etsmo for learning purposes.</strong>
            </p>
        </div>
    </div>
    <p>Feel free to help to improve the <a href="https://github.com/Wassimkr/{{ config('app.name') }}">source code</a>.</p> 

    <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which {{ config('app.name') }} was inspired :).</p>
        <p>More info <a href="">here</a>.</p>
    
    <hr>

    <h2>Which tools and services are used in {{ config('app.name') }}</h2>
    <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
    <ul>
    <li>Laravel</li>
    <li>Bootstrap</li>
    <li>Amazon</li>
    <li>Mandrill</li>
    <li>Google</li>
    <li>Gravator</li>
    <li>Heroku</li>
    </ul>  
    <br>
    <br>
    <br>  
    </div> 
@endsection