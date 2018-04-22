<div class="chat-wrapper">
    <div class="panel panel-primary">
        <div class="panel-heading" id="chatcordion">
            <a class="open-support btn btn-raised btn-info collapsed" data-toggle="collapse" data-parent="#chatcordion" href="#chatcordion1" aria-expanded="false">
                <i class="material-icons">chat</i>
                <div class="ripple-container"></div></a>
        </div>
        <div class="panel-collapse collapse" id="chatcordion1" aria-expanded="false" style="height: 0px;">
            <span class="chat-logo"><i class="material-icons">announcement</i> Kooxer Contact</span>
            <div class="panel-footer">
                <form class="sidebar-login" action="{{route('email')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group has-error has-feedback is-empty"><input type="text"  class="form-control" placeholder="Your Name"                 name="name"   value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                            <label class="control-label">{{ $errors->first('name') }}</label>
                        @endif
                    </div>
                    <div class="form-group has-error has-feedback is-empty"><input type="email" class="form-control" placeholder="Email Address"             name="email"   value="{{old('email')}}" required>
                        @if ($errors->has('email'))
                            <label class="control-label">{{ $errors->first('email') }}</label>
                        @endif
                    </div>
                    <div class="form-group has-error has-feedback is-empty"><textarea           class="form-control" placeholder="Type your message here..." name="message" required rows="10">{{old('message')}}</textarea>
                        @if ($errors->has('message'))
                            <label class="control-label">{{ $errors->first('message') }}</label>
                        @endif
                    </div>
                <button class="btn btn-raised btn-info gr " id="btn-chat" type="submit">Send</button>
                </form>
            </div><!-- end panel-footer -->
        </div><!-- end panel-collapse -->
    </div><!-- end panel -->
</div>