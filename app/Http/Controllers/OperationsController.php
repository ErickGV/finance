<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\Bank;
use App\Models\Account;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\CreditCard;
use App\Models\Operation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OperationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	if ( Session::get( 'calculator' ) == null) 
    		$calculator = 1;
    	else
    		$calculator = Session::get( 'calculator' );

    	if ( Session::get( 'calculator' ) == null ) 
    		$sendAmount = 100;
    	else
    		$sendAmount = Session::get( 'sendAmount' );

    	if ( Session::get( 'calculator' ) == null ) 
    		$receivedAmount = 0;
    	else
    		$receivedAmount = Session::get( 'receivedAmount' );
        

    	$data = [
            'calculator'    => $calculator,
            'sendAmount'    =>  $sendAmount,
            'receivedAmount'    =>  $receivedAmount,
        //    'banks'         => $banks,
        ];

        return view('pages.operations.index', $data);
    }

    public function findCustomerBanks(Request $request)
    {
        $id             = $request['option'];

        if( $id == null )  
            $html       = '<option value>Seleccione Moneda</option>';
        else{
            $banks = DB::table('banks')
                    ->join('accounts', 'banks.id', '=', 'accounts.bank_id')
                    ->where('accounts.customer_id', Auth::user()->customer->id)
                    ->where('accounts.currency_id', $id)
                    ->groupBy('banks.id')
                    ->get();

            //$html       = '<option value>Seleccione Producto</option>';
            $html    = '';
            $options = '';

            foreach ($banks as $bank) {
                $options = $options . '<option value=' . $bank->bank_id;
                $options = $options . '>' . $bank->name . '</option>';
            }
            $html       = $html . $options;
        }

        
        return response()->json(['html' => $html]);        
        
    }

    public function findCustomerAccounts(Request $request)
    {
        $id             = $request['option'];
        $currency_id    = $request['currency'];

        if( $id == null )  
            $html       = '<option value>Seleccione Banco</option>';
        else{
            $accounts = Account::where('bank_id', $id)
                            ->where('currency_id', $currency_id)
                            ->get();

            //$html       = '<option value>Seleccione Producto</option>';
            $html    = '';
            $options = '';

            foreach ($accounts as $account) {
                $options = $options . '<option value=' . $account->id;
                $options = $options . '>' . $account->number . ' - ' .$account->alias . '</option>';
            }
            $html       = $html . $options;
        }

        
        return response()->json(['html' => $html]);        
        
    }


}
