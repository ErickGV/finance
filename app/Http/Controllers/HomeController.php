<?php

namespace App\Http\Controllers;

use App\Models\DocType;
use App\Models\Bank;
use App\Models\Currency;
use App\Models\Gender;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        try {
            $calculator   = $request['calculator'];
            $sendAmount   = $request['sendAmount'];
            $receivedAmount   = $request['receivedAmount'];
            $buyPrice   = $request['buyPrice'];

            return redirect()->route('operations.index')
                ->with('calculator', $calculator)
                ->with('sendAmount', $sendAmount)
                ->with('receivedAmount', $receivedAmount)
                ->with('buyPrice', $buyPrice);

        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }
    }

    public function findDocTypes()
    {
        
        $docTypes = DocType::get();

        $html       = '<option value>Seleccione</option>';

        $options    = '';

        

        foreach ($docTypes as $docType) {
            $options = $options . '<option value=' . $docType->id . '>' . $docType->name . '</option>';        
        }
        $html       = $html . $options;
        
        return response()->json(['html' => $html]);        
        
    }

    public function findBanks()
    {
        
        $banks = Bank::get();

        $html       = '<option value>Seleccione</option>';

        $options    = '';

        foreach ($banks as $bank) {
            $options = $options . '<option value=' . $bank->id . '>' . $bank->name . '</option>';        
        }
        $html       = $html . $options;
        
        return response()->json(['html' => $html]);        
        
    }

    public function findCurrencies()
    {
        
        $currencies = Currency::get();

        $html       = '<option value>Seleccione</option>';

        $options    = '';

        foreach ($currencies as $currency) {
            $options = $options . '<option value=' . $currency->id . '>' . $currency->name . '</option>';        
        }
        $html       = $html . $options;
        
        return response()->json(['html' => $html]);        
        
    }

    public function findGenders()
    {
        
        $currencies = Gender::get();

        $html       = '<option value>Seleccione</option>';

        $options    = '';

        foreach ($currencies as $currency) {
            $options = $options . '<option value=' . $currency->id . '>' . $currency->name . '</option>';        
        }
        $html       = $html . $options;
        
        return response()->json(['html' => $html]);        
        
    }
}
