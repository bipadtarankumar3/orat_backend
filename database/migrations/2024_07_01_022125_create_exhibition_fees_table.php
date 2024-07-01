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
        Schema::create('exhibition_fees', function (Blueprint $table) {
            $table->id();
            $table->string('model_name')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('payment_mode')->nullable();
            $table->float('payment_amount')->nullable();
            $table->string('exhibition_type')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibition_fees');
    }
};
