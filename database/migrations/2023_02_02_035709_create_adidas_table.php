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
        Schema::create('adidas', function (Blueprint $table) {
            $table->id();
            $table->float("a_cm");
            $table->string("a_eu");
            $table->float("a_uk");
            $table->float("a_usm");
            $table->string("a_usw");
            $table->dateTime("updated_at")->nullable();
            $table->dateTime("created_at")->nullable();
        });

        DB::table('adidas')->insert(
            array(
                ['a_cm' => '22.1',
                 'a_eu' => '36',
                 'a_uk' => '3.5',
                 'a_usm' => '4',
                 'a_usw' => '5'],

                ['a_cm' => '22.5',
                 'a_eu' => '36 2/3',
                 'a_uk' => '4',
                 'a_usm' => '4.5',
                 'a_usw' => '5.5'],

                ['a_cm' => '22.9',
                 'a_eu' => '37 1/3',
                 'a_uk' => '4.5',
                 'a_usm' => '5',
                 'a_usw' => '6'],

                ['a_cm' => '23.3',
                 'a_eu' => '38',
                 'a_uk' => '5',
                 'a_usm' => '5.5',
                 'a_usw' => '6.5'],

                ['a_cm' => '23.8',
                 'a_eu' => '38 2/3',
                 'a_uk' => '5.5',
                 'a_usm' => '6',
                 'a_usw' => '7'],

                ['a_cm' => '24.2',
                 'a_eu' => '39 1/3',
                 'a_uk' => '6',
                 'a_usm' => '6.5',
                 'a_usw' => '7.5'],

                ['a_cm' => '24.6',
                 'a_eu' => '40',
                 'a_uk' => '6.5',
                 'a_usm' => '7',
                 'a_usw' => '8'],

                ['a_cm' => '25',
                 'a_eu' => '40 2/3',
                 'a_uk' => '7',
                 'a_usm' => '7.5',
                 'a_usw' => '8.5'],

                ['a_cm' => '25.5',
                 'a_eu' => '41 1/3',
                 'a_uk' => '7.5',
                 'a_usm' => '8',
                 'a_usw' => '9'],

                ['a_cm' => '25.9',
                 'a_eu' => '42',
                 'a_uk' => '8',
                 'a_usm' => '8.5',
                 'a_usw' => '9.5'],

                ['a_cm' => '26.3',
                 'a_eu' => '42 2/3',
                 'a_uk' => '8.5',
                 'a_usm' => '9',
                 'a_usw' => '10'],

                ['a_cm' => '26.7',
                 'a_eu' => '43 1/3',
                 'a_uk' => '9',
                 'a_usm' => '9.5',
                 'a_usw' => '10.5'],

                ['a_cm' => '27.1',
                 'a_eu' => '44',
                 'a_uk' => '9.5',
                 'a_usm' => '10',
                 'a_usw' => '11'],

                ['a_cm' => '27.6',
                 'a_eu' => '44 2/3',
                 'a_uk' => '10',
                 'a_usm' => '10.5',
                 'a_usw' => '11.5'],

                ['a_cm' => '28',
                 'a_eu' => '45 1/3',
                 'a_uk' => '10.5',
                 'a_usm' => '11',
                 'a_usw' => '12'],

                ['a_cm' => '28.4',
                 'a_eu' => '46',
                 'a_uk' => '11',
                 'a_usm' => '11.5',
                 'a_usw' => '12.5'],

                ['a_cm' => '28.8',
                 'a_eu' => '46 2/3',
                 'a_uk' => '11.5',
                 'a_usm' => '12',
                 'a_usw' => '13'],

                ['a_cm' => '29.3',
                 'a_eu' => '47 1/3',
                 'a_uk' => '12',
                 'a_usm' => '12.5',
                 'a_usw' => '13.5'],

                ['a_cm' => '29.7',
                 'a_eu' => '48',
                 'a_uk' => '12.5',
                 'a_usm' => '13',
                 'a_usw' => '14'],

                ['a_cm' => '30.1',
                 'a_eu' => '48 2/3',
                 'a_uk' => '13',
                 'a_usm' => '13.5',
                 'a_usw' => '14.5'],

                ['a_cm' => '30.5',
                 'a_eu' => '49 1/3',
                 'a_uk' => '13.5',
                 'a_usm' => '14',
                 'a_usw' => '15'],

                ['a_cm' => '31',
                 'a_eu' => '50',
                 'a_uk' => '14',
                 'a_usm' => '14.5',
                 'a_usw' => '15.5'],

                ['a_cm' => '31.4',
                 'a_eu' => '50 2/3',
                 'a_uk' => '14.5',
                 'a_usm' => '15',
                 'a_usw' => '--'],

                ['a_cm' => '31.8',
                 'a_eu' => '51 1/3',
                 'a_uk' => '15',
                 'a_usm' => '16',
                 'a_usw' => '--'],

                ['a_cm' => '32.6',
                 'a_eu' => '52 2/3',
                 'a_uk' => '16',
                 'a_usm' => '17',
                 'a_usw' => '--'],

                ['a_cm' => '33.5',
                 'a_eu' => '53 1/3',
                 'a_uk' => '17',
                 'a_usm' => '18',
                 'a_usw' => '--'],

                ['a_cm' => '34.3',
                 'a_eu' => '54 2/3',
                 'a_uk' => '18',
                 'a_usm' => '19',
                 'a_usw' => '--'],

                ['a_cm' => '35.2',
                 'a_eu' => '55 2/3',
                 'a_uk' => '19',
                 'a_usm' => '20',
                 'a_usw' => '--']
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
        Schema::dropIfExists('adidas');
    }
};
