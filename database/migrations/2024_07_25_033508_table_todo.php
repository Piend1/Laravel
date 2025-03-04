<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create("aktifitas.todo", function(blueprint $table) {
            $table->id();
            $table->string("todo");
            $table->text("keterangan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropifExists("aktifitas.todo");
    }
};
