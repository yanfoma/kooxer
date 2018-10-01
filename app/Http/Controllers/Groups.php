<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\contactMessage;
use Illuminate\Support\Facades\Session;

class Groups extends Controller{

    public function add_group(Request $request){

        $this->validate($request,[
            'group_name'     => 'required',
            'social_network' => 'required',
            'link_to_join'   => 'required|url',
            'group_category' => 'required',
            'description'    => 'required',
        ]);

        $group_name         = $request->input('group_name');
        $social_network     = $request->input('social_network');
        $link_to_join       = $request->input('link_to_join');
        $admin_contact      = $request->input('admin_contact');
        $group_category     = $request->input('group_category');
        $description        = $request->input('description');

        if(empty($group_category)){
          $group_category = "None";
        }

        Group::create([
            'group_name'      => $group_name,
            'social_network'  => $social_network,
            'link_to_join'    => $link_to_join,
            'description'     => $description,
            'admin_contact'   => $admin_contact,
            'group_category'  => $group_category
        ]);

        Session::flash('success',"Groupe Ajouté Avec Succèss !!!");

        return redirect()->back();
    }

    public function ajouterGroupe(){

        return view('ajouterUnGroupe');
    }

    public function list_groups(){

      $All           = Group::orderBy('created_at','desc')->paginate(10,['*'], 'All');
      $facebook      = Group::where('social_network','Facebook')->orderBy('created_at','desc')->paginate(10,['*'], 'Facebook');
      $Whatsapp      = Group::where('social_network','Whatsapp')->orderBy('created_at','desc')->paginate(10,['*'], 'Whatsapp');
      $Viber         = Group::where('social_network','Viber')->orderBy('created_at','desc')   ->paginate(10,['*'],    'Viber');
      $AllCount      = Group::count();
      $FacebookCount = Group::where('social_network','Facebook')->count();
      $WhatsappCount = Group::where('social_network','Whatsapp')->count();
      $ViberCount    = Group::where('social_network','Viber')->count();
      return view('list_groups', ['All' => $All,'facebook' => $facebook,'Whatsapp' => $Whatsapp, 'Viber' => $Viber,'FacebookCount' => $FacebookCount,'WhatsappCount' => $WhatsappCount,'ViberCount' => $ViberCount, 'AllCount' => $AllCount ]);
    }

    public function whatsapp(){
      $Whatsapp      = Group::where('social_network','Whatsapp')->orderBy('created_at','desc')->paginate(4);
      $WhatsappCount = Group::where('social_network','Whatsapp')->count();
      return view('list_groupsWhatsapp', ['Whatsapp' => $Whatsapp,'WhatsappCount' => $WhatsappCount]);
    }

    public function facebook(){
        $facebook      = Group::where('social_network','Facebook')->orderBy('created_at','desc')->paginate(9);
        $FacebookCount = Group::where('social_network','Facebook')->count();
        return view('list_groupsFacebook', ['facebook' => $facebook,'FacebookCount' => $FacebookCount]);
    }

    public function skype(){
        $skype      = Group::where('social_network','Skype')->orderBy('created_at','desc')->paginate(9);
        $skypeCount = Group::where('social_network','Skype')->count();
        return view('list_groupsSkype', ['skype' => $skype,'skypeCount' => $skypeCount]);
    }

    public function viber(){
        $viber         = Group::where('social_network','Viber')->orderBy('created_at','desc')->paginate(9);
        $viberCount    = Group::where('social_network','Viber')->count();
        return view('list_groupsViber', ['Viber' => $viber,'ViberCount' => $viberCount]);
    }

    function search(Request $request){

        $query  = request('query');

        $group = Group::where('group_name','like','%'.$query.'%')->get();

        if($group->count()){

            $result = array(
                'data' => $group,
                'message' => 'success',
                'query '  => $query,
                'count'   => $group->count(),
            );
        }else{
            $result = array(
                'message' => 'false'
            );
        }

        return response($result);

        //return $request;

    }

    public function email(Request $request){

        $this->validate($request,[
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required'
        ]);


        //dd($request);

        $email      = $request->email;
        $name       = $request->name;
        $message    = $request->message;
        $send       = 'fabioued@yahoo.fr';

        Mail::to($send)->send(new contactMessage($name,$message,$email));

        Session::flash('success','Message Sent Succesfully !!!');

        return redirect()->back();
    }
}
