@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->


    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">
                2/18
            </th>
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
            <td class="px-3 align-middle">
                <button class="btn btn-warning text-center" type="submit">詳　細</button>
            </td>
            <td class="px-3 align-middle">
                <button class="btn btn-danger text-center" type="submit">出　勤</button>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">
                3/14
            </th>
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
            <td class="px-3 align-middle">
                <button class="btn btn-warning text-center" type="submit">詳　細</button>
            </td>
            <td class="px-3 align-middle">
                <button class="btn btn-danger text-center" type="submit">出　勤</button>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">
                3/15
            </th>
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
            <td class="px-3 align-middle">
                <button class="btn btn-warning text-center" type="submit">詳　細</button>
            </td>
            <td class="px-3 align-middle">
                <button class="btn btn-danger text-center" type="submit">出　勤</button>
            </td>
        </tr>
    </table>

    <div class="paginate d-sm-none d-flex justify-content-center my-5 pagination-lg">ここにページネーション</div> <!-- Mobile_paginate/ -->

    <div class="paginate d-none d-sm-flex justify-content-center my-5">ここにページネーション</div>                  <!-- NotMobile_paginate/ -->


</div>                                  <!-- /mainContents -->


@include('includes.footer')