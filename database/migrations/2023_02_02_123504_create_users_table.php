<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',255)->nullable();
            $table->string('last_name',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('mobile_no',255)->nullable();
            $table->string('office_no',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('username',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('password_text',255)->nullable();
            $table->string('profile',255)->nullable();
            $table->string('map_url',255)->nullable();
            $table->string('web_url',255)->nullable();
            $table->enum('status',[ 'Active', 'Trash'])->default('Active');
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
};
