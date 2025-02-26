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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('register_token')->nullable();
            $table->text('image')->nullable();
            $table->boolean('approved')->default(0)->comment('0 = Belum Approve, 1 = Sudah Approve, 2 = Ditolak');
            $table->timestamp('approved_at')->nullable();
            $table->string('approved_by')->nullable();
            $table->boolean('status_aktif')->default(1)->comment('1 = Aktif, 0 = Tidak Aktif');
            $table->rememberToken();
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
        Schema::dropIfExists('admins');
    }
};
