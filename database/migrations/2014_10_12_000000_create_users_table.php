<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('role_id')->default(3);
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

     /*   $name = 'Admin';
        $lastname = 'Admin';
        $email = 'admin@epic-crm.com';
        $created_at = new DateTime();

        DB::table('users')->insert([
            'created_at' => $created_at,
            'updated_at' => $created_at,
            'role_id' => 1,
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'password' => Hash::make('Password12345!'),
        ]);
     */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
