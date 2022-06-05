<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_csvs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('vet1_id')->unsigned(); 
            $table->foreign('vet1_id')->references('id')->on('vet1s')->onDelete('cascade');
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
        Schema::dropIfExists('user_csvs', function (Blueprint $table){
            $table->dropForeign('lists_user_id_foreign');
            $table->dropIndex('lists_user_id_index');
            $table->dropColumn('user_id');
            $table->dropForeign('lists_vet1s_id_foreign');
            $table->dropIndex('lists_vet1s_id_index');
            $table->dropColumn('vet1s_id');
        });
    }
};
