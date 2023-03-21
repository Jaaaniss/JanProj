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
        Schema::create('nike', function (Blueprint $table) {
            $table->id();
            $table->float("n_cm");
            $table->float("n_eu");
            $table->float("n_uk");
            $table->float("n_usm");
            $table->float("n_usw");
            $table->dateTime("updated_at")->nullable();
        });

        DB::table('nike')->insert(
            array(
                ['n_cm' => '22.5',
                 'n_eu' => '35.5',
                 'n_uk' => '3',
                 'n_usm' => '3.5',
                 'n_usw' => '5'],

                ['n_cm' => '23',
                 'n_eu' => '36',
                 'n_uk' => '3.5',
                 'n_usm' => '4',
                 'n_usw' => '5.5'],

                ['n_cm' => '23.5',
                 'n_eu' => '36.5',
                 'n_uk' => '4',
                 'n_usm' => '4.5',
                 'n_usw' => '6'],

                ['n_cm' => '23.5',
                 'n_eu' => '37.5',
                 'n_uk' => '4.5',
                 'n_usm' => '5',
                 'n_usw' => '6.5'],

                ['n_cm' => '24',
                 'n_eu' => '37',
                 'n_uk' => '4.5',
                 'n_usm' => '5.5',
                 'n_usw' => '7'],

                ['n_cm' => '24',
                 'n_eu' => '38.5',
                 'n_uk' => '5.5',
                 'n_usm' => '6',
                 'n_usw' => '7.5'],

                ['n_cm' => '24.5',
                 'n_eu' => '39',
                 'n_uk' => '6',
                 'n_usm' => '6.5',
                 'n_usw' => '8'],

                ['n_cm' => '25',
                 'n_eu' => '40',
                 'n_uk' => '6',
                 'n_usm' => '7',
                 'n_usw' => '8.5'],

                ['n_cm' => '25.5',
                 'n_eu' => '40.5',
                 'n_uk' => '6.5',
                 'n_usm' => '7.5',
                 'n_usw' => '9'],

                ['n_cm' => '26',
                 'n_eu' => '41',
                 'n_uk' => '7',
                 'n_usm' => '8',
                 'n_usw' => '9.5'],

                ['n_cm' => '26.5',
                 'n_eu' => '42',
                 'n_uk' => '7.5',
                 'n_usm' => '8.5',
                 'n_usw' => '10'],

                ['n_cm' => '27',
                 'n_eu' => '42.5',
                 'n_uk' => '8',
                 'n_usm' => '9',
                 'n_usw' => '10.5'],

                ['n_cm' => '27.5',
                 'n_eu' => '43',
                 'n_uk' => '8.5',
                 'n_usm' => '9.5',
                 'n_usw' => '11'],

                ['n_cm' => '28',
                 'n_eu' => '44',
                 'n_uk' => '9',
                 'n_usm' => '10',
                 'n_usw' => '11.5'],

                ['n_cm' => '28.5',
                 'n_eu' => '44.5',
                 'n_uk' => '9.5',
                 'n_usm' => '10.5',
                 'n_usw' => '12'],

                ['n_cm' => '29',
                 'n_eu' => '45',
                 'n_uk' => '10',
                 'n_usm' => '11',
                 'n_usw' => '12.5'],

                ['n_cm' => '29.5',
                 'n_eu' => '45.5',
                 'n_uk' => '10.5',
                 'n_usm' => '11.5',
                 'n_usw' => '13'],

                ['n_cm' => '30',
                 'n_eu' => '46',
                 'n_uk' => '11',
                 'n_usm' => '12',
                 'n_usw' => '13.5'],

                ['n_cm' => '30.5',
                 'n_eu' => '47',
                 'n_uk' => '11.5',
                 'n_usm' => '12.5',
                 'n_usw' => '14'],

                ['n_cm' => '31',
                 'n_eu' => '47.5',
                 'n_uk' => '12',
                 'n_usm' => '13',
                 'n_usw' => '14.5'],

                ['n_cm' => '31.5',
                 'n_eu' => '48',
                 'n_uk' => '12.5',
                 'n_usm' => '13.5',
                 'n_usw' => '15'],

                ['n_cm' => '32',
                 'n_eu' => '48.5',
                 'n_uk' => '13',
                 'n_usm' => '14',
                 'n_usw' => '15.5'],

                ['n_cm' => '32.5',
                 'n_eu' => '49',
                 'n_uk' => '13.5',
                 'n_usm' => '14.5',
                 'n_usw' => '16'],

                ['n_cm' => '33',
                 'n_eu' => '49.5',
                 'n_uk' => '14',
                 'n_usm' => '15',
                 'n_usw' => '16.5'],

                ['n_cm' => '33.5',
                 'n_eu' => '50',
                 'n_uk' => '14.5',
                 'n_usm' => '15.5',
                 'n_usw' => '17'],

                ['n_cm' => '34',
                 'n_eu' => '50.5',
                 'n_uk' => '15',
                 'n_usm' => '16',
                 'n_usw' => '17.5']
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
        Schema::dropIfExists('nike');
    }
};
