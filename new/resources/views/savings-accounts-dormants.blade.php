@extends('layouts.app',['webView'=>true])


@section('content')
<div class="row mt-1"><div class="col-12"><div class="my-3 p-1 px-3 bg-white rounded shadow-md "><table class="table table-mobile card-row" id="data-table"><thead><tr id="thead-data"><th class="col-md">Account Number</th><th class="col-md">Customer</th><th class="col-md">Account Product</th><th class="col-md">Account Type</th><th class="col-md">Available Balance</th><th class="col-md">Current Balance</th><th class="col-xs no-sort">Actions</th></tr></thead><tbody id="tbody-data"><tr><td colspan="7"><div class="text-center no-records">No records found</div></td></tr></tbody></table>0</div></div></div>
@endsection