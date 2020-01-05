<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('name');
            $table->string('family_name')->nullable();
            $table->string('other_name')->nullable();
            $table->string('sci_name')->nullable();
            $table->string('suitable_range')->nullable();
            $table->string('water_level')->nullable();
            $table->string('height')->nullable();
            $table->string('root_range')->nullable();
            $table->string('img_trunk')->nullable();
            $table->string('img_blade')->nullable();
            $table->string('img_flower')->nullable();
            $table->string('img_fruit')->nullable();
            $table->string('product_start')->nullable();
            $table->string('product_range')->nullable();
            $table->string('age')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('plants');
    }
}
