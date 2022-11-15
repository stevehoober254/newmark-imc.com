<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title')->unique();
            $table->string('category');
            $table->string('reporting_to');
            $table->string('job_purpose')->nullable();
            $table->longText('key_responsibility');
            $table->longText('qualification');
            $table->longText('how_to_apply');
            $table->boolean('status')->default(0)->nullable();
            $table->longText('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
