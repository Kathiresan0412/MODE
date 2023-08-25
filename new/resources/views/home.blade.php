@extends('layouts.app',['webView'=>true])


        @section('content')

        <div class="d-none d-md-block">
            <div class="col-md-3">
                <div class="filter-cont"><select class="form-control">
                        <option value="today">Today</option>
                        <option value="yesterday">Yesterday</option>
                        <option value="this_month">This Month</option>
                        <option value="last_month">Last Month </option>
                    </select></div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-tile"><a target="_blank" href="">
                                <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                    <div class="icon-dash icon-info px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment-dollar" class="svg-inline--fa fa-comment-dollar svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 31.1c-141.4 0-255.1 93.09-255.1 208c0 49.59 21.37 94.1 56.97 130.7c-12.5 50.39-54.31 95.3-54.81 95.8C0 468.8-.5938 472.2 .6875 475.2C1.1 478.2 4.813 479.1 8 479.1c66.31 0 116-31.8 140.6-51.41c32.72 12.31 69.02 19.41 107.4 19.41c141.4 0 255.1-93.09 255.1-207.1S397.4 31.1 256 31.1zM317.8 282.3c-3.623 20.91-19.47 34.64-41.83 39.43V332c0 11.03-8.946 20-19.99 20S236 343 236 332v-10.77c-8.682-1.922-17.3-4.723-25.06-7.512l-4.266-1.5C196.3 308.5 190.8 297.1 194.5 286.7c3.688-10.41 15.11-15.81 25.52-12.22l4.469 1.625c7.844 2.812 16.72 6 23.66 7.031c13.72 2.125 28.94 .1875 30.31-7.625c.875-5.094 1.359-7.906-27.92-16.28L244.7 257.5c-17.33-5.094-57.92-17-50.52-59.84C197.8 176.8 213.6 162.8 236 157.1V148c0-11.03 8.961-20 20.01-20s19.99 8.969 19.99 20v10.63c5.453 1.195 11.34 2.789 18.56 5.273c10.44 3.625 15.95 15.03 12.33 25.47c-3.625 10.41-15.06 15.94-25.45 12.34c-5.859-2.031-12-4-17.59-4.844C250.2 194.8 234.1 196.7 233.6 204.5C232.8 208.1 232.3 212.2 255.1 219.2l5.547 1.594C283.8 227.1 325.3 239 317.8 282.3z"></path>
                                        </svg></div>
                                    <div class="text-dash ms-3">
                                        <h1 class="m-0 my-1"> LKR&nbsp;0.00 </h1>
                                        <p class="m-0">Loans Requested - 0</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-tile"><a href="">
                                <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                    <div class="icon-dash icon-primary px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-holding-dollar" class="svg-inline--fa fa-hand-holding-dollar svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor" d="M568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1C7.251 383.1 0 391.3 0 400v95.98C0 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3zM279.3 175C271.7 173.9 261.7 170.3 252.9 167.1L248 165.4C235.5 160.1 221.8 167.5 217.4 179.1s2.121 26.2 14.59 30.64l4.655 1.656c8.486 3.061 17.88 6.095 27.39 8.312V232c0 13.25 10.73 24 23.98 24s24-10.75 24-24V221.6c25.27-5.723 42.88-21.85 46.1-45.72c8.688-50.05-38.89-63.66-64.42-70.95L288.4 103.1C262.1 95.64 263.6 92.42 264.3 88.31c1.156-6.766 15.3-10.06 32.21-7.391c4.938 .7813 11.37 2.547 19.65 5.422c12.53 4.281 26.21-2.312 30.52-14.84s-2.309-26.19-14.84-30.53c-7.602-2.627-13.92-4.358-19.82-5.721V24c0-13.25-10.75-24-24-24s-23.98 10.75-23.98 24v10.52C238.8 40.23 221.1 56.25 216.1 80.13C208.4 129.6 256.7 143.8 274.9 149.2l6.498 1.875c31.66 9.062 31.15 11.89 30.34 16.64C310.6 174.5 296.5 177.8 279.3 175z"></path>
                                        </svg></div>
                                    <div class="text-dash ms-3">
                                        <h1 class="m-0 my-1"> LKR&nbsp;0.00 </h1>
                                        <p class="m-0">Loans Released - 0</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-tile"><a target="_blank" href="">
                                <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                    <div class="icon-dash icon-success px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-dollar-to-slot" class="svg-inline--fa fa-circle-dollar-to-slot svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M326.7 403.7C304.7 411.6 280.8 416 256 416C231.2 416 207.3 411.6 185.3 403.7C184.1 403.6 184.7 403.5 184.5 403.4C154.4 392.4 127.6 374.6 105.9 352C70.04 314.6 48 263.9 48 208C48 93.12 141.1 0 256 0C370.9 0 464 93.12 464 208C464 263.9 441.1 314.6 406.1 352C405.1 353 404.1 354.1 403.1 355.1C381.7 376.4 355.7 393.2 326.7 403.7L326.7 403.7zM235.9 111.1V118C230.3 119.2 224.1 120.9 220 123.1C205.1 129.9 192.1 142.5 188.9 160.8C187.1 171 188.1 180.9 192.3 189.8C196.5 198.6 203 204.8 209.6 209.3C221.2 217.2 236.5 221.8 248.2 225.3L250.4 225.9C264.4 230.2 273.8 233.3 279.7 237.6C282.2 239.4 283.1 240.8 283.4 241.7C283.8 242.5 284.4 244.3 283.7 248.3C283.1 251.8 281.2 254.8 275.7 257.1C269.6 259.7 259.7 261 246.9 259C240.9 258 230.2 254.4 220.7 251.2C218.5 250.4 216.3 249.7 214.3 249C203.8 245.5 192.5 251.2 189 261.7C185.5 272.2 191.2 283.5 201.7 286.1C202.9 287.4 204.4 287.9 206.1 288.5C213.1 291.2 226.4 295.4 235.9 297.6V304C235.9 315.1 244.9 324.1 255.1 324.1C267.1 324.1 276.1 315.1 276.1 304V298.5C281.4 297.5 286.6 295.1 291.4 293.9C307.2 287.2 319.8 274.2 323.1 255.2C324.9 244.8 324.1 234.8 320.1 225.7C316.2 216.7 309.9 210.1 303.2 205.3C291.1 196.4 274.9 191.6 262.8 187.9L261.1 187.7C247.8 183.4 238.2 180.4 232.1 176.2C229.5 174.4 228.7 173.2 228.5 172.7C228.3 172.3 227.7 171.1 228.3 167.7C228.7 165.7 230.2 162.4 236.5 159.6C242.1 156.7 252.9 155.1 265.1 156.1C269.5 157.7 283 160.3 286.9 161.3C297.5 164.2 308.5 157.8 311.3 147.1C314.2 136.5 307.8 125.5 297.1 122.7C292.7 121.5 282.7 119.5 276.1 118.3V112C276.1 100.9 267.1 91.9 256 91.9C244.9 91.9 235.9 100.9 235.9 112V111.1zM48 352H63.98C83.43 377.9 108 399.7 136.2 416H64V448H448V416H375.8C403.1 399.7 428.6 377.9 448 352H464C490.5 352 512 373.5 512 400V464C512 490.5 490.5 512 464 512H48C21.49 512 0 490.5 0 464V400C0 373.5 21.49 352 48 352H48z"></path>
                                        </svg></div>
                                    <div class="text-dash ms-3">
                                        <h1 class="m-0 my-1"> LKR&nbsp;0.00</h1>
                                        <p class="m-0">Amount Repaid - 0</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-tile"><a>
                                <div class="my-2 p-3 bg-body rounded shadow-md d-flex">
                                    <div class="icon-dash icon-danger px-2"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass-dollar" class="svg-inline--fa fa-magnifying-glass-dollar svg-icon p-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7c-12.23-91.55-87.28-166-178.9-177.6c-136.2-17.24-250.7 97.28-233.4 233.4c11.6 91.64 86.07 166.7 177.6 178.9c53.81 7.191 104.3-6.235 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 .0004C515.9 484.7 515.9 459.3 500.3 443.7zM273.7 253.8C269.8 276.4 252.6 291.3 228 296.1V304c0 11.03-8.953 20-20 20S188 315 188 304V295.2C178.2 293.2 168.4 289.9 159.6 286.8L154.8 285.1C144.4 281.4 138.9 269.9 142.6 259.5C146.2 249.1 157.6 243.7 168.1 247.3l5.062 1.812c8.562 3.094 18.25 6.562 25.91 7.719c16.23 2.5 33.47-.0313 35.17-9.812c1.219-7.094 .4062-10.62-31.8-19.84L196.2 225.4C177.8 219.1 134.5 207.3 142.3 162.2C146.2 139.6 163.5 124.8 188 120V112c0-11.03 8.953-20 20-20S228 100.1 228 112v8.695c6.252 1.273 13.06 3.07 21.47 5.992c10.42 3.625 15.95 15.03 12.33 25.47C258.2 162.6 246.8 168.1 236.3 164.5C228.2 161.7 221.8 159.9 216.8 159.2c-16.11-2.594-33.38 .0313-35.08 9.812c-1 5.812-1.719 10 25.7 18.03l6 1.719C238.9 196 281.5 208.2 273.7 253.8z"></path>
                                        </svg></div>
                                    <div class="text-dash ms-3">
                                        <h1 class="m-0 my-1">LKR&nbsp;0.00</h1>
                                        <p class="m-0">Missed Repayments - 0</p>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3 p-1 px-3 bg-white rounded shadow-md"><strong class="d-block text-center mt-3">Product-wise Loans </strong>
                        <div><canvas role="img" height="560" width="560" style="display: block; box-sizing: border-box; height: 560px; width: 560px;"></canvas></div>,
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 p-1 px-3 bg-white rounded shadow-md"><strong class="d-block text-center mt-3">Daily Collections</strong>
                        <div><canvas role="img" height="280" width="560" style="display: block; box-sizing: border-box; height: 280px; width: 560px;"></canvas></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 p-1 px-3 bg-white rounded shadow-md"><strong class="d-block text-center mt-3">Customer Service Unit Collections</strong>
                        <div><canvas role="img" height="280" width="560" style="display: block; box-sizing: border-box; height: 280px; width: 560px;"></canvas></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 p-1 px-3 bg-white rounded shadow-md"><strong class="d-block text-center mt-3">Deposites</strong>
                        <div><canvas role="img" height="280" width="560" style="display: block; box-sizing: border-box; height: 280px; width: 560px;"></canvas></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 p-1 px-3 bg-white rounded shadow-md"><strong class="d-block text-center mt-3">CSU Attendance and Collections</strong>
                        <div><canvas role="img" height="280" width="560" style="display: block; box-sizing: border-box; height: 280px; width: 560px;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
       