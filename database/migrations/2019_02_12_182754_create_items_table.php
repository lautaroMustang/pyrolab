<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('items', function (Blueprint $table) {
          $table->mediumIncrements('id');
          $table->string('code',100);
          $table->string('name',100);
          $table->smallInteger('qtyProvPresentation');
          $table->double('providerPrice', 11, 4)->unsigned();
          $table->double('standardPrice', 11, 4)->unsigned();
          $table->tinyInteger('status')->unsigned();
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
        Schema::dropIfExists('items');
    }
}
