<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bank;
use App\Models\Account;
use App\Models\AccountType;
use App\Models\Currency;
use App\Models\Customer;
use App\User;
use App\Http\Requests;
use App\Http\Requests\AccountRequest;

class BankAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $accounts = Account::orderBy('bank_id', 'asc')->paginate(5);

        $data = [
            'accounts'    =>  $accounts,
        ];
        
        return view('pages.bank_account.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $banks          = Bank::get();        
        $accountTypes   = AccountType::get();  
        $currencies     = Currency::get();  

        $data = [            
            'banks'         =>  $banks,
            'accountTypes'  =>  $accountTypes,
            'currencies'    =>  $currencies,
        ];
        return view('pages.bank_account.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        
        try {
            
            $account                    = new Account;
            $account->number            = $request['account_number'];
            $account->alias             = $request['alias'];
            $account->bank_id           = $request['bank'];
            $account->accountType_id    = $request['accountType'];
            $account->currency_id       = $request['currency'];
            $account->customer_id       = Auth::user()->customer->id;
            $account->save();
            return redirect()->route('bank_account.index')->with('success', 'La cuenta bancaria se ha registrado exitosamente');
        } catch (Exception $e) {            
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }       
    }

    public function edit($id)
    {
        $account        = Account::find($id);        
        $banks          = Bank::get();        
        $accountTypes   = AccountType::get();  
        $currencies     = Currency::get();   

        $data = [
            'account'       =>  $account,            
            'banks'         =>  $banks,
            'accountTypes'  =>  $accountTypes,
            'currencies'    =>  $currencies,
        ];

        return view('pages.bank_account.edit', $data);
    }

   
    public function update(AccountRequest $request, $id)
    {
        try {
            $account = Account::find($id);                        
            $account->number            = $request['account_number'];
            $account->alias             = $request['alias'];
            $account->bank_id           = $request['bank'];
            $account->accountType_id    = $request['accountType'];
            $account->currency_id       = $request['currency']; 
            $account->save();

            return redirect()->route('bank_account.index')->with('success', 'La cuenta bancaria se ha actualizado exitosamente');
        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $account   = Account::find($id);
            $message = "";
            
            $account->delete();

            return redirect()->route('bank_account.index')->with('success', 'La cuenta bancaria se ha eliminado exitosamente');
        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }
    }
}
