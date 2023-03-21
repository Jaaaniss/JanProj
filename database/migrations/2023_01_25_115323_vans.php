<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->id();
            $table->float("v_cm");
            $table->float("v_eu");
            $table->float("v_uk");
            $table->float("v_usm");
            $table->float("v_usw");
            $table->dateTime("updated_at")->nullable();
        });



        DB::table('vans')->insert(
            array(
                ['v_cm' => '21.5',
                 'v_eu' => '34.5',
                 'v_uk' => '2.5',
                 'v_usm' => '3.5',
                 'v_usw' => '5'],

                ['v_cm' => '22',
                 'v_eu' => '35',
                 'v_uk' => '3',
                 'v_usm' => '4',
                 'v_usw' => '5'],

                ['v_cm' => '22.5',
                 'v_eu' => '36',
                 'v_uk' => '3.5',
                 'v_usm' => '4.5',
                 'v_usw' => '6'],

                ['v_cm' => '23',
                 'v_eu' => '36.5',
                 'v_uk' => '4',
                 'v_usm' => '5',
                 'v_usw' => '6.5'],

                ['v_cm' => '23.5',
                 'v_eu' => '37',
                 'v_uk' => '4.5',
                 'v_usm' => '5.5',
                 'v_usw' => '7'],

                ['v_cm' => '24',
                 'v_eu' => '38',
                 'v_uk' => '5',
                 'v_usm' => '6',
                 'v_usw' => '7.5'],

                ['v_cm' => '24.5',
                 'v_eu' => '38.5',
                 'v_uk' => '5.5',
                 'v_usm' => '6.5',
                 'v_usw' => '8'],

                ['v_cm' => '25',
                 'v_eu' => '39',
                 'v_uk' => '6',
                 'v_usm' => '7',
                 'v_usw' => '8.5'],

                ['v_cm' => '25.5',
                 'v_eu' => '40',
                 'v_uk' => '6.5',
                 'v_usm' => '7.5',
                 'v_usw' => '9'],

                ['v_cm' => '26',
                 'v_eu' => '40.5',
                 'v_uk' => '7',
                 'v_usm' => '8',
                 'v_usw' => '9.5'],

                ['v_cm' => '26.5',
                 'v_eu' => '41',
                 'v_uk' => '7.5',
                 'v_usm' => '8.5',
                 'v_usw' => '10'],

                ['v_cm' => '27',
                 'v_eu' => '42',
                 'v_uk' => '8',
                 'v_usm' => '9',
                 'v_usw' => '10.5'],

                ['v_cm' => '27.5',
                 'v_eu' => '42.5',
                 'v_uk' => '8.5',
                 'v_usm' => '9.5',
                 'v_usw' => '11'],

                ['v_cm' => '28',
                 'v_eu' => '43',
                 'v_uk' => '9',
                 'v_usm' => '10',
                 'v_usw' => '11.5'],

                ['v_cm' => '28.5',
                 'v_eu' => '44',
                 'v_uk' => '9.5',
                 'v_usm' => '10.5',
                 'v_usw' => '12'],

                ['v_cm' => '29',
                 'v_eu' => '44.5',
                 'v_uk' => '10',
                 'v_usm' => '11',
                 'v_usw' => '12.5'],

                ['v_cm' => '29.5',
                 'v_eu' => '45',
                 'v_uk' => '10.5',
                 'v_usm' => '11.5',
                 'v_usw' => '13'],

                ['v_cm' => '30',
                 'v_eu' => '46',
                 'v_uk' => '11',
                 'v_usm' => '12',
                 'v_usw' => '13.5'],

                ['v_cm' => '31',
                 'v_eu' => '47',
                 'v_uk' => '12',
                 'v_usm' => '13',
                 'v_usw' => '14'],

                ['v_cm' => '32',
                 'v_eu' => '48',
                 'v_uk' => '13',
                 'v_usm' => '14',
                 'v_usw' => '14.5'],

                ['v_cm' => '33',
                 'v_eu' => '49',
                 'v_uk' => '14',
                 'v_usm' => '15',
                 'v_usw' => '15.5'],

                ['v_cm' => '34',
                 'v_eu' => '50',
                 'v_uk' => '15',
                 'v_usm' => '16',
                 'v_usw' => '16.5']
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
