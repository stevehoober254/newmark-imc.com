<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsightsTable extends Migration
{
    public function up()
    {
        Schema::create('insights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->longText('description');
            $table->longText('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
