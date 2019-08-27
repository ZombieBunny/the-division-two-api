<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGearTalents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gear_talents', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('type');
            $table->string('type_slot');
            $table->string('name');
            $table->string('description');
            $table->string('stat_name')->nullable();
            $table->float('value')->nullable();
            $table->json('available');
            $table->string('requirements');
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
        Schema::dropIfExists('gear_talents');
    }
}
