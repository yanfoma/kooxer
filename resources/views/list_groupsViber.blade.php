@extends('layouts.app')

@section('title')
    Kooxer Groupes Viber
@endsection
@section('styles')
@endsection
@section('content')
    <section class="about-team">
        <div class="container">
            @if($ViberCount)
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="about-inside-text">
                        <h2>({{$ViberCount}})  {{$ViberCount > 1 ? 'Groupes' : "Groupe"}} Viber </h2>
                    </div>
                </div>
                <div class="w-100"></div>
                    @foreach($Viber as $group)
                        <div class="col-md-4" style="padding-bottom: 30px;">
                            <div class="single-review">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="mt-0">{{$group->group_name}}</h3>
                                        <h5>Admin: {{$group->admin_contact}}</h5>
                                        <i class="fab fa-viber fa-5x" style="color: #675CA8;"></i>
                                    </div>
                                </div>
                                <p><span class="categorieViber" >Categorie:</span> {{$group->group_category}} </p>
                                <p class="text-justify">{{$group->description}}</p>
                                <a href="{{$group->link_to_join}}" class="btnViber">Joindre</a>
                            </div><!--/.single-review-->
                        </div>
                    @endforeach
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        {{$Viber->links()}}
                    </div>
                </div>
            @else
                <div class="col-md-6 offset-md-3">
                    <div class="about-inside-text">
                        <h2>Aucun Groupe Viber !!!</h2>
                    </div>
                </div>
            @section('description')
                <div class="testimonial-title" style="text-align: center">
                    <h2>Ajouter Votre Groupe Viber Maintenant</h2>
                </div>
            @endsection
            @include('layouts.form')
            @endif
            </div>
        </div><!--/.container-->
    </section>
    @include('layouts.contact')
@endsection