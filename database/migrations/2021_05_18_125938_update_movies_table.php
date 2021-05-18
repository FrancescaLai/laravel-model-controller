<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('author');
            $table->dropColumn('genre');
            $table->string('director', 50)->after('title');
            $table->string('genres', 50)->after('director');
            $table->year('year')->after('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('author', 50);
            $table->string('genre', 50);
            $table->dropColumn('director');
            $table->dropColumn('genres');
            $table->dropColumn('year');
        });
    }
}
