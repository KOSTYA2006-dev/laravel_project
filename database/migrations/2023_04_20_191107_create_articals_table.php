<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articals', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('fio')->nullable();
            $table->string("artical_name");
            $table->text("artical_description");
            $table->text("topic");
            
            $table->string('previu_img')->default('');;
            $table->string('colledj');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
