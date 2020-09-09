<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('role_id')
                ->incrementing(false);
            $table->string('label');

        });

        $roles = array(
            1 => 'ADMIN',
            2 => 'ORGANISER',
            3 => 'REGISTERED');


        foreach($roles as $id => $role) {
            DB::table('roles')->insert(
                array(
                    'role_id' => $id,
                    'label' => $role
                )
            );
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
