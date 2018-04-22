@extends('layouts.app')

@section('title')
    Kooxer
@endsection
@section('styles')
    <style>
        .results .active{
            background: #00a89a !important;
        }
    </style>
@endsection
@section('content')
    <section class="section lb" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="home-tab clearfix">
                        <ul class="nav nav-tabs results">
                            <li class="<?php $segment = Request::get('All');      if($segment) echo "active" ; ?> "><a href="#All">All            ({{$AllCount}})</a></li>
                            <li class="<?php $segment = Request::get('Facebook'); if($segment) echo "active" ; ?> "><a href="#Facebook">Facebook  ({{$FacebookCount}})</a></li>
                            <li class="<?php $segment = Request::get('Whatsapp'); if($segment) echo "active" ; ?>"><a  href="#Whatsapp">Whatsapp  ({{$WhatsappCount}})</a></li>
                            <li class="<?php $segment = Request::get('Viber');    if($segment) echo "active" ; ?>"><a  href="#Viber">Viber        ({{$ViberCount}})</a></li>
                            <li class=" pull-right"><a href="#Add"> Add your Groups here</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="All" class="tab-pane fade      <?php $segment = Request::get('All');      if($segment >="1")  echo "in active" ; ?> ">
                                <aside class="topic-list">
                                    <div class="panel-group" role="tablist">
                                        <div class="panel panel-default">
                                            @foreach($All as $group)
                                                <article class="well btn-group-sm clearfix">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="col-sm-2">
                                                                    <img src="{{asset('img/').'/'.$group->social_network}}.png" alt="" class="img-responsive img-thumbnail">
                                                                    <a  class="caption" href="#" class="{{$group->social_network}}">{{$group->social_network}}</a>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <header class="topic-title clearfix">
                                                                        <div class="col-sm-12">
                                                                            <div class="col-sm-12 pull-left">
                                                                                <h3><a href="{{$group->link_to_join}}">{{$group->group_name}}</a></h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="col-sm-8 pull-left">
                                                                                <p>
                                                                                    {{$group->description}}
                                                                                    <a class="readmore" href="{{$group->link_to_join}}">Join Now -></a>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <ul class="list-inline tags">
                                                                                    Category: <li><a href="#" class="{{$group->social_network}}">{{$group->group_category}}</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </header>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article><!-- end article well -->
                                            @endforeach
                                            <div class="panel panel-default">
                                                <article class="well btn-group-sm clearfix">
                                                    <div class="text-center">
                                                        {{$All->render()}}
                                                    </div>
                                                </article>
                                            </div><!-- end panel -->
                                        </div><!-- end panel-group -->
                                    </div>
                                </aside><!-- end topic-list -->
                            </div><!-- end tab pane -->

                            <div id="Facebook" class="tab-pane fade <?php $segment = Request::get('Facebook'); if($segment) echo "in active" ; ?> ">
                                <aside class="topic-list">
                                    <div class="panel-group" role="tablist">
                                        <div class="panel panel-default">
                                        @foreach($facebook as $group)
                                            <article class="well btn-group-sm clearfix">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <div class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <div class="col-sm-2">
                                                                <img src="{{asset('img/').'/'.$group->social_network}}.png" alt="" class="img-responsive img-thumbnail">
                                                                <a  class="caption" href="#" class="{{$group->social_network}}">{{$group->social_network}}</a>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <header class="topic-title clearfix">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-12 pull-left">
                                                                            <h3><a href="{{$group->link_to_join}}">{{$group->group_name}}</a></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-8 pull-left">
                                                                            <p class="text-justify">
                                                                                {{$group->description}}
                                                                                <a class="readmore" href="{{$group->link_to_join}}">Join Now -></a>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <ul class="list-inline tags">
                                                                                Category: <li><a href="#" class="{{$group->social_network}}">{{$group->group_category}}</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </article><!-- end article well -->
                                        @endforeach
                                        <div class="panel panel-default">
                                            <article class="well btn-group-sm clearfix">
                                                <div class="text-center">
                                                    {{$facebook->render()}}
                                                </div>
                                            </article>
                                        </div><!-- end panel -->
                                    </div><!-- end panel-group -->
                                </aside><!-- end topic-list -->
                            </div><!-- end tab pane -->

                            <div id="Whatsapp" class="tab-pane fade <?php $segment = Request::get('Whatsapp'); if($segment) echo "in active" ; ?>">
                                <aside class="topic-list">
                                    <div class="panel-group" role="tablist">
                                        @foreach($Whatsapp as $group)
                                            <div class="panel panel-default">
                                                <article class="well btn-group-sm clearfix">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="col-sm-2">
                                                                    <img src="{{asset('img/').'/'.$group->social_network}}.png" alt="" class="img-responsive img-thumbnail">
                                                                    <a  class="caption" href="#" class="{{$group->social_network}}">{{$group->social_network}}</a>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <header class="topic-title clearfix">
                                                                        <div class="col-sm-12">
                                                                            <div class="col-sm-12 pull-left">
                                                                                <h3><a href="{{$group->link_to_join}}">{{$group->group_name}}</a></h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="col-sm-8 pull-left">
                                                                                <p class="text-justify">
                                                                                    {{$group->description}}
                                                                                    <a class="readmore" href="{{$group->link_to_join}}">Join Now -></a>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <ul class="list-inline tags">
                                                                                    Category: <li><a href="#" class="{{$group->social_network}}">{{$group->group_category}}</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </header>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article><!-- end article well -->
                                            </div><!-- end panel -->
                                        @endforeach
                                        <div class="panel panel-default">
                                            <article class="well btn-group-sm clearfix">
                                                <div class="text-center">
                                                    {{$Whatsapp->render()}}
                                                </div>
                                            </article>
                                        </div><!-- end panel -->
                                    </div><!-- end panel-group -->
                                </aside><!-- end topic-list -->
                            </div><!-- end tab pane -->

                            <div id="Viber" class="tab-pane fade    <?php $segment = Request::get('Viber');    if($segment) echo "in active" ; ?>"">
                                <aside class="topic-list">
                                    <div class="panel-group" role="tablist">
                                        @foreach($Viber as $group)
                                            <div class="panel panel-default">
                                                <article class="well btn-group-sm clearfix">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="col-sm-2">
                                                                    <img src="{{asset('img/').'/'.$group->social_network}}.png" alt="" class="img-responsive img-thumbnail">
                                                                    <a  class="caption" href="#" class="{{$group->social_network}}">{{$group->social_network}}</a>
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <header class="topic-title clearfix">
                                                                        <div class="col-sm-12">
                                                                            <div class="col-sm-12 pull-left">
                                                                                <h3><a href="{{$group->link_to_join}}">{{$group->group_name}}</a></h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="col-sm-12 pull-left">
                                                                                <p class="text-justify">
                                                                                    {{$group->description}}
                                                                                    <a class="readmore" href="{{$group->link_to_join}}">Join Now -></a>
                                                                                </p>
                                                                                <ul class="list-inline tags">
                                                                                    Category: <li><a href="#" class="{{$group->social_network}}">{{$group->group_category}}</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </header>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article><!-- end article well -->
                                            </div><!-- end panel -->
                                        @endforeach
                                        <div class="panel panel-default">
                                            <article class="well btn-group-sm clearfix">
                                                <div class="text-center">
                                                    {{$Viber->render()}}
                                                </div>
                                            </article>
                                        </div><!-- end panel -->
                                    </div><!-- end panel-group -->
                                </aside><!-- end topic-list -->
                            </div><!-- end tab pane -->

                            <div id="Add" class="tab-pane fade      <?php $segment = Request::get('Add'); if($segment) echo "in active" ; ?> ">
                                @include('layouts.form')
                            </div><!-- end tab pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end home-tab -->
                </div><!-- end col -->
                @include('layouts.aside')
            </div><!-- end row --><!-- end container -->
    </section>
@endsection