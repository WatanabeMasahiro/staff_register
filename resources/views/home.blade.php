@include('includes.head')

@include('includes.header')


<form class="form-inline my-4 justify-content-center">
    <div class="col-auto pr-2">
        <input class="form-control" type="search" placeholder="Search">
    </div>
    <div class="col-auto pl-0">
        <button class="btn btn-outline-success px-3" type="submit">検 索</button>
    </div>
</form>


<div class="container mainContents">    <!-- mainContents -->


    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
        </tr>
    </table>


    <div class="paginate d-sm-none d-flex justify-content-center my-5 pagination-lg">ここにページネーション</div> <!-- Mobile_paginate/ -->

    <div class="paginate d-none d-sm-flex justify-content-center my-5">ここにページネーション</div>                  <!-- NotMobile_paginate/ -->


</div>                                  <!-- /mainContents -->


@include('includes.footer')