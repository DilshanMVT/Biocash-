<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id')->index()->unique();
            $table->foreignId('depositor_id')->nullable()->references('id')->on('users');
            $table->foreignId('withdrawer_id')->nullable()->references('id')->on('users');
            $table->text('description')->nullable();
            $table->integer('category')->default(1);
            $table->decimal('balance', 20, 2)->default(0.00);
            $table->decimal('amount', 20, 2)->default(0.00);
            $table->decimal('charges', 20, 2)->default(0.00);
            $table->boolean('complete')->default(false);
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
        Schema::dropIfExists('transactions');
    }
}
