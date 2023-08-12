<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Basicamente migrations não sei bem oque é masssss para fazer elas no laravel deve utilizar o comando php artisan migrate
     * E para desfazer deve utilizar o php artisan rollback
     * E para ver o status de uma migration deve usar o comando php artisan migrate:status
     * E para criar uma migration sendo uma tabela deve usar o comando php artisan make:migration create_*nome da tabela*_table
     * O seguinte comando do laravel * Schema::rename('produtos','produtos_trocados'); * renomeia uma  tabela
     * O seguinte comando do laravel * Schema::dropIfExists('produtos_trocados'); * derruba uma  tabela
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
