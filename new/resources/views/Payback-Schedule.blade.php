@extends('layouts.app',['webView'=>true])


@section('content')
<div class="row mt-1">
        <div class="col-12">
                <div class="my-3 p-1 px-3 bg-white rounded shadow-md ">
                        <table class="table table-mobile card-row" id="data-table">
                                <thead>
                                        <tr id="thead-data">
                                                <th class="col-md">#</th>
                                                <th class="col-md">CSO</th>
                                                <th class="col-md">Customer Name</th>
                                                <th class="col-sm">Due Date</th>
                                                <th class="col-md">Due Amount</th>
                                                <th class="col-md">Paid Amount</th>
                                                <th class="col-md">Status</th>
                                                <th class="col-md">View</th>
                                        </tr>
                                </thead>
                                <tbody id="tbody-data"></tbody>
                        </table>0
                </div>
        </div>
</div>
@endsection