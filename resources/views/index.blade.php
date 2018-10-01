@extends('layouts.app')

@section('title')
    Kooxer
@endsection
@section('content')
    <!--our services-->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="padding: 40px!important;">
                    <div class="service-inside-title" style="text-align: center!important;">
                        <h2>Kooxer</h2>
                        <p>La plateforme qui regroupe tous les groupes des differents Resaux Sociaux en categories.</p>
                        <p>Vous pouvez creer vos groupes en un click. Comme vous pouvez aussi joindre les groupes d'une categorie dont vous portez l'interet !!!</p>
                        {{--<a href="#" class="btn">all services</a>--}}
                    </div><!--/.service-inside-title-->
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-service-inside">
                                <h3>Whatsapp</h3>
                                <p>Tous les groupes Whatsapp en un seul click</p>
                                <a href="{{route('whatsapp')}}">Voir<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--/.single-service-inside-->
                        </div>
                        <div class="col-md-6">
                            <div class="single-service-inside">
                                <h3>Facebook</h3>
                                <p>Tous les groupes Facebook en un seul click</p>
                                <a href="{{route('facebook')}}">Voir<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--/.single-service-inside-->
                        </div>
                        <div class="col-md-6">
                            <div class="single-service-inside">
                                <h3>Viber</h3>
                                <p>Tous les groupes Viber en un seul click</p>
                                <a href="{{route('viber')}}">Voir<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--/.single-service-inside-->
                        </div>
                        <div class="col-md-6">
                            <div class="single-service-inside">
                                <h3>Skype</h3>
                                <p>Tous les groupes Skype en un seul click</p>
                                <a href="{{route('skype')}}">Voir<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--/.single-service-inside-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </section>

    <!--how-we-work-->
    @section('description')
        <div class="testimonial-title" style="text-align: center">
            <h2 >Ajouter Votre Groupe!!!</h2>
            <p>Laissez les gens chercher et rejoindre vos groupes en les ajoutant ici</p>
        </div>
    @endsection
    @include('layouts.form')
    @include('layouts.contact')

@endsection


