<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BankAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $bank_accounts = null;

        $data = [
            'bank_accounts'    =>  $bank_accounts,
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
         
        return view('pages.bank_account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ListpriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
        try {
        	$bank_accounts = null;
            return redirect()->route('bank_account.index')->with('success', 'La cuenta bancaria se ha registrado exitosamente');
        } catch (Exception $e) {            
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }    	
    }
}
