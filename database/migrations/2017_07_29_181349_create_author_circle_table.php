<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorCircleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_circle', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id')->index();
            $table->unsignedInteger('circle_id')->index();
            $table->boolean('featured')->default(0); // Limit to 12 or less authors per circle_id that will be featured at top. They will also listed below in alphabetical section, so alrigt if more. 
            $table->boolean('defining')->default(0); // Should circle be the defining category for the author?
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::table('author_circle', function ($table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('circle_id')->references('id')->on('circles')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });

        Schema::table('author_circle', function($table) {
            $table->unique(['author_id', 'circle_id'], 'unique_circle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('author_circle', function ($table) {
            $table->dropForeign(['author_id']);
            $table->dropForeign(['circle_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
        });
        
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('author_circle');
        Schema::enableForeignKeyConstraints();
    }
}
