<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            $table->longText('description');
            $table->string('office_phone')->nullable();
            $table->string('office_email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
