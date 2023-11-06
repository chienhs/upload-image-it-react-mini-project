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
        Schema::create('dong_xes', function (Blueprint $table) {
            $table->id();
            $table->string('code',30)->unique()->index();
            $table->string('short_name',10)->index();
            $table->string('name',255)->index();
            $table->string('description')->nullable();
            
            $table->foreignId('type_of_transport_id')->constrained('nhom_xes')->index('type_of_transport_id');
            $table->integer('weight')->index();
            $table->integer('id_weight_unit')->default(0)->comment('0: Tấn');
            $table->integer('volume')->index();
            $table->integer('volume_unit_id')->default(0)->comment('0: M3');
        
            $table->foreignId('vehicle_manufacturers_id')->constrained('hang_xes')->index('vehicle_manufacturers_id');
            $table->boolean('has_image')->default(false)->comment('1: true, 0: false');
            $table->binary('image');
            $table->binary('image_medium');
            $table->binary('image_small');

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
        Schema::dropIfExists('dong_xes');
    }
};
