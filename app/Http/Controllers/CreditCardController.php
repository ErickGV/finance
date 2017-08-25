<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreditCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $credit_cards = null;

        $data = [
            'credit_cards'    =>  $credit_cards,
        ];

        return view('pages.credit_card.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
         
        return view('pages.credit_card.create');
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
        	$credit_cards = null;
            return redirect()->route('credit_card.index')->with('success', 'La tarjeta de crédito se ha registrado exitosamente');
        } catch (Exception $e) {            
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }    	
    }
}
