@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->


    <table class="noset-table table table-hover table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">
                日にち
            </th>
            <td class="px-3 align-middle">
                3/4
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle">
                場所
            </td>
            <td class="px-3 align-middle">
                横浜アリーナ
            </td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">
                内容
            </th>
            <td class="px-3 align-middle">
                <pre>サンプル　サンプル　サンプル</pre>
            </td>
        </tr>
    </table>

    <div class="text-center">
        <button class="btn btn-danger" type="submit">仕事を申し込む</button>
    </div>

</div>                                  <!-- /mainContents -->


@include('includes.footer')