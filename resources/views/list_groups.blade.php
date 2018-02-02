<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kooxer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">

                </div>

                <div style="text-align:center; font-size:" class="links">
                    <h1>Join Groups through links</h1>
                    <a href="{{route('welcome')}}">or Add your Groups here</a>
                </div>

                <ul class="list-group">
                  @foreach($groups as $group)
                    <li class="list-group-item">
                      <div>
                        <h3>
                          <a href="{{$group->link_to_join}}">{{$group->group_name}}</a>
                        </h3>
                        <div>
                          {{$group->description}}
                        </div>
                        <div>
                          <div>
                            <span>

                                <img height="16" width="16"  src="{{asset('img/').'/'.$group->social_network}}.png">
                              </span>

                              <span>
                                {{$group->social_network}}
                              </span>

                          </div>


                             Category: {{$group->group_category}}

                        </div>
                      </div>
                    </li>
                  @endforeach
                </ul>

            </div>
        </div>
    </body>
</html>
