<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');        // Name of the menu item
            $table->string('category');    // Category (e.g., Breakfast, Lunch, Drinks)
            $table->string('image');       // Image path
            $table->decimal('price', 8, 2); // Price of the item
            $table->integer('rating');     // Rating (e.g., 4 out of 5)
            $table->timestamps();          // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}