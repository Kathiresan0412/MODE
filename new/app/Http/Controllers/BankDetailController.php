<?php

namespace App\Http\Controllers;

use App\Models\BankDetail;
use Illuminate\Http\Request;

class BankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function InterestTransferSchedule()
    {
        return(view('Interest-Transfer-Schedule'));
    }

    public function index()
    {
        return(view('home'));
    }
    public function customer()
    {
        return(view('customer'));
    }

    public function loanDetails()
    {
        return(view('Loan-Accounts'));
    }
    public function LoanCalculation()
    {
        return(view('Loan-Calculation'));
    }
    public function loanAccountCreations()
    {
        return(view('Loan-Create'));
    }
    public function paybackSchedule()
    {
        return(view('Payback-Schedule'));
    }
    public function rescheduleRepayment()
    {
        return(view('reschedule-Repayment'));
    }
    public function csuCollection()
    {
        return(view('collection'));
    }
    public function nplDetails()
    {
        return(view('loan-npl'));
    }
    public function investmentsAccounts()
    {
        return(view('investment-Account'));
    }
    
    public function cusUnit()
    {
        return(view('csu-unit'));
    }
    public function loanGroup()
    {
        return(view('loan-group'));
    }
    public function cusTransfer()
    {
        return(view('csu-transfer'));
    }
    public function cusSchedule()
    {
        return(view('csu-schedule'));
    }
    public function savingAccount()
    {
        return(view('saving-account'));
    }
    public function accountsSuspended()
    {
        return(view('account-suspended'));
    }
    public function savingsAccountsDormants()
    {
        return(view('savings-accounts-dormants'));
    }
    public function transaction()
    {
        return(view('transaction'));
    }
  


    public function loansProducts()
    {
        return(view('loans-products'));
    }
    public function investmentsProducts()
    {
        return(view('investments-products'));
    }
    public function savingsProducts()
    {
        return(view('savings-products'));
    }
    public function loansMortgageMortgageAssetType()
    {
        return(view('loans-mortgagem-mortgage-asset-type'));
    }
    
    public function masterPawningPawningArticle()
    {
        return(view('master-pawning-pawning-article'));
    }
    public function region()
    {
        return(view('region'));
    }
    public function masterDsDivision()
    {
        return(view('master-ds-division'));
    }
    public function masterGsDivision()
    {
        return(view('master-gs-division'));
    }
    public function masterFeesType()
    {
        return(view('master-fees-type'));
    }
    public function masterFeesReceivables()
    {
        return(view('master-fees-receivables'));
    }
    public function mobile()
    {
        return(view('mobile'));
    }
    public function masterPawningMaterialType()
    {
        return(view('master-Pawning-Material-Type'));
    }
  
}
