@extends('layouts.app',['webView'=>true])


@section('content')
<div class="row mt-1"><div class="col-12"><div class="my-3 p-1 px-3 bg-white rounded shadow-md "><table class="table table-mobile card-row" id="data-table"><thead><tr id="thead-data"><th class="col-md">Name</th><th class="col-md">Purity</th><th class="col-md">Description</th><th class="col-md">Action</th></tr></thead><tbody id="tbody-data"><tr><td colspan="5"><div class="text-center no-records"><div class="d-flex align-items-center justify-content-center"><div class="lds-ripple"><div></div><div></div></div></div></div></td></tr></tbody></table>0</div></div></div>

@endsection