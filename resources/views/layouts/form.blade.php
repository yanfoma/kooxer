<form class="form" action="{{route('add_group')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group has-error has-feedback is-empty">
        <label class="col-sm-3 control-label">Group Name</label>
        <div class="col-sm-9">
            <input type="text" name="group_name" class="form-control" placeholder="Group Name"  required value="{{old('group_name')}}">
            @if ($errors->has('group_name'))
                <label class="control-label">{{ $errors->first('group_name') }}</label>
            @endif
        </div>
    </div>

    <div class="form-group has-error has-feedback is-empty">
        <label class="col-sm-3 control-label">Social Network</label>
        <div class="col-sm-9">
            <select class="form-control" id="exampleSelect1" name="social_network" required>
                <option  value="" disabled="" selected="">Social Network</option>
                @if(old('social_network'))
                    <option value="{{ old('social_network') }}" selected disabled>{{ old('social_network') }}</option>
                @endif
                <option  value="Whatsapp">WhatsApp</option>
                <option  value="Viber"   >Viber</option>
                <option  value="Facebook">Facebook</option>
        </select>
        </div>
    </div>

    <div class="form-group has-error has-feedback is-empty">
        <label class="col-sm-3 control-label">Link to join</label>
        <div class="col-sm-9">
            <input type="link" name="link_to_join"  class="form-control" placeholder="Link to join"  required value="{{old('link_to_join')}}">
            @if ($errors->has('link_to_join'))
                <label class="control-label">{{ $errors->first('link_to_join') }}</label>
            @endif
        </div>
    </div>

    <div class="form-group has-error has-feedback is-empty">
        <label class="col-sm-3 control-label">Admin Contact</label>
        <div class="col-sm-9">
            <input type="text" name="admin_contact" class="form-control" placeholder="Admin Contact" value="{{old('admin_contact')}}" >
            @if ($errors->has('admin_contact'))
                <label class="control-label">{{ $errors->first('admin_contact') }}</label>
            @endif
        </div>
    </div>

    <div class="form-group has-error has-feedback is-empty">
        <label class="col-sm-3 control-label">Group Category</label>
        <div class="col-sm-9">
            <select class="form-control" id="exampleSelect2" name="group_category" required>
                <option  value="" disabled="" selected="">Select the group category</option>
                @if(old('group_category'))
                    <option value="{{ old('group_category') }}" selected disabled>{{ old('group_category') }}</option>
                @endif
                <option  value="Computer- IT"> Computer- IT</option>
                <option  value="Buy - Sell">   Buy - Sell</option>
                <option  value="Litterature">  Litterature</option>
                <option  value="Education">    Education</option>
                <option  value="Entertainment">Entertainment</option>
            </select>
        </div>
    </div>

    <div class="form-group has-error has-feedback is-empty">
        <label class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
            <textarea class="form-control" rows="3"  name="description"   placeholder="Describe what the group is about" required>
                {{old('description')}}
            </textarea>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
        <div class="col-md-3 col-sm-12">
            <button type="submit" class="btn btn-raised btn-info gr">Submit</button>
        </div>
    </div>
</form>
