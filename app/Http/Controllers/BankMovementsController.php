<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Bank;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\CreditCard;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BankMovementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$operations =   Operation::where('customer_id', Auth::user()->customer->id)
                        ->orderBy('date', 'desc')
                        ->take(20)
                        ->paginate(5);         

        $data = [
            'operations'    =>  $operations,
        ];

        return view('pages.bank_movements.index', $data);
    }
}
