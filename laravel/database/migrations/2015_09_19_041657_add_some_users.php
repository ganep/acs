<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddSomeUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create(array(
            'email' => 'admin@gmail.com',
            'password' => Hash::make('nimda'),
        ));
        User::create(array(
            'email' => 'georgepal@gmail.com',
            'password' => Hash::make('123456'),
        ));
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
