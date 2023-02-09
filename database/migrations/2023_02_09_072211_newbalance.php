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
        Schema::create('newbalance', function (Blueprint $table) {
            $table->float("nb_cm");
            $table->string("nb_eu");
            $table->float("nb_uk");
            $table->float("nb_usm");
            $table->string("nb_usw");
        });

        DB::table('newbalance')->insert(
            array(
                ['nb_cm' => '22.1',
                 'nb_eu' => '36', 
                 'nb_uk' => '3.5', 
                 'nb_usm' => '4', 
                 'nb_usw' => '5'],

                ['nb_cm' => '22.5',
                 'nb_eu' => '36 2/3', 
                 'nb_uk' => '4', 
                 'nb_usm' => '4.5', 
                 'nb_usw' => '5.5'],

                ['nb_cm' => '22.9',
                 'nb_eu' => '37 1/3', 
                 'nb_uk' => '4.5', 
                 'nb_usm' => '5', 
                 'nb_usw' => '6'],

                ['nb_cm' => '23.3',
                 'nb_eu' => '38', 
                 'nb_uk' => '5', 
                 'nb_usm' => '5.5', 
                 'nb_usw' => '6.5'],

                ['nb_cm' => '23.8',
                 'nb_eu' => '38 2/3', 
                 'nb_uk' => '5.5', 
                 'nb_usm' => '6', 
                 'nb_usw' => '7'],

                ['nb_cm' => '24.2',
                 'nb_eu' => '39 1/3', 
                 'nb_uk' => '6', 
                 'nb_usm' => '6.5', 
                 'nb_usw' => '7.5'],

                ['nb_cm' => '24.6',
                 'nb_eu' => '40', 
                 'nb_uk' => '6.5', 
                 'nb_usm' => '7', 
                 'nb_usw' => '8'],

                ['nb_cm' => '25',
                 'nb_eu' => '40 2/3', 
                 'nb_uk' => '7', 
                 'nb_usm' => '7.5', 
                 'nb_usw' => '8.5'],

                ['nb_cm' => '25.5',
                 'nb_eu' => '41 1/3', 
                 'nb_uk' => '7.5', 
                 'nb_usm' => '8', 
                 'nb_usw' => '9'],

                ['nb_cm' => '25.9',
                 'nb_eu' => '42', 
                 'nb_uk' => '8', 
                 'nb_usm' => '8.5', 
                 'nb_usw' => '9.5'],
                 
                ['nb_cm' => '26.3',
                 'nb_eu' => '42 2/3', 
                 'nb_uk' => '8.5', 
                 'nb_usm' => '9', 
                 'nb_usw' => '10'],

                ['nb_cm' => '26.7',
                 'nb_eu' => '43 1/3', 
                 'nb_uk' => '9', 
                 'nb_usm' => '9.5', 
                 'nb_usw' => '10.5'],

                ['nb_cm' => '27.1',
                 'nb_eu' => '44', 
                 'nb_uk' => '9.5', 
                 'nb_usm' => '10', 
                 'nb_usw' => '11'],

                ['nb_cm' => '27.6',
                 'nb_eu' => '44 2/3', 
                 'nb_uk' => '10', 
                 'nb_usm' => '10.5', 
                 'nb_usw' => '11.5'],

                ['nb_cm' => '28',
                 'nb_eu' => '45 1/3', 
                 'nb_uk' => '10.5', 
                 'nb_usm' => '11', 
                 'nb_usw' => '12'],

                ['nb_cm' => '28.4',
                 'nb_eu' => '46', 
                 'nb_uk' => '11', 
                 'nb_usm' => '11.5', 
                 'nb_usw' => '12.5'],

                ['nb_cm' => '28.8',
                 'nb_eu' => '46 2/3', 
                 'nb_uk' => '11.5', 
                 'nb_usm' => '12', 
                 'nb_usw' => '13'],

                ['nb_cm' => '29.3',
                 'nb_eu' => '47 1/3', 
                 'nb_uk' => '12', 
                 'nb_usm' => '12.5', 
                 'nb_usw' => '13.5'],

                ['nb_cm' => '29.7',
                 'nb_eu' => '48', 
                 'nb_uk' => '12.5', 
                 'nb_usm' => '13', 
                 'nb_usw' => '14'],

                ['nb_cm' => '30.1',
                 'nb_eu' => '48 2/3', 
                 'nb_uk' => '13', 
                 'nb_usm' => '13.5', 
                 'nb_usw' => '14.5'],

                ['nb_cm' => '30.5',
                 'nb_eu' => '49 1/3', 
                 'nb_uk' => '13.5', 
                 'nb_usm' => '14', 
                 'nb_usw' => '15'],

                ['nb_cm' => '31',
                 'nb_eu' => '50', 
                 'nb_uk' => '14', 
                 'nb_usm' => '14.5', 
                 'nb_usw' => '15.5'],

                ['nb_cm' => '31.4',
                 'nb_eu' => '50 2/3', 
                 'nb_uk' => '14.5', 
                 'nb_usm' => '15', 
                 'nb_usw' => '--'],

                ['nb_cm' => '31.8',
                 'nb_eu' => '51 1/3', 
                 'nb_uk' => '15', 
                 'nb_usm' => '16', 
                 'nb_usw' => '--'],

                ['nb_cm' => '32.6',
                 'nb_eu' => '52 2/3', 
                 'nb_uk' => '16', 
                 'nb_usm' => '17', 
                 'nb_usw' => '--'],

                ['nb_cm' => '33.5',
                 'nb_eu' => '53 1/3', 
                 'nb_uk' => '17', 
                 'nb_usm' => '18', 
                 'nb_usw' => '--'],

                ['nb_cm' => '34.3',
                 'nb_eu' => '54 2/3', 
                 'nb_uk' => '18', 
                 'nb_usm' => '19', 
                 'nb_usw' => '--'],

                ['nb_cm' => '35.2',
                 'nb_eu' => '55 2/3', 
                 'nb_uk' => '19', 
                 'nb_usm' => '20', 
                 'nb_usw' => '--']
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
        Schema::dropIfExists('newbalance');
    }
};
