<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpansionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expansions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boardgame_id')
                  ->constrained('boardgames')
                  ->onUpdate('cascade');
            $table->string('name');
            $table->string('language');
            $table->longText('description');
            $table->float('price', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expansions', function (Blueprint $table) {
            $table->dropForeign(['boardgame_id']);
        });
        Schema::dropIfExists('expansions');
    }
}
