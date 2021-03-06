<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('field_transaction_date');
            $table->string('field_transaction_desc');
            $table->boolean('field_transaction_increased')->nullable();
            $table->float('field_transaction_amount');
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
        Schema::dropIfExists('transaction');
    }
}
