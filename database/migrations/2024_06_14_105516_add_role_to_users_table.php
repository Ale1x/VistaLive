<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user'); // Aggiungi il campo 'role' di tipo stringa con valore predefinito 'user'
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role'); // Rimuovi il campo 'role' se esiste
        });
    }
};
