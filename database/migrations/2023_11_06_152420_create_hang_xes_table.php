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
        Schema::create('hang_xes', function (Blueprint $table) {
            $table->id();
            $table->string('code',30)->unique()->index();
            $table->string('name',255)->index();
            $table->string('description')->nullable();
            $table->boolean('active')->default(true)->index()->comment('1: true, 0: false');
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
        Schema::dropIfExists('hang_xes');
    }
};
