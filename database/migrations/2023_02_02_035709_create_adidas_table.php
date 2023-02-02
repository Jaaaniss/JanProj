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
        Schema::create('adidas', function (Blueprint $table) {
            $table->float("a_cm");
            $table->float("a_eu");
            $table->float("a_uk");
            $table->float("a_usm");
            $table->float("a_usw");
        });

        DB::table('adidas')->insert(
            array(
                ['a_cm' => '21.5', 'a_eu' => '34.5', 'a_uk' => '2.5', 'a_usm' => '3.5', 'a_usw' => '5'],
                ['a_cm' => '22', 'a_eu' => '35', 'a_uk' => '3', 'a_usm' => '4', 'a_usw' => '5'],
                ['a_cm' => '22.5', 'a_eu' => '36', 'a_uk' => '3.5', 'a_usm' => '4.5', 'a_usw' => '6'],
                ['a_cm' => '23', 'a_eu' => '36.5', 'a_uk' => '4', 'a_usm' => '5', 'a_usw' => '6.5'],
                ['a_cm' => '23.5', 'a_eu' => '37', 'a_uk' => '4.5', 'a_usm' => '5.5', 'a_usw' => '7'],
                ['a_cm' => '24', 'a_eu' => '38', 'a_uk' => '5', 'a_usm' => '6', 'a_usw' => '7.5'],
                ['a_cm' => '24.5', 'a_eu' => '38.5', 'a_uk' => '5.5', 'a_usm' => '6.5', 'a_usw' => '8'],
                ['a_cm' => '25', 'a_eu' => '39', 'a_uk' => '6', 'a_usm' => '7', 'a_usw' => '8.5'],
                ['a_cm' => '25.5', 'a_eu' => '40', 'a_uk' => '6.5', 'a_usm' => '7.5', 'a_usw' => '9'],
                ['a_cm' => '26', 'a_eu' => '40.5', 'a_uk' => '7', 'a_usm' => '8', 'a_usw' => '9.5'],
                ['a_cm' => '26.5', 'a_eu' => '41', 'a_uk' => '7.5', 'a_usm' => '8.5', 'a_usw' => '10'],
                ['a_cm' => '27', 'a_eu' => '42', 'a_uk' => '8', 'a_usm' => '9', 'a_usw' => '10.5'],
                ['a_cm' => '27.5', 'a_eu' => '42.5', 'a_uk' => '8.5', 'a_usm' => '9.5', 'a_usw' => '11'],
                ['a_cm' => '28', 'a_eu' => '43', 'a_uk' => '9', 'a_usm' => '10', 'a_usw' => '11.5'],
                ['a_cm' => '28.5', 'a_eu' => '44', 'a_uk' => '9.5', 'a_usm' => '10.5', 'a_usw' => '12'],
                ['a_cm' => '29', 'a_eu' => '44.5', 'a_uk' => '10', 'a_usm' => '11', 'a_usw' => '12.5'],
                ['a_cm' => '29.5', 'a_eu' => '45', 'a_uk' => '10.5', 'a_usm' => '11.5', 'a_usw' => '13'],
                ['a_cm' => '30', 'a_eu' => '46', 'a_uk' => '11', 'a_usm' => '12', 'a_usw' => '13.5'],
                ['a_cm' => '31', 'a_eu' => '47', 'a_uk' => '12', 'a_usm' => '13', 'a_usw' => '14'],
                ['a_cm' => '32', 'a_eu' => '48', 'a_uk' => '13', 'a_usm' => '14', 'a_usw' => '14.5'],
                ['a_cm' => '33', 'a_eu' => '49', 'a_uk' => '14', 'a_usm' => '15', 'a_usw' => '15.5'],
                ['a_cm' => '34', 'a_eu' => '50', 'a_uk' => '15', 'a_usm' => '16', 'a_usw' => '16.5']
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
