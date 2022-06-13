<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactsses', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('email');
            $table -> string('subject');
            $table -> string('message');
            $table -> integer('status')->default(1);
            $table -> string('contact_time');
            $table -> string('contact_date');
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
        Schema::dropIfExists('contactsses');
    }
}
