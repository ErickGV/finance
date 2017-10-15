<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Bank;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\CreditCard;
use App\Http\Requests\CreditCardRequest;
use Illuminate\Support\Facades\Auth;

class CreditCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $credit_cards = CreditCard::paginate(5);

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
        $banks          = Bank::get();    
        $currencies     = Currency::get();  

        $data = [            
            'banks'         =>  $banks,
            'currencies'    =>  $currencies,
        ];

        return view('pages.credit_card.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ListpriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreditCardRequest $request)
    {
		
        try {

            $credit_card                    = new CreditCard;
            $credit_card->number            = $request['card_number'];
            $credit_card->alias             = $request['alias'];
            $credit_card->bank_id           = $request['bank'];
            $credit_card->currency_id       = $request['currency'];
            $credit_card->customer_id       = Auth::user()->customer->id;
            $credit_card->save();
            return redirect()->route('credit_card.index')->with('success', 'La tarjeta de crédito se ha registrado exitosamente');
        } catch (Exception $e) {            
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }    	
    }

    public function edit($id)
    {
        $credit_card    = CreditCard::find($id);        
        $banks          = Bank::get();        
        $currencies     = Currency::get();   

        $data = [
            'credit_card'   =>  $credit_card,            
            'banks'         =>  $banks,
            'currencies'    =>  $currencies,
        ];

        return view('pages.credit_card.edit', $data);
    }

    public function update(CreditCardRequest $request, $id)
    {
        try {
            $credit_card                    = CreditCard::find($id);                        
            $credit_card->number            = $request['card_number'];
            $credit_card->alias             = $request['alias'];
            $credit_card->bank_id           = $request['bank'];
            $credit_card->currency_id       = $request['currency'];
            $credit_card->save();

            return redirect()->route('credit_card.index')->with('success', 'La tarjeta de crédito se ha actualizado exitosamente');
        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }
    }

    public function destroy($id)
    {
        try {
            $credit_card   = CreditCard::find($id);
            $message = "";
            
            $credit_card->delete();

            return redirect()->route('credit_card.index')->with('success', 'La tarjeta de crédito se ha eliminado exitosamente');
        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }
    }

}
