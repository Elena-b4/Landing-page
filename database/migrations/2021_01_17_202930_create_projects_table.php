<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('content');
            $table->string('data');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();

//            index
            $table->index('category_id', 'project_category_idx');
            $table->index('client_id', 'project_client_idx');

//            fk
            $table->foreign('category_id', 'project_category_fk')->on('categories')->references('id');
            $table->foreign('client_id', 'project_client_fk')->on('clients')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
