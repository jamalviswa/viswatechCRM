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
        Schema::create('salaryinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id')->nullable();
            $table->string('staff_code',255)->nullable();
            $table->string('staff_name',255)->nullable();
            $table->string('gross_salary',255)->nullable();
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
        Schema::dropIfExists('salaryinfos');
    }
};
