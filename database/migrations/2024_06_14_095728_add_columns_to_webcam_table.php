<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('webcams', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('stream_url')->nullable();
            $table->string('image_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('webcams', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('stream_url');
            $table->dropColumn('image_url');
        });
    }
};
