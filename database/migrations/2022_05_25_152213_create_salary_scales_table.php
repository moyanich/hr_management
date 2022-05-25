<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_scales', function (Blueprint $table) {
            $table->id();
            $table->string('series');
            $table->string('group');
            $table->decimal('scale1',15, 2);
            $table->decimal('scale2',15, 2);
            $table->decimal('scale3',15, 2);
            $table->decimal('scale4',15, 2);
            $table->decimal('scale5',15, 2);
            $table->decimal('scale6',15, 2);
            $table->decimal('scale7',15, 2);
            $table->decimal('scale8',15, 2);
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
        Schema::dropIfExists('salary_scales');
    }
}
