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
        Schema::create('amounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->decimal('amount', $precision = 8, $scale = 2)->nullable();

            $table->unsignedBigInteger('acount_id')->nullable();
            $table->foreign('acount_id')->references('id')->on('acounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amounts');
    }
};
