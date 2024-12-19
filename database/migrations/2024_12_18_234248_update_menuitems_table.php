<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->date('birthday');
            $table->timestamps();  // This will automatically add created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}