<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarchandisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchandises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->decimal('quantity',8,2);
            $table->string('place');
            $table->string('form');
            $table->decimal('property',6,2);  /* Correspond valeur IBC / EBC / nb d'utilisation levure*/
            $table->string('note')->nullable;
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::table('marchandises', function (Blueprint $table){
            $table->dropForeign('marchandises_user_id_foreign');
        });
        Schema::dropIfExists('marchandises');
    }
}
