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
        Schema::dropIfExists('user_verifies');
        Schema::create('user_verifies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('token')->nullable()->default(null);
            $table->timestamp('expires_at')->nullable();
            $table->string('email_verify')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_verifies');
    }
};
