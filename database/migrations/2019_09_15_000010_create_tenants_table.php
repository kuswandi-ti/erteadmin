<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();

            // your custom columns may go here
            $table->bigInteger('id_perumahan');
            $table->string('rt');
            $table->string('rw');
            $table->string('cluster');
            $table->enum('status_membership', ['Free', 'Member'])->default('Free');
            $table->date('tgl_daftar')->default(date("Y-m-d H:i:s"));
            $table->date('tgl_akhir_member')->nullable();

            $table->timestamps();
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
