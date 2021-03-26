@include('includes.head')

@include('includes.header')


<div class="container mainContents text-center">    <!-- mainContents -->


<div class="card border-dark text-center">
    <div class="card-header pt-3 pb-2" style="letter-spacing: 1em;">
        <h4 class="font-weight-bold">問い合わせ</h4>
    </div>
    <div class="card-body" style="background-color:ghostwhite;">

        <form method="POST" action="/contact_form">
        @csrf
            <input type="hidden" name="staff_id" value="{{$user->id}}">

            <select name="title" class="mt-5 p-1">
                @foreach ($contact_title as $cont_t)
                    <option vlaue="1">{{$cont_t->title}}</option>
                @endforeach
            </select>

            <div class="mt-4">
                <p class=""><b>内　容</b></p>
                <textarea name="text" placeholder="{{old('contact_content')}}" cols="40" rows="10" class="p-2">{{old('contact_content')}}</textarea>
            </div>

            <input type="submit" value="送信" class="mt-3 mb-5 px-5 btn btn-info btn-lg">
        </form>

    </div>
</div>


    <hr class="my-5">


    <p class="text-center">↓　（株）ハケン会社名への連絡先はこちら　↓</p>


    <div class="d-block d-lg-none">
        <table class="table table-bordered table-info table-sm w-75" style="margin:0 auto;">    <!-- モバイル -->
            <thead class="bg-success">
                <tr class="">
                    <th class="text-center">連　絡　先</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="text-center" style="border-bottom-width: 2px;">電話番号 ：　<a href="tel:00000000000">000-0000-0000</a></td>
                </tr>
                <tr class="">
                    <td class="text-center">メールアドレス ：　<br/>≪　toiawase@sample.co.jp　≫</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-none d-lg-block">
        <table class="table table-bordered table-info table-sm w-50" style="margin:0 auto;">    <!-- PC -->
            <thead class="bg-success">
                <tr class="">
                    <th class="text-center" colspan="2">連　絡　先</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td class="text-center" style="border-bottom-width: 2px;">電話番号</td>
                    <td class="text-center" style="border-bottom-width: 2px;"><a href="tel:00000000000">000-0000-0000</a></td>
                </tr>
                <tr class="">
                    <td class="text-center" style="border-right: none;">メールアドレス</td>
                    <td class="text-center">≪　toiawase@sample.co.jp　≫</td>
                </tr>
            </tbody>
        </table>
    </div>


</div>                                  <!-- /mainContents -->


@include('includes.footer')