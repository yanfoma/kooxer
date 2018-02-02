<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('groups_list', function(Blueprint $table){
        $table->increments('id');
        $table->string('social_network');
        $table->string('link_to_join');
        $table->string('description');
        $table->string('admin_contact');
        $table->string('group_category');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
