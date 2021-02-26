@include('includes.head')

@include('includes.header')


<div class="container mainContents text-center">    <!-- mainContents -->

    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル<br/>サンプル　サンプル　サンプル<br/>サンプル　サンプル　サンプル<br/>
                <a href="/payslips_duration">詳細</a></pre>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル<br/>サンプル　サンプル　サンプル<br/>サンプル　サンプル　サンプル<br/></pre>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル<br/>サンプル　サンプル　サンプル<br/>サンプル　サンプル　サンプル<br/></pre>
            </td>
        </tr>
    </table>


    <div class="paginate d-sm-none d-flex justify-content-center my-5 pagination-lg">ここにページネーション</div> <!-- Mobile_paginate/ -->

    <div class="paginate d-none d-sm-flex justify-content-center my-5">ここにページネーション</div>                  <!-- NotMobile_paginate/ -->


</div>                                  <!-- /mainContents -->


@include('includes.footer')