<?php

declare(strict_types=1);

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    protected $fillable = [
        'customer_name',
        'customer_cpf',
        'customer_email',
        'plan_offered',
        'order_value',
        'created_at',
        'updated_at'
    ];
}
