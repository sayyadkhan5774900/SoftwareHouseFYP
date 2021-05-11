<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service');
            $table->longText('description');
            $table->string('address');
            $table->string('city');
            $table->string('postcode')->nullable();
            $table->string('contact');
            $table->boolean('meeting')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
