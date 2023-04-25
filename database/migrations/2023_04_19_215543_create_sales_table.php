<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('customer_cpf', 11);
            $table->string('customer_email');
            $table->string('plan_offered');
            $table->decimal('order_value');
            $table->timestamps();

            // Todo incluir campos restantes
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
}
