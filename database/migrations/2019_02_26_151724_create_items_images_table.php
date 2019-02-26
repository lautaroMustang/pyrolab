<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_items', function (Blueprint $table) {
          $table->mediumIncrements('id');
          $table->mediumInteger('item_id')->unsigned();
          $table->tinyInteger('order');
          $table->string('fotoPath',100);
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
        Schema::table('images_items', function (Blueprint $table) {
            //
        });
    }
}
