<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ILLuminate\Support\Facades\Auth;
use App\models\users;

class HomeController extends Controller
{

  public function index()
  {
    return view('v2.index');
  }
  
  public function userdash()
  {
    $role = Auth::user()->role;
    if ($role == 'admin') {
      return view('v2.index');
      //return view('admin.admin');
    } else {
      //attempt for login as portOperator and user
      if($role == 'portoperator'){
        return view('pO.Operator');
      }else{
        return view('Testdashboard');
      }
      
    }
  }


  public function about()
  {
    return view('v2.about');
  }

  public function AdmPay()
  {
    return view('v2.AdmPay');
  }

  public function AdnDate()
  {
    return view('v2.AdnDate');
  }

  public function availF()
  {
    return view('v2.availF');
  }

  public function homeFerry()
  {
    return view('v2.homeFerry');
  }


  //users

  public function useBooking()
  {
    return view('useBooking');
  }

  public function viewBooking()
  {
    return view('viewBooking');
  }

  public function payment()
  {
    return view('payment');
  }
  public function date()
  {
    return view('date');
  }

  public function Operator()
  {
    return view('pO.Operator');
  }
}
