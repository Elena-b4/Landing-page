<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customers\StoreRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Customer::create($data);
        return 'success';
    }
}
