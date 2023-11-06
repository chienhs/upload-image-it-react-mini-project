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
        Schema::create('dich_vu_xes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->enum('category', ['contract', 'service', 'both'])->comment("contract-Hợp đồng, service-Dịch vụ, both-Cả hợp đồng và cả dịch vụ")->nullable();
            $table->integer('priority')->nullable()->index();
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
        Schema::dropIfExists('dich_vu_xes');
    }
};
