<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Groups extends Controller{

    public function add_group(Request $request){
        $group_name = $request->input('group_name');
        $social_network = $request->input('social_network');
        $link_to_join = $request->input('link_to_join');
        $admin_contact = $request->input('admin_contact');
        $group_category = $request->input('group_category');
        $description = $request->input('description');
        if(empty($group_category)){
          $group_category = "None";
        }
        DB::table('groups_list')->insert(
          ['group_name' => $group_name,
          'social_network' => $social_network,
          'link_to_join' => $link_to_join,
          'description' => $description,
          'admin_contact' => $admin_contact,
          'group_category' => $group_category]
        );

        return redirect()->route('list_groups');
    }

    public function list_groups(){
      $groups = DB::table('groups_list')->get();
      return view('list_groups', ['groups' => $groups ]);
    }
}
