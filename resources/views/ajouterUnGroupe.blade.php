@extends('layouts.app')

@section('title')
    Kooxer Ajouter Votre Groupe
@endsection
@section('styles')
@endsection
@section('content')
    <section class="about-team">
        <div class="container">
             @section('description')
                <div class="testimonial-title" style="text-align: center">
                    <h2 >Ajouter Votre Groupe Maintenant</h2>
                </div>
            @endsection
            @include('layouts.form')
        </div><!--/.container-->
    </section>

    @include('layouts.contact')
@endsection