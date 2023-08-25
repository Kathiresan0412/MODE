@extends('layouts.app',['webView'=>true])


@section('content')
<div class="row mt-1"><div class="row mt-1"><div class="col-12"><div class="my-3 p-1 px-3 bg-white rounded shadow-md "><table class="table table-mobile card-row" id="data-table"><thead><tr id="thead-data"><th>Code</th><th>Amount</th><th>Product Type</th><th>Type</th><th>Last Paid Date</th><th>Paid Capital Amount</th><th>Paid Interest Amount</th><th>Customer Name</th><th>CSU Name</th><th>CSU Contact Number</th><th>Action</th></tr></thead><tbody id="tbody-data"><tr><td colspan="11"><div class="text-center no-records">No Records found</div></td></tr></tbody></table>0</div></div></div></div>
@endsection