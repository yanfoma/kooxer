<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups_list";

    protected $fillable = [

        'group_name','social_network','link_to_join','admin_contact','group_category','description'
    ];

}
