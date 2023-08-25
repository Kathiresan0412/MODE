<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    // Route::resource('departments', App\Http\Controllers\DepartmentController::class);
    // Route::resource('parties', App\Http\Controllers\PartyController::class);
    Route::get('/', [App\Http\Controllers\BankDetailController::class, 'index']);
    Route::get('/customers', [App\Http\Controllers\BankDetailController::class, 'customer']);
    Route::get('/loan-accounts', [App\Http\Controllers\BankDetailController::class, 'loanDetails']);
    Route::get('/loan-Calculator', [App\Http\Controllers\BankDetailController::class, 'LoanCalculation']);
    Route::get('/Loan-account-create', [App\Http\Controllers\BankDetailController::class, 'loanAccountCreations']);
    Route::get('/payback-schedule', [App\Http\Controllers\BankDetailController::class, 'paybackSchedule']);
    Route::get('/payback-schedule/reschedule-repayment', [App\Http\Controllers\BankDetailController::class, 'rescheduleRepayment']);
    Route::get('/csu/collection/', [App\Http\Controllers\BankDetailController::class, 'csuCollection']);
    Route::get('/loans/npl/', [App\Http\Controllers\BankDetailController::class, 'nplDetails']);
    Route::get('/csu/unit', [App\Http\Controllers\BankDetailController::class, 'cusUnit']);
    Route::get('/loans/groups', [App\Http\Controllers\BankDetailController::class, 'loanGroup']);
    Route::get('/csu/transfer', [App\Http\Controllers\BankDetailController::class, 'cusTransfer']);
    Route::get('/csu/schedule', [App\Http\Controllers\BankDetailController::class, 'cusSchedule']);
    Route::get('/investments/accounts', [App\Http\Controllers\BankDetailController::class, 'investmentsAccounts']);
    Route::get('/interest-Transfer-Schedule', [App\Http\Controllers\BankDetailController::class, 'InterestTransferSchedule']);
    Route::get('/savings/accounts', [App\Http\Controllers\BankDetailController::class, 'savingAccount']);
    Route::get('/ savings/accounts/suspended', [App\Http\Controllers\BankDetailController::class, ' accountsSuspended']);
    Route::get('/savings/accounts/dormants', [App\Http\Controllers\BankDetailController::class, 'savingsAccountsDormants']);
    Route::get('/transaction', [App\Http\Controllers\BankDetailController::class, 'transaction']);
    Route::get('/loans/products/', [App\Http\Controllers\BankDetailController::class, 'loansProducts']);
    Route::get('/investments/products', [App\Http\Controllers\BankDetailController::class, 'investmentsProducts']);
    Route::get('/savings/products', [App\Http\Controllers\BankDetailController::class, 'savingsProducts']);
    Route::get('/loans/mortgage/mortgage-asset-type', [App\Http\Controllers\BankDetailController::class, 'loansMortgageMortgageAssetType']);
    Route::get('/master/pawning/material-type', [App\Http\Controllers\BankDetailController::class, 'masterPawningMaterialType']);
    Route::get('/master/pawning/pawning-article', [App\Http\Controllers\BankDetailController::class, ' masterPawningPawningArticle']);
    Route::get('/region', [App\Http\Controllers\BankDetailController::class, 'region']);
    Route::get('/master/ds-division', [App\Http\Controllers\BankDetailController::class, 'masterDsDivision']);
    Route::get('/master/gs-division', [App\Http\Controllers\BankDetailController::class, 'masterGsDivision']);
    Route::get('/master/fees-type', [App\Http\Controllers\BankDetailController::class, ' masterFeesType']);
    Route::get('/master/fees-receivables', [App\Http\Controllers\BankDetailController::class, 'masterFeesReceivables']);
    Route::get('/mobile', [App\Http\Controllers\BankDetailController::class, 'mobile']);

