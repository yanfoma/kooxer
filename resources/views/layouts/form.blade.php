<!--contact page-->
<section class="how-we-work">
    <div class="container ">
        @yield('description')
        <div class="row col-md-offset-3 formAlign">
            <div class="col-sm-12 col-md-8">
                <div class="contact-form-inside ">
                    <form id="contact-form " method="post" action="{{route('add_group')}}" role="form" >
                        {{csrf_field()}}
                        <div class="messages"></div>
                        <div class="form-group has-error has-feedback is-empty">
                            <label class="col-sm-3 control-label">Nom Du Groupe</label>
                            <div class="col-sm-12">
                            <input id="form_name" type="text" name="group_name" placeholder="Le Nom Du Groupe" required="required" value="{{old('group_name')}}">
                            @if ($errors->has('group_name'))
                                <div class="help-block with-errors">{{ $errors->first('group_name') }}</div>
                            @endif
                            </div>
                        </div>
                        <div class="form-group has-error has-feedback is-empty">
                            <label class="col-sm-3 control-label">Réseau Social</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="exampleSelect1" name="social_network" required>
                                    <option  value="" disabled="" selected="">Choisissez votre réseau social</option>
                                    @if(old('social_network'))
                                        <option value="{{ old('social_network') }}" selected disabled>{{ old('social_network') }}</option>
                                    @endif
                                    <option  value="Whatsapp">WhatsApp</option>
                                    <option  value="Viber"   >Viber</option>
                                    <option  value="Skype"   >Skype</option>
                                    <option  value="Facebook">Facebook</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-error has-feedback is-empty">
                            <label class="col-sm-3 control-label">Lien Du Groupe</label>
                            <div class="col-sm-12">
                                <input type="link" name="link_to_join"  class="form-control" placeholder="Collez Le Lien Du Groupe"  required value="{{old('link_to_join')}}">
                                @if ($errors->has('link_to_join'))
                                <div class="help-block with-errors">{{ $errors->first('link_to_join') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-error has-feedback is-empty">
                            <label class="col-sm-3 control-label">Contact de l'Admin</label>
                            <div class="col-sm-12">
                                <input type="text" name="admin_contact" class="form-control" placeholder="Contact de l'Administrateur" value="{{old('admin_contact')}}" >
                                @if ($errors->has('admin_contact'))
                                    <div class="help-block with-errors">{{ $errors->first('admin_contact') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-error has-feedback is-empty">
                            <label class="col-sm-3 control-label">Catégorie Du Groupe</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="exampleSelect2" name="group_category" required>
                                    <option  value="" disabled="" selected="">Sélectionnez la catégorie de votre groupe</option>
                                    @if(old('group_category'))
                                        <option value="{{ old('group_category') }}" selected disabled>{{ old('group_category') }}</option>
                                    @endif
                                    <option  value="Computer- IT"> Informatique- IT</option>
                                    <option  value="Buy - Sell">   Achat - Vente</option>
                                    <option  value="Litterature">  Litterature</option>
                                    <option  value="Education">    Education</option>
                                    <option  value="Entertainment">Divertissement</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-error has-feedback is-empty">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-12">
                            <textarea class="form-control" rows="3"  name="description"   placeholder="Veuillez Décrire votre groupe" required>
                                {{old('description')}}
                            </textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-3 col-sm-12 ">
                                <button type="submit" class="btn btn-raised btn-info gr">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div><!--/.contact-form-inside-->
            </div>
        </div>
    </div><!--/.container-->
</section>
<!--/.contact page-->
