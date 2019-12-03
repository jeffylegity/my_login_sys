<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
         $table->bigIncrements('id');
         $table->string('username')->unique();
         $table->string('name');
         $table->string('password');
         $table->string('date_hired');
         $table->string('gender');
         $table->string('status');
         $table->string('emp_status');
         $table->string('division');
         $table->string('department');
         $table->string('section');
         $table->string('position');
         $table->integer('role')->nullable();
         $table->timestamp('email_verified_at')->nullable();
         $table->rememberToken();
         $table->timestamps();
        });
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