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

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">

                </div>

                <div style="text-align:center; font-size:" class="links">
                    <!-- <a href="#">Add Group</a>
                    <a href="#">List Groups</a> -->
                    <h1>Let people search and join your group by adding here</h1>
                    <a href="{{route('list_groups')}}">or Join Groups here</a>
                </div>

                <form class="form-horizontal" action="{{route('add_group')}}" method="post">
                  {{ csrf_field() }}
                  <fieldset>

                  <!-- Form Name -->
                  <legend></legend>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Group Name</label>
                    <div class="col-md-4">
                    <input id="textinput" name="group_name" type="text" placeholder="" class="form-control input-md">
                    </div>
                  </div>
                  <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Social Network</label>
                  <div class="col-md-4">
                    <select id="selectbasic" name="social_network" class="form-control">
                      <option value="WhatsApp">WhatsApp</option>
                      <option value="Viber">Viber</option>
                      <option value="Facebook">Facebook</option>
                    </select>
                  </div>
                </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Link to join</label>
                    <div class="col-md-4">
                    <input id="textinput" name="link_to_join" type="text" placeholder="" class="form-control input-md">
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Admin Contact</label>
                    <div class="col-md-4">
                    <input id="textinput" name="admin_contact" type="text" placeholder="" class="form-control input-md">
                    </div>
                  </div>

                  <!-- Select Multiple -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="selectmultiple">Select the group category</label>
                    <div class="col-md-4">
                      <select id="selectmultiple" name="group_category" class="form-control" multiple="multiple">
                        <option value="Computer- IT">Computer- IT</option>
                        <option value="Buy - Sell">Buy - Sell</option>
                      </select>
                    </div>
                  </div>
                  <!-- Textarea -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textarea">Describe what the group is about</label>
                    <div class="col-md-4">
                      <textarea class="form-control" id="textarea" name="description"></textarea>
                    </div>
                  </div>

                  <!-- Button -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton">Add your group</label>
                    <div class="col-md-4">
                      <input type="submit" id="singlebutton" class="btn btn-primary" value="Submit" >
                    </div>
                  </div>

                  </fieldset>
                </form>

            </div>
        </div>
    </body>
</html>
