<?php

use App\Models\SetBonus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSetBbonuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SetBonus::create([
            'name' => '5% Protection From Elites',
            'sequence' => 1,
            'brand_set_name' => '5.11 Tactical',
            'value' => 5,
            'stat_name' => 'Protection From Elites',
        ]);

        SetBonus::create([
            'name' => '10% Extra Incoming Healing',
            'sequence' => 2,
            'brand_set_name' => '5.11 Tactical',
            'value' => 10,
            'stat_name' => 'Extra Incoming Healing',
        ]);

        SetBonus::create([
            'name' => '10% Weapon Handling',
            'sequence' => 3,
            'brand_set_name' => '5.11 Tactical',
            'value' => 10,
            'stat_name' => 'Weapon Handling',
        ]);

        SetBonus::create([
            'name' => '10% Accuracy',
            'sequence' => 1,
            'brand_set_name' => 'Airaldi Holdings',
            'value' => 10,
            'stat_name' => 'Accuracy',
        ]);

        SetBonus::create([
            'name' => '10% Headshot Damage',
            'sequence' => 2,
            'brand_set_name' => 'Airaldi Holdings',
            'value' => 10,
            'stat_name' => 'Headshot Damage',
        ]);

        SetBonus::create([
            'name' => '10% Marksman Rifle Damage',
            'sequence' => 3,
            'brand_set_name' => 'Airaldi Holdings',
            'value' => 10,
            'stat_name' => 'Marksman Rifle Damage',
        ]);

        SetBonus::create([
            'name' => '10% Cooldown Reduction',
            'sequence' => 1,
            'brand_set_name' => 'Alps Summit Armaments',
            'value' => 10,
            'stat_name' => 'Cooldown Reduction',
        ]);

        SetBonus::create([
            'name' => '5% Skill Power',
            'sequence' => 2,
            'brand_set_name' => 'Alps Summit Armaments',
            'value' => 5,
            'stat_name' => 'Skill Power',
        ]);

        SetBonus::create([
            'name' => '15% Hive Skill Power',
            'sequence' => 3,
            'brand_set_name' => 'Alps Summit Armaments',
            'value' => 15,
            'stat_name' => 'Hive Skill Power',
        ]);

        SetBonus::create([
            'name' => '7% Damage To Elites',
            'sequence' => 1,
            'brand_set_name' => 'Badger Tuff',
            'value' => 7,
            'stat_name' => 'Damage To Elites',
        ]);

        SetBonus::create([
            'name' => '15% Armor on Kill',
            'sequence' => 2,
            'brand_set_name' => 'Badger Tuff',
            'value' => 15,
            'stat_name' => 'Armor on Kill',
        ]);

        SetBonus::create([
            'name' => '15% Chem Launcher Skill Power',
            'sequence' => 3,
            'brand_set_name' => 'Badger Tuff',
            'value' => 15,
            'stat_name' => 'Chem Launcher Skill Power',
        ]);

        SetBonus::create([
            'name' => '10% Explosives Damage',
            'sequence' => 1,
            'brand_set_name' => 'China Light Industries Corporation',
            'value' => 10,
            'stat_name' => 'Explosives Damage',
        ]);

        SetBonus::create([
            'name' => '10% Shotgun Damage',
            'sequence' => 2,
            'brand_set_name' => 'China Light Industries Corporation',
            'value' => 10,
            'stat_name' => 'Shotgun Damage',
        ]);

        SetBonus::create([
            'name' => '10% Cooldown Reduction',
            'sequence' => 3,
            'brand_set_name' => 'China Light Industries Corporation',
            'value' => 10,
            'stat_name' => 'Cooldown Reduction',
        ]);

        SetBonus::create([
            'name' => '5% Accuracy',
            'sequence' => 1,
            'brand_set_name' => 'Douglas & Harding',
            'value' => 5,
            'stat_name' => 'Accuracy',
        ]);

        SetBonus::create([
            'name' => '10% Critical Hit Damage',
            'sequence' => 2,
            'brand_set_name' => 'Douglas & Harding',
            'value' => 10,
            'stat_name' => 'Critical Hit Damage',
        ]);

        SetBonus::create([
            'name' => '7% Critical Hit Chance',
            'sequence' => 3,
            'brand_set_name' => 'Douglas & Harding',
            'value' => 7,
            'stat_name' => 'Critical Hit Chance',
        ]);

        SetBonus::create([
            'name' => '10% Assault Rifle Damage',
            'sequence' => 1,
            'brand_set_name' => 'Fenris Group AB',
            'value' => 10,
            'stat_name' => 'Assault Rifle Damage',
        ]);

        SetBonus::create([
            'name' => '10% Protection From Elites',
            'sequence' => 2,
            'brand_set_name' => 'Fenris Group AB',
            'value' => 10,
            'stat_name' => 'Protection From Elites',
        ]);

        SetBonus::create([
            'name' => '20% Health on Kill',
            'sequence' => 3,
            'brand_set_name' => 'Fenris Group AB',
            'value' => 20,
            'stat_name' => 'Health on Kill',
        ]);

        SetBonus::create([
            'name' => '5% Total Armor',
            'sequence' => 1,
            'brand_set_name' => 'Gila Guard',
            'value' => 5,
            'stat_name' => 'Total Armor',
        ]);

        SetBonus::create([
            'name' => '20% Hazard Protection',
            'sequence' => 2,
            'brand_set_name' => 'Gila Guard',
            'value' => 20,
            'stat_name' => 'Hazard Protection',
        ]);

        SetBonus::create([
            'name' => '15% Pulse Skill Power',
            'sequence' => 3,
            'brand_set_name' => 'Gila Guard',
            'value' => 15,
            'stat_name' => 'Pulse Skill Power',
        ]);

        SetBonus::create([
            'name' => '8% Health',
            'sequence' => 1,
            'brand_set_name' => 'Murakami Industries',
            'value' => 8,
            'stat_name' => 'Health',
        ]);

        SetBonus::create([
            'name' => '10% Hazard Protection',
            'sequence' => 2,
            'brand_set_name' => 'Murakami Industries',
            'value' => 10,
            'stat_name' => 'Hazard Protection',
        ]);

        SetBonus::create([
            'name' => '15% Firefly Skill Power',
            'sequence' => 3,
            'brand_set_name' => 'Murakami Industries',
            'value' => 15,
            'stat_name' => 'Firefly Skill Power',
        ]);

        SetBonus::create([
            'name' => '10% Rifle Damage',
            'sequence' => 1,
            'brand_set_name' => 'Overlord Armaments',
            'value' => 10,
            'stat_name' => 'Rifle Damage',
        ]);

        SetBonus::create([
            'name' => '7.5% Total Armor',
            'sequence' => 2,
            'brand_set_name' => 'Overlord Armaments',
            'value' => 7.5,
            'stat_name' => 'Total Armor',
        ]);

        SetBonus::create([
            'name' => '7% Damage To Elites',
            'sequence' => 3,
            'brand_set_name' => 'Overlord Armaments',
            'value' => 7,
            'stat_name' => 'Damage To Elites',
        ]);

        SetBonus::create([
            'name' => '10% LMG Damage',
            'sequence' => 1,
            'brand_set_name' => 'Petrov Defense Group',
            'value' => 10,
            'stat_name' => 'LMG Damage',
        ]);

        SetBonus::create([
            'name' => '15% Turret Skill Power',
            'sequence' => 2,
            'brand_set_name' => 'Petrov Defense Group',
            'value' => 15,
            'stat_name' => 'Turret Skill Power',
        ]);

        SetBonus::create([
            'name' => '10% Cooldown Reduction',
            'sequence' => 3,
            'brand_set_name' => 'Petrov Defense Group',
            'value' => 10,
            'stat_name' => 'Cooldown Reduction',
        ]);

        SetBonus::create([
            'name' => '10% Skill Power',
            'sequence' => 1,
            'brand_set_name' => 'Providence Defense',
            'value' => 10,
            'stat_name' => 'Skill Power',
        ]);

        SetBonus::create([
            'name' => '8% Health',
            'sequence' => 2,
            'brand_set_name' => 'Providence Defense',
            'value' => 8,
            'stat_name' => 'Health',
        ]);

        SetBonus::create([
            'name' => '5% Weapon Damage',
            'sequence' => 3,
            'brand_set_name' => 'Providence Defense',
            'value' => 5,
            'stat_name' => 'Weapon Damage',
        ]);

        SetBonus::create([
            'name' => '10% Hazard Protection',
            'sequence' => 1,
            'brand_set_name' => 'Richter & Kaiser GmbH',
            'value' => 10,
            'stat_name' => 'Hazard Protection',
        ]);

        SetBonus::create([
            'name' => '20% Pistol Damage',
            'sequence' => 2,
            'brand_set_name' => 'Richter & Kaiser GmbH',
            'value' => 20,
            'stat_name' => 'Pistol Damage',
        ]);

        SetBonus::create([
            'name' => '15% Shield Skill Power',
            'sequence' => 3,
            'brand_set_name' => 'Richter & Kaiser GmbH',
            'value' => 15,
            'stat_name' => 'Shield Skill Power',
        ]);

        SetBonus::create([
            'name' => '10% SMG Damage',
            'sequence' => 1,
            'brand_set_name' => 'Sokolov Concern',
            'value' => 10,
            'stat_name' => 'SMG Damage',
        ]);

        SetBonus::create([
            'name' => '8% Critical Hit Damage',
            'sequence' => 2,
            'brand_set_name' => 'Sokolov Concern',
            'value' => 8,
            'stat_name' => 'Critical Hit Damage',
        ]);

        SetBonus::create([
            'name' => '15% Seeker Skill Power',
            'sequence' => 3,
            'brand_set_name' => 'Sokolov Concern',
            'value' => 15,
            'stat_name' => 'Seeker Skill Power',
        ]);

        SetBonus::create([
            'name' => '7% Critical Hit Damage',
            'sequence' => 1,
            'brand_set_name' => 'Wyvern Wear',
            'value' => 7,
            'stat_name' => 'Critical Hit Damage',
        ]);

        SetBonus::create([
            'name' => '15% Drone Skill Power',
            'sequence' => 2,
            'brand_set_name' => 'Wyvern Wear',
            'value' => 15,
            'stat_name' => 'Drone Skill Power',
        ]);

        SetBonus::create([
            'name' => '10% Critical Hit Chance',
            'sequence' => 3,
            'brand_set_name' => 'Wyvern Wear',
            'value' => 10,
            'stat_name' => 'Critical Hit Chance',
        ]);

        SetBonus::create([
            'name' => '10% Weapon Handling',
            'sequence' => 1,
            'brand_set_name' => 'Yaahl Gear',
            'value' => 10,
            'stat_name' => 'Weapon Handling',
        ]);

        SetBonus::create([
            'name' => '8% Hazard Protection',
            'sequence' => 2,
            'brand_set_name' => 'Yaahl Gear',
            'value' => 8,
            'stat_name' => 'Hazard Protection',
        ]);

        SetBonus::create([
            'name' => '5% Weapon Damage',
            'sequence' => 3,
            'brand_set_name' => 'Yaahl Gear',
            'value' => 5,
            'stat_name' => 'Weapon Damage',
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
