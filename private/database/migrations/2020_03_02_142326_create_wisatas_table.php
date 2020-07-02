<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namawisata', 30);
			$table->string('alamatwisata',200);
			$table->string('kategori', 20);
			$table->string('wilayah', 20);
			$table->int('fasilitas', 300 );
			$table->int('latitude', 30);
			$table->int('longtitude', 30);
			$table->string('foto', 200);
			$table->string('video', 200);
			$table->int('Status', 1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatas');
    }
}
