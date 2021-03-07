<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('field_account_name');
            $table->string('field_account_desc string')->nullable();
            $table->float('field_account_total_amount');
            $table->unsignedBigInteger('account_transaction_id');
            $table->foreign('account_transaction_id')->references('id')->on('account_transaction')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
