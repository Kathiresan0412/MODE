@extends('layouts.app',['webView'=>true])


@section('content')
<div class="row">
        <div class="col-md-8">
                <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                                <div class="undefined"><label for="name" class="form-label">Loan Product</label><input class="form-control validation undefined " name="loan_product" placeholder="Select Loan Product" data-validation="" readonly="" value=""></div>
                        </div>
                        <div class="col-12 col-md-6">
                                <div class="mb-3"><label for="amount" class="form-label">Loan Amount </label><input class="form-control mx-1 validation undefined" placeholder="Amount" type="number" name="amount" value="0"></div>
                        </div>
                        <div class="col-12 col-md-6 mb-3"><label for="interest_id" class="form-label">Loan Duration</label><select class="form-select" name="interest_id" placeholder="To Date" aria-label="Default select example"></select></div>
                        <div class="col-12 col-md-6 mb-3"><label for="number_of_payments" class="form-label">Number of Payments </label><input class="form-control mx-1 validation undefined" placeholder="Number of Payments" type="number" min="0" value="0"></div>
                </div>
        </div>
        <div class="col-md-4">
                <div class="row">
                        <div class="col-lg-12 col-12 d-tile"><a target="_blank" href="">
                                        <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                                <div class="icon-dash icon-info px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" class="svg-inline--fa fa-dollar-sign svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                                <path fill="currentColor" d="M160 0C177.7 0 192 14.33 192 32V67.68C193.6 67.89 195.1 68.12 196.7 68.35C207.3 69.93 238.9 75.02 251.9 78.31C268.1 82.65 279.4 100.1 275 117.2C270.7 134.3 253.3 144.7 236.1 140.4C226.8 137.1 198.5 133.3 187.3 131.7C155.2 126.9 127.7 129.3 108.8 136.5C90.52 143.5 82.93 153.4 80.92 164.5C78.98 175.2 80.45 181.3 82.21 185.1C84.1 189.1 87.79 193.6 95.14 198.5C111.4 209.2 136.2 216.4 168.4 225.1L171.2 225.9C199.6 233.6 234.4 243.1 260.2 260.2C274.3 269.6 287.6 282.3 295.8 299.9C304.1 317.7 305.9 337.7 302.1 358.1C295.1 397 268.1 422.4 236.4 435.6C222.8 441.2 207.8 444.8 192 446.6V480C192 497.7 177.7 512 160 512C142.3 512 128 497.7 128 480V445.1C127.6 445.1 127.1 444.1 126.7 444.9L126.5 444.9C102.2 441.1 62.07 430.6 35 418.6C18.85 411.4 11.58 392.5 18.76 376.3C25.94 360.2 44.85 352.9 60.1 360.1C81.9 369.4 116.3 378.5 136.2 381.6C168.2 386.4 194.5 383.6 212.3 376.4C229.2 369.5 236.9 359.5 239.1 347.5C241 336.8 239.6 330.7 237.8 326.9C235.9 322.9 232.2 318.4 224.9 313.5C208.6 302.8 183.8 295.6 151.6 286.9L148.8 286.1C120.4 278.4 85.58 268.9 59.76 251.8C45.65 242.4 32.43 229.7 24.22 212.1C15.89 194.3 14.08 174.3 17.95 153C25.03 114.1 53.05 89.29 85.96 76.73C98.98 71.76 113.1 68.49 128 66.73V32C128 14.33 142.3 0 160 0V0z"></path>
                                                        </svg></div>
                                                <div class="text-dash ms-3">
                                                        <h1 class="m-0 my-1">LKR&nbsp;0.00</h1>
                                                        <p class="m-0">Loan Amount</p>
                                                </div>
                                        </div>
                                </a></div>
                        <div class="col-lg-12 col-12 d-tile"><a target="_blank" href="">
                                        <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                                <div class="icon-dash icon-success px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-dollar-to-slot" class="svg-inline--fa fa-circle-dollar-to-slot svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path fill="currentColor" d="M326.7 403.7C304.7 411.6 280.8 416 256 416C231.2 416 207.3 411.6 185.3 403.7C184.1 403.6 184.7 403.5 184.5 403.4C154.4 392.4 127.6 374.6 105.9 352C70.04 314.6 48 263.9 48 208C48 93.12 141.1 0 256 0C370.9 0 464 93.12 464 208C464 263.9 441.1 314.6 406.1 352C405.1 353 404.1 354.1 403.1 355.1C381.7 376.4 355.7 393.2 326.7 403.7L326.7 403.7zM235.9 111.1V118C230.3 119.2 224.1 120.9 220 123.1C205.1 129.9 192.1 142.5 188.9 160.8C187.1 171 188.1 180.9 192.3 189.8C196.5 198.6 203 204.8 209.6 209.3C221.2 217.2 236.5 221.8 248.2 225.3L250.4 225.9C264.4 230.2 273.8 233.3 279.7 237.6C282.2 239.4 283.1 240.8 283.4 241.7C283.8 242.5 284.4 244.3 283.7 248.3C283.1 251.8 281.2 254.8 275.7 257.1C269.6 259.7 259.7 261 246.9 259C240.9 258 230.2 254.4 220.7 251.2C218.5 250.4 216.3 249.7 214.3 249C203.8 245.5 192.5 251.2 189 261.7C185.5 272.2 191.2 283.5 201.7 286.1C202.9 287.4 204.4 287.9 206.1 288.5C213.1 291.2 226.4 295.4 235.9 297.6V304C235.9 315.1 244.9 324.1 255.1 324.1C267.1 324.1 276.1 315.1 276.1 304V298.5C281.4 297.5 286.6 295.1 291.4 293.9C307.2 287.2 319.8 274.2 323.1 255.2C324.9 244.8 324.1 234.8 320.1 225.7C316.2 216.7 309.9 210.1 303.2 205.3C291.1 196.4 274.9 191.6 262.8 187.9L261.1 187.7C247.8 183.4 238.2 180.4 232.1 176.2C229.5 174.4 228.7 173.2 228.5 172.7C228.3 172.3 227.7 171.1 228.3 167.7C228.7 165.7 230.2 162.4 236.5 159.6C242.1 156.7 252.9 155.1 265.1 156.1C269.5 157.7 283 160.3 286.9 161.3C297.5 164.2 308.5 157.8 311.3 147.1C314.2 136.5 307.8 125.5 297.1 122.7C292.7 121.5 282.7 119.5 276.1 118.3V112C276.1 100.9 267.1 91.9 256 91.9C244.9 91.9 235.9 100.9 235.9 112V111.1zM48 352H63.98C83.43 377.9 108 399.7 136.2 416H64V448H448V416H375.8C403.1 399.7 428.6 377.9 448 352H464C490.5 352 512 373.5 512 400V464C512 490.5 490.5 512 464 512H48C21.49 512 0 490.5 0 464V400C0 373.5 21.49 352 48 352H48z"></path>
                                                        </svg></div>
                                                <div class="text-dash ms-3">
                                                        <h1 class="m-0 my-1">LKR&nbsp;0.00</h1>
                                                        <p class="m-0">Total Interest</p>
                                                </div>
                                        </div>
                                </a></div>
                        <div class="col-lg-12 col-12 d-tile"><a target="_blank" href="">
                                        <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                                <div class="icon-dash icon-warning px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="percent" class="svg-inline--fa fa-percent svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M374.6 73.39c-12.5-12.5-32.75-12.5-45.25 0l-320 320c-12.5 12.5-12.5 32.75 0 45.25C15.63 444.9 23.81 448 32 448s16.38-3.125 22.62-9.375l320-320C387.1 106.1 387.1 85.89 374.6 73.39zM64 192c35.3 0 64-28.72 64-64S99.3 64.01 64 64.01S0 92.73 0 128S28.7 192 64 192zM320 320c-35.3 0-64 28.72-64 64s28.7 64 64 64s64-28.72 64-64S355.3 320 320 320z"></path>
                                                        </svg></div>
                                                <div class="text-dash ms-3">
                                                        <h1 class="m-0 my-1">0%</h1>
                                                        <p class="m-0">Interest Rate</p>
                                                </div>
                                        </div>
                                </a></div>
                        <div class="col-lg-12 col-12 d-tile"><a target="_blank" href="">
                                        <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                                <div class="icon-dash icon-danger px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="money-bill" class="svg-inline--fa fa-money-bill svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path fill="currentColor" d="M512 64C547.3 64 576 92.65 576 128V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V128C0 92.65 28.65 64 64 64H512zM128 384C128 348.7 99.35 320 64 320V384H128zM64 192C99.35 192 128 163.3 128 128H64V192zM512 384V320C476.7 320 448 348.7 448 384H512zM512 128H448C448 163.3 476.7 192 512 192V128zM288 352C341 352 384 309 384 256C384 202.1 341 160 288 160C234.1 160 192 202.1 192 256C192 309 234.1 352 288 352z"></path>
                                                        </svg></div>
                                                <div class="text-dash ms-3">
                                                        <h1 class="m-0 my-1">0 | LKR&nbsp;0.00</h1>
                                                        <p class="m-0">NOP | Monthly Payment</p>
                                                </div>
                                        </div>
                                </a></div>
                        <div class="col-lg-12 col-12 d-tile"><a target="_blank" href="">
                                        <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                                <div class="icon-dash icon-info px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calculator" class="svg-inline--fa fa-calculator svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M336 0h-288C22.38 0 0 22.38 0 48v416C0 489.6 22.38 512 48 512h288c25.62 0 48-22.38 48-48v-416C384 22.38 361.6 0 336 0zM64 208C64 199.2 71.2 192 80 192h32C120.8 192 128 199.2 128 208v32C128 248.8 120.8 256 112 256h-32C71.2 256 64 248.8 64 240V208zM64 304C64 295.2 71.2 288 80 288h32C120.8 288 128 295.2 128 304v32C128 344.8 120.8 352 112 352h-32C71.2 352 64 344.8 64 336V304zM224 432c0 8.801-7.199 16-16 16h-128C71.2 448 64 440.8 64 432v-32C64 391.2 71.2 384 80 384h128c8.801 0 16 7.199 16 16V432zM224 336c0 8.801-7.199 16-16 16h-32C167.2 352 160 344.8 160 336v-32C160 295.2 167.2 288 176 288h32C216.8 288 224 295.2 224 304V336zM224 240C224 248.8 216.8 256 208 256h-32C167.2 256 160 248.8 160 240v-32C160 199.2 167.2 192 176 192h32C216.8 192 224 199.2 224 208V240zM320 432c0 8.801-7.199 16-16 16h-32c-8.799 0-16-7.199-16-16v-32c0-8.801 7.201-16 16-16h32c8.801 0 16 7.199 16 16V432zM320 336c0 8.801-7.199 16-16 16h-32c-8.799 0-16-7.199-16-16v-32C256 295.2 263.2 288 272 288h32C312.8 288 320 295.2 320 304V336zM320 240C320 248.8 312.8 256 304 256h-32C263.2 256 256 248.8 256 240v-32C256 199.2 263.2 192 272 192h32C312.8 192 320 199.2 320 208V240zM320 144C320 152.8 312.8 160 304 160h-224C71.2 160 64 152.8 64 144v-64C64 71.2 71.2 64 80 64h224C312.8 64 320 71.2 320 80V144z"></path>
                                                        </svg></div>
                                                <div class="text-dash ms-3">
                                                        <h1 class="m-0 my-1">LKR&nbsp;0.00</h1>
                                                        <p class="m-0">Net Total</p>
                                                </div>
                                        </div>
                                </a></div>
                </div>
        </div>
</div>
@endsection