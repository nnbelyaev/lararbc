<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRubricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['normal', 'inactive', 'deleted'])->default('normal');
            $table->enum('category', ['news', 'styler', 'afisha', 'lite', 'all'])->default('news');
            $table->string('translit', 196)->unique();
            $table->string('name_rus', 255)->default('');
            $table->string('name_ukr', 255)->default('');
            $table->string('h1_rus', 255)->default('');
            $table->string('h1_ukr', 255)->default('');
            $table->string('seo_title_rus', 255)->default('');
            $table->string('seo_title_ukr', 255)->default('');
            $table->string('seo_key_rus', 255)->default('');
            $table->string('seo_key_ukr', 255)->default('');
            $table->string('seo_descr_rus', 255)->default('');
            $table->string('seo_descr_ukr', 255)->default('');
            $table->string('google_news', 255)->default('');
            $table->enum('banner_zone', ['other', 'business'])->default('other');
            $table->boolean('subdomain')->default(false);
            $table->unsignedInteger('order')->default(100);
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
        Schema::dropIfExists('rubrics');
    }
}
