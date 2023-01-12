<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("user_id");
            $table->foreignId("dosen_id");
            $table->string("judul", 100);
            $table->string("slug", 150, '-');
            $table->string("objek", 50);
            $table->string("nomor_sk", 50);
            $table->date("dimulai_pada");
            $table->date("selesai_pada");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projeks');
    }
};
