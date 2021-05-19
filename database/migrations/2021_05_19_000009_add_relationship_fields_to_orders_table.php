<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_3881268')->references('id')->on('users');
            $table->unsignedBigInteger('service_provider_id')->nullable();
            $table->foreign('service_provider_id', 'service_provider_fk_3881269')->references('id')->on('users');
        });
    }
}
