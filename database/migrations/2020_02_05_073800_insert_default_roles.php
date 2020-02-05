<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDefaultRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::table('auth_items')->insert(
            [
                'name'=>'Admin',
                'description'=>'Administrator Role',
                'type'=>'role',
                'rule_name'=>null,
                'data'=>null,
            ]
        );
        \Illuminate\Support\Facades\DB::table('auth_items')->insert(
            [
                'name'=>'ChuThe',
                'description'=>'Chu The Role',
                'type'=>'role',
                'rule_name'=>null,
                'data'=>null,
            ]
        );
        \Illuminate\Support\Facades\DB::table('auth_items')->insert(
            [
                'name'=>'NguoiMua',
                'description'=>'Nguoi Mua Role',
                'type'=>'role',
                'rule_name'=>null,
                'data'=>null,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::table('auth_items')->truncate();

    }
}
