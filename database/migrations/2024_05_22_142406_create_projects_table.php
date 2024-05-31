<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('description')->nullable();
            $table->string('category');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('is_closed')->default(false);
            $table->string('slug')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
