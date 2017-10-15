<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Account;
use App\Models\AccountType;
use App\Models\Currency;
use App\Models\Customer;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CustomerRequest;

use App\Http\Requests;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $customer = Customer::find( Auth::user()->customer->id ) ;

        $data = [
            'customer'    =>  $customer,
        ];

        return view('pages.customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(CustomerRequest $request, $id)
    {
        try {
            $customer = Customer::find($id);                        
            $customer->mobilephone   = $request['mobilephone'];
            $customer->telephone     = $request['telephone'];
            $customer->save();
            
            return redirect()->route('customer.index')->with('success', 'Sus datos personales se han actualizado exitosamente');
        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'Ocurrió un error al hacer esta acción');
        }
    }
}
