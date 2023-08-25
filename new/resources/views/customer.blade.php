@extends('layouts.app',['webView'=>true])


@section('content')
<!-- <form>
    <div class="row">
        <div class="col-md-4">
            <h1 class="page-heading rounded">Customers<span class="badge rounded-pill bg-warning text-white ms-3">10</span></h1>
        </div>
        <div class="col-md-8">
            <div class="filter-cont">
                <div class="row">
                    <div class="col-md-6 col-6 d-flex search-box"><input type="text" class="form-control" name="searchFilter" placeholder="Search" value=""><button type="submit" class="btn btn-primary"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" class="svg-inline--fa fa-magnifying-glass " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                            </svg></button></div>
                    <div class="col-md-3 col-3"></div>
                    <div class="col-md-3 col-3"><a href="#" class="btn btn-primary btn-primary-inverse float-end"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path>
                            </svg><span class="d-none d-md-inline-block">ADD NEW</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-none" id="filter-panel">
        <div class="col-12">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <div class="undefined"><label for="name" class="form-label">Loan Product</label><input class="form-control validation undefined " name="custom" placeholder="Select Loan Product" data-validation="" readonly="" value=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <div class=""><label for="name" class="form-label">Departments</label><input class="form-control validation undefined " name="custom" placeholder="Select Departments" readonly="" value=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <div class="undefined"><label for="name" class="form-label">CSU</label><input class="form-control validation undefined " name="custom" placeholder="Select CSU" data-validation="" readonly="" value=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3"><label for="status" class="form-label">Status</label><select class="form-select" name="status" aria-label="Default select example">
                                <option value="Any">Any</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select></div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3"><label for="loan_release_date" class="form-label">Loan Release Date</label>
                            <div class="row">
                                <div class="col-6"><input type="date" class="form-control" name="loan_release_from_date" placeholder="From Date" aria-label="Default select example" value=""></div>
                                <div class="col-6"><input type="date" class="form-control" name="loan_release_to_date" placeholder="To Date" aria-label="Default select example" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3"><label for="last_paid_date" class="form-label">Last Paid Date</label>
                            <div class="row">
                                <div class="col-6"><input type="date" class="form-control" name="last_paid_from_date" placeholder="From Date" aria-label="Default select example" value=""></div>
                                <div class="col-6"><input type="date" class="form-control" name="last_paid_to_date" placeholder="To Date" aria-label="Default select example" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3"><label for="next_payment_date" class="form-label">Next Payment Date</label>
                            <div class="row">
                                <div class="col-6"><input type="date" class="form-control" name="next_payment_from_date" placeholder="From Date" aria-label="Default select example" value=""></div>
                                <div class="col-6"><input type="date" class="form-control" name="next_payment_to_date" placeholder="To Date" aria-label="Default select example" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3"><label for="repaid" class="form-label">Age</label>
                            <div class="row">
                                <div class="col-6"><input type="number" min="0" class="form-control" name="repaid_min_amount" placeholder="Max" aria-label="Default select example" value=""></div>
                                <div class="col-6"><input type="number" min="0" class="form-control" name="repaid_max_amount" placeholder="Min" aria-label="Default select example" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3"><label for="repayment_index" class="form-label">Loan Index</label>
                            <div class="row">
                                <div class="col-6"><input type="number" min="0" name="repayment_index_min" class="form-control" placeholder="Max" aria-label="Default select example" value=""></div>
                                <div class="col-6"><input type="number" min="0" name="repayment_index_max" class="form-control" placeholder="Min" aria-label="Default select example" value=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top-1 m-0 pt-4 mt-2">
                        <div class="col-12 col-md-3 offset-md-9 d-flex"><button type="button" class="btn btn-primary-inverse w-100 mx-1">RESET</button><button type="button" class="btn btn-primary w-100 mx-1">SUBMIT</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> -->
<div class="row mt-1">
    <div class="col-12">
        <div class="my-3 p-1 px-3 bg-white rounded shadow-md ">
            <table class="table table-mobile card-row" id="data-table">
                <thead>
                    <tr id="thead-data">
                        <th class="col-md"><button type="button" class="sort-button"><strong>Full Name</strong><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort sort-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                </svg></button></th>
                        <th class="col-md">NIC No.</th>
                        <th class="col-md">Address</th>
                        <th class="col-md">Contact</th>
                        <th class="col-md">Status</th>
                        <th class="col-xs no-sort">Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody-data">
                    <tr>
                        <td><button class="sort-button">Mrs KAJATHTHIRI THAMOTHARAMPILLAI</button></td>
                        <td>975472418V</td>
                        <td>NO. 300 HOUSING SCHEME NUNAVIL WEST</td>
                        <td data-label="Contact" class="col-mobile">0769765843</td>
                        <td data-label="Status"><span class="badge badge-pill bg-success">ACTIVE</span></td>
                        <td>
                            <div class="d-flex"><a title="View" class="btn btn-sm btn-success mx-1 btn-action" href="/customers/22ac987e-c293-4004-a880-599a3fc4f508/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                    </svg></a><a title="Edit" class="btn btn-sm btn-primary mx-1 btn-action" href="/customers/8f8a8945-9512-4e1b-b5a3-7bd3547b2d4e/edit/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path>
                                    </svg></a><button type="button" class="btn btn-sm btn-danger mx-1 btn-action"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                    </svg></button></div>
                        </td>
                    </tr>
                 
                    <tr>
                        <td><button class="sort-button">Mrs KAMALALOSINI KIRUSHNAPILLAI</button></td>
                        <td>756903551V</td>
                        <td>VATHARAVATHTHAI PUTTUR</td>
                        <td data-label="Contact" class="col-mobile">0762227664</td>
                        <td data-label="Status"><span class="badge badge-pill bg-warning">INACTIVE</span></td>
                        <td>
                            <div class="d-flex"><a title="View" class="btn btn-sm btn-success mx-1 btn-action" href="/customers/71e24403-4e46-4804-b544-c0c9f8d2330c/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                    </svg></a><a title="Edit" class="btn btn-sm btn-primary mx-1 btn-action" href="/customers/c76716d0-6f46-47db-a882-6f1a9c0ccbf6/edit/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path>
                                    </svg></a><button type="button" class="btn btn-sm btn-danger mx-1 btn-action"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                    </svg></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="sort-button">Mrs SARMILA SANTHIRAKUMAR</button></td>
                        <td>986082921V</td>
                        <td>VATHARAVATHAI PUTTUR</td>
                        <td data-label="Contact" class="col-mobile">0772592506</td>
                        <td data-label="Status"><span class="badge badge-pill bg-success">ACTIVE</span></td>
                        <td>
                            <div class="d-flex"><a title="View" class="btn btn-sm btn-success mx-1 btn-action" href="/customers/6e9a1e4e-384f-4ca5-9ff4-5adeb74c2446/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                    </svg></a><a title="Edit" class="btn btn-sm btn-primary mx-1 btn-action" href="/customers/1ae14b97-1480-44d3-b7d8-b283be8cafbb/edit/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path>
                                    </svg></a><button type="button" class="btn btn-sm btn-danger mx-1 btn-action"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                    </svg></button></div>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection