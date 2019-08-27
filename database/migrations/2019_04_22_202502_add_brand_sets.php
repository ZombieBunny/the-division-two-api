<?php

use App\Models\BrandSet;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBrandSets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        BrandSet::create([
            'name' => '5.11 Tactical'
        ]);

        BrandSet::create([
            'name' => 'Airaldi Holdings'
        ]);

        BrandSet::create([
            'name' => 'Alps Summit Armaments'
        ]);

        BrandSet::create([
            'name' => 'Badger Tuff'
        ]);

        BrandSet::create([
            'name' => 'China Light Industries Corporation'
        ]);

        BrandSet::create([
            'name' => 'Douglas & Harding'
        ]);

        BrandSet::create([
            'name' => 'Fenris Group AB'
        ]);

        BrandSet::create([
            'name' => 'Gila Guard'
        ]);

        BrandSet::create([
            'name' => 'Murakami Industries'
        ]);

        BrandSet::create([
            'name' => 'Overlord Armaments'
        ]);

        BrandSet::create([
            'name' => 'Petrov Defense Group'
        ]);

        BrandSet::create([
            'name' => 'Providence Defense'
        ]);

        BrandSet::create([
            'name' => 'Richter & Kaiser GmbH'
        ]);

        BrandSet::create([
            'name' => 'Sokolov Concern'
        ]);

        BrandSet::create([
            'name' => 'Wyvern Wear'
        ]);

        BrandSet::create([
            'name' => 'Yaahl Gear'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
