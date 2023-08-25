@extends('layouts.app',['webView'=>true])


@section('content')

<div class="row mt-1"><div class="col-12"><div class="my-3 p-1 px-3 bg-white rounded shadow-md "><table class="table table-mobile card-row loading" id="data-table"><thead><tr id="thead-data"><button type="button" class="sort-button"><strong>Investment Title</strong><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort sort-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg></button><th class="col-md">Interest</th><th class="col-md">Min Amount</th><button type="button" class="sort-button"><strong>Age</strong><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort sort-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg></button><th class="col-md">Status</th><th class="col-xs no-sort">Actions</th></tr></thead><tbody id="tbody-data"><tr><td colspan="7"><div class="text-center no-records">Loading...</div></td></tr></tbody></table>0</div></div></div>
@endsection