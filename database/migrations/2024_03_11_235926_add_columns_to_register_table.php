<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register', function (Blueprint $table) {
            $table->string('jawatan')->nullable();
            $table->unsignedBigInteger('sektor_id')->nullable();
            $table->foreign('sektor_id')->references('id')->on('sektor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register', function (Blueprint $table) {
            $table->dropColumn('jawatan');
            $table->dropForeign(['sektor_id']);
            $table->dropColumn('sektor_id');
        });
    }
}

