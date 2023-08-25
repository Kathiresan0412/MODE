@extends('layouts.app',['webView'=>true])


@section('content')
<div class="row mt-1">
    <div class="col-12">
        <div class="my-3 p-1 px-3 bg-white rounded shadow-md table-cont">
            <table class="table table-mobile card-row" id="data-table">
                <thead>
                    <tr id="thead-data"><button type="button" class="sort-button"><strong>Code</strong><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort-down" class="svg-inline--fa fa-sort-down sort-icon sort-active-desc" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor" d="M311.9 335.1l-132.4 136.8C174.1 477.3 167.1 480 160 480c-7.055 0-14.12-2.702-19.47-8.109l-132.4-136.8C-9.229 317.8 3.055 288 27.66 288h264.7C316.9 288 329.2 317.8 311.9 335.1z"></path>
                            </svg></button>
                        <th class="col-md">CSU Name</th>
                        <th class="col-md">CSU Officer</th>
                        <th class="col-md">Center Leader</th>
                        <th class="col-md">Region</th>
                        <th class="col-md">Address</th>
                        <th class="col-md">DS Division</th>
                        <th class="col-md">GS Division</th>
                        <th class="col-md">Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody-data">
                    <tr>
                        <td class="fw-bold"><a href="/csu/unit/fdf63a16-c2d2-4500-9084-c60767c489ee/">UDU/0001</a></td>
                        <td data-label="CSU Name">skandha lane</td>
                        <td data-label="Csu Officer">Mr SABARATHINAM KOWSIHAN</td>
                        <td>Mrs ALAKSIYA VIJINTHAN</td>
                        <td>UDUVIL</td>
                        <td>AMMAN ROAD, UDUVIL</td>
                        <td data-label="DS Office" class="col-mobile">UDUVIL</td>
                        <td data-label="GS Office" class="col-mobile">KANTHARODAI</td>
                        <td>
                            <div class="d-flex"><a title="View" class="btn btn-sm btn-primary mx-1 btn-action" href="/csu/unit/fdf63a16-c2d2-4500-9084-c60767c489ee/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                    </svg></a><a title="Edit" class="btn btn-sm btn-primary mx-1 btn-action" href="/csu/unit/fdf63a16-c2d2-4500-9084-c60767c489ee/edit/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path>
                                    </svg></a><a title="group" class="btn btn-sm btn-secondary mx-1 btn-action" href="/csu/unit/fdf63a16-c2d2-4500-9084-c60767c489ee/sheet/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" class="svg-inline--fa fa-user-group " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z"></path>
                                    </svg></a><button type="submit" class="btn btn-sm btn-danger mx-1 btn-action"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                    </svg></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold"><a href="/csu/unit/c042a6bd-a024-42a5-bf95-344a006553de/">CAV/0001</a></td>
                        <td data-label="CSU Name">GANAOLI</td>
                        <td data-label="Csu Officer">Mr MAXCYE KITHIYORN</td>
                        <td>Mrs KAJATHTHIRI THAMOTHARAMPILLAI</td>
                        <td>CHAVAKACHCHERI</td>
                        <td>NO 300 HOUSING SCHEME NUNAVIL WEST</td>
                        <td data-label="DS Office" class="col-mobile">CHAVAKACHCHERI</td>
                        <td data-label="GS Office" class="col-mobile">NAVATKULI WEST</td>
                        <td>
                            <div class="d-flex"><a title="View" class="btn btn-sm btn-primary mx-1 btn-action" href="/csu/unit/c042a6bd-a024-42a5-bf95-344a006553de/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                    </svg></a><a title="Edit" class="btn btn-sm btn-primary mx-1 btn-action" href="/csu/unit/c042a6bd-a024-42a5-bf95-344a006553de/edit/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path>
                                    </svg></a><a title="group" class="btn btn-sm btn-secondary mx-1 btn-action" href="/csu/unit/c042a6bd-a024-42a5-bf95-344a006553de/sheet/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" class="svg-inline--fa fa-user-group " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z"></path>
                                    </svg></a><button type="submit" class="btn btn-sm btn-danger mx-1 btn-action"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path>
                                    </svg></button></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold"><a href="/csu/unit/e10ef210-ffc3-4e8f-ae8a-681fc56f1aab/">KOP/0001</a></td>
                        <td data-label="CSU Name">VATHARAVATHA</td>
                        <td data-label="Csu Officer">Mr MAXCYE KITHIYORN</td>
                        <td>Mrs SARMILA SANTHIRAKUMAR</td>
                        <td>KOPAY</td>
                        <td>VATHARAVATHAI PUTTUR</td>
                        <td data-label="DS Office" class="col-mobile">KOPAY</td>
                        <td data-label="GS Office" class="col-mobile">VATHARAVATTAI</td>
                        <td>
                            <div class="d-flex"><a title="View" class="btn btn-sm btn-primary mx-1 btn-action" href="/csu/unit/e10ef210-ffc3-4e8f-ae8a-681fc56f1aab/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" class="svg-inline--fa fa-eye " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                                    </svg></a><a title="Edit" class="btn btn-sm btn-primary mx-1 btn-action" href="/csu/unit/e10ef210-ffc3-4e8f-ae8a-681fc56f1aab/edit/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-to-square" class="svg-inline--fa fa-pen-to-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z"></path>
                                    </svg></a><a title="group" class="btn btn-sm btn-secondary mx-1 btn-action" href="/csu/unit/e10ef210-ffc3-4e8f-ae8a-681fc56f1aab/sheet/"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-group" class="svg-inline--fa fa-user-group " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z"></path>
                                    </svg></a><button type="submit" class="btn btn-sm btn-danger mx-1 btn-action"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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