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
            $table->string('staff_name',255)->nullable();
            $table->string('username',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('mobile_no',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('designation',255)->nullable();
            $table->string('dob',255)->nullable();
            $table->string('doj',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('blood_group',255)->nullable();
            $table->string('profile',255)->nullable();
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
        Schema::dropIfExists('staffs');
    }
};
