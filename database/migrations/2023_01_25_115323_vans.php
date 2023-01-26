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
        Schema::create('vans', function (Blueprint $table) {
            $table->id("v_cm")->float();
            $table->integer("v_eu");
            $table->integer("v_uk");
            $table->integer("v_usm");
            $table->integer("v_usw");
        });



        DB::table('vans')->insert(
            array(
                ['v_cm' => '22', 'v_eu' => '34', 'v_uk' => '34', 'v_usm' => '40', 'v_usw' => '40'],
                ['v_cm' => '23', 'v_eu' => '55', 'v_uk' => '55', 'v_usm' => '40', 'v_usw' => '40'],
                ['v_cm' => '23.5', 'v_eu' => '29', 'v_uk' => '29', 'v_usm' => '40', 'v_usw' => '40'],
                ['v_cm' => '25', 'v_eu' => '24', 'v_uk' => '24', 'v_usm' => '40', 'v_usw' => '40'],
                ['v_cm' => '25.5', 'v_eu' => '20', 'v_uk' => '20', 'v_usm' => '40', 'v_usw' => '40']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vans');
    }
};
