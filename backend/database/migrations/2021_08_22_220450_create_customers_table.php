<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id');
            $table->timestamps();
            $table->string('name', 50);
            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
