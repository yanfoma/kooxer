@extends('layouts.app')

@section('title')
    Kooxer
@endsection
@section('content')
    <br>
    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="widget">
                        <div class="custom-module">
                            <h4 class="module-title text-center"><i class="material-icons">group</i> Let people search and join your social groups by adding here <br>
                                <a class="btn btn-raised btn-info gr" onclick="window.location.href='/list_groups?All=1'" ><i class="material-icons">list</i>&nbsp;&nbsp; or Join Groups here<div class="ripple-container"></div></a></h4>
                            <div class="panel panel-primary">
                                <div class="panel-body" style="background: white; box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                    @include('layouts.form')
                                </div>
                            </div>
                        </div><!-- end custom-module -->
                    </div><!-- end widget -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection


