<?php

namespace App\Http\Controllers;

use App\models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct(Sale $sales)
    {
         $this->sales = $sales;
    }

    public function sale ()
    {
        $sales = $this->sales->get();
        return response()->json($sales);
    }

    public function store(Request $request)
    {
        $sales = new Sale();

        $sales->customer_name = $request->customer_name;
        $sales->customer_cpf = $request->customer_cpf;
        $sales->customer_email = $request->customer_email;
        $sales->plan_offered = $request->plan_offered;
        $sales->order_value = $request->order_value;

        $sales->save();

        return view('/success', ['sale' => $sales]);
    }


}
