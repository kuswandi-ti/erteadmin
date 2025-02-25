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
        Schema::create('status_rumah', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('nama');
            $table->string('slug');
            $table->boolean('status_aktif')->default(1)->comment('1 = Aktif, 0 = Non Aktif');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('restored_at')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
            $table->string('restored_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_rumah');
        Schema::table('status_rumah', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
