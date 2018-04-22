<div class="sidebar col-md-3">
    <div class="widget clearfix">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Search A Group</h3>
            </div>
            <div class="panel-body">
                <form class="sidebar-login"  action="{{route('search')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group is-empty"><input type="text" name="query" id="query" class="form-control" placeholder="Type the group you are looking for"></div>
                    <h4 id="empty"></h4>
                    <button type="button" class="btn btn-raised btn-info gr" id="search"><i class="material-icons">search</i>Search</button>
                </form>
            </div>
        </div>
    </div><!-- end widget -->
    <div class="widget clearfix" id="response">

    </div>

    {{--<div class="widget clearfix">--}}
        {{--<div class="panel panel-primary">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">Latest Topics</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<div class="list-group list-group-no-icon">--}}
                    {{--<div class="list-group-item">--}}
                        {{--<div class="row-topic">--}}
                            {{--<header class="topic-title clearfix">--}}
                                {{--<h3><a href="#">Using font icons on this..</a></h3>--}}
                                {{--<small>Item name: Helper</small>--}}
                                {{--<small>Version: 1.0</small>--}}
                            {{--</header>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="list-group-separator"></div>--}}
                    {{--<div class="list-group-item">--}}
                        {{--<div class="row-topic">--}}
                            {{--<header class="topic-title clearfix">--}}
                                {{--<h3><a href="#">Getting starting edit any HTM..</a></h3>--}}
                                {{--<small>Item name: Milano</small>--}}
                                {{--<small>Version: 1.0</small>--}}
                            {{--</header>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="list-group-separator"></div>--}}
                    {{--<div class="list-group-item">--}}
                        {{--<div class="row-topic">--}}
                            {{--<header class="topic-title clearfix">--}}
                                {{--<h3><a href="#">How to change color schemes..</a></h3>--}}
                                {{--<small>Item name: Helper</small>--}}
                                {{--<small>Version: 1.0</small>--}}
                            {{--</header>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!-- end widget -->--}}
    {{--<div class="widget clearfix">--}}
        {{--<div class="panel panel-primary">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">Latest Topics</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<div class="list-group list-group-no-icon">--}}
                    {{--<div class="list-group-item">--}}
                        {{--<div class="row-topic">--}}
                            {{--<header class="topic-title clearfix">--}}
                                {{--<h3><a href="#">Using font icons on this..</a></h3>--}}
                                {{--<small>Item name: Helper</small>--}}
                                {{--<small>Version: 1.0</small>--}}
                            {{--</header>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="list-group-separator"></div>--}}
                    {{--<div class="list-group-item">--}}
                        {{--<div class="row-topic">--}}
                            {{--<header class="topic-title clearfix">--}}
                                {{--<h3><a href="#">Getting starting edit any HTM..</a></h3>--}}
                                {{--<small>Item name: Milano</small>--}}
                                {{--<small>Version: 1.0</small>--}}
                            {{--</header>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="list-group-separator"></div>--}}
                    {{--<div class="list-group-item">--}}
                        {{--<div class="row-topic">--}}
                            {{--<header class="topic-title clearfix">--}}
                                {{--<h3><a href="#">How to change color schemes..</a></h3>--}}
                                {{--<small>Item name: Helper</small>--}}
                                {{--<small>Version: 1.0</small>--}}
                            {{--</header>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>  --}}

</div><!-- end col -->
