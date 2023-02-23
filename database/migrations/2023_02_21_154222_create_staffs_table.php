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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('staff_code',255)->nullable();
            $table->string('staff_name',255)->nullable();
            $table->string('username',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('security_key',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('date_of_birth',255)->nullable();
            $table->string('date_of_joining',255)->nullable();
            $table->string('mobile_number',255)->nullable();
            $table->string('designation',255)->nullable();
            $table->string('blood_group',255)->nullable();
            $table->text('address')->nullable();
            $table->string('profile',255)->nullable();
            $table->string('last_login',255)->nullable();
            $table->enum('status',[ 'Active', 'Trash','Inactive'])->default('Active');
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
        Schema::dropIfExists('staff');
    }
};
