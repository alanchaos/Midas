<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusControlsTable extends Migration
{
    public function up()
    {
        Schema::create('status_controls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('desctiption');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
