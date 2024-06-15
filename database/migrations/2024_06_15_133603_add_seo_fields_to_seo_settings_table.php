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
        Schema::table('seo_settings', function (Blueprint $table) {
            $table->string('site_title')->nullable();
            $table->string('author')->nullable();
            $table->string('favicon_url')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->default('website');
            $table->string('og_url')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('twitter_site')->nullable();
            $table->string('twitter_creator')->nullable();
            $table->string('google_analytics_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('seo_settings', function (Blueprint $table) {
            $table->dropColumn([
                'site_title', 'author', 'favicon_url',
                'og_title', 'og_description', 'og_image', 'og_type', 'og_url',
                'twitter_title', 'twitter_description', 'twitter_image', 'twitter_site', 'twitter_creator',
                'google_analytics_id',
            ]);
        });
    }
};
