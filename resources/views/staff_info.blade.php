@include('includes.head')

@include('includes.header')


<div class="container mainContents">    <!-- mainContents -->


    <table class="noset-table table table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">スタッフID</th>
            <td class="px-3 align-middle">{{$user->id}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">名前</th>
            <td class="px-3 align-middle">{{$user->name}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">メールアドレス</th>
            <td class="px-3 align-middle">{{$user->email}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">電話番号</th>
            <td class="px-3 align-middle">{{$user->tel}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">住所</th>
            <td class="px-3 align-middle">{{$user->address}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">年齢</th>
            <td class="px-3 align-middle">{{$user->age}}歳</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">生年月日</th>
            <td class="px-3 align-middle">{{$user->birthday->format('Y年 m月d日')}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">性別</th>
            <td class="px-3 align-middle">{{$user->gender}}</td>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle">登録日</th>
            <td class="px-3 align-middle">{{$user->created_at->format('Y年 m月d日')}}</td>
        </tr>
    </table>

    <table class="noset-table table table-dark recordTable">
        <tr class="recordData table-secondary text-dark">
            <th class="px-3 align-middle text-center">身分証明書の画像</th>
        </tr>
        <tr class="recordData table-secondary text-dark">
            <td class="px-3 align-middle text-center">
                <img src="{{$user->photoId}}">
            </td>
        </tr>
    </table>


</div>                                  <!-- /mainContents -->


@include('includes.footer')