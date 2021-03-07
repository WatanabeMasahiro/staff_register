<body>
    <div class="container header">    <!-- header -->


        <div id="siteTitle" class="siteTitle text-center">
            <h1 class="siteTitle mt-4 pb-1">
                <a href="/" style="text-decoration: none;">
                    <b class="text-danger"><i class="fas fa-cannabis mr-3"></i>ハケン会社名<i class="fas fa-cannabis ml-3"></i></b>
                </a>
            </h1>
        </div>

        <hr class="w-75 pb-0 mb-0">

        <div class="d-block userName text-center">
            @if (Auth::check())
            <p class="text-muted userInfo_M pt-2 pb-0">　<b><i class="fa fa-user h4" aria-hidden="true"></i> 『　{{$user -> name}}　』さん</b>　</p>
            @else
            <p class="text-muted userInfo_M p-2">　<a href="/register"><b>ユーザー登録</b></a>　</p>
            @endif
        </div>

        <div class="text-center d-block my-2 pt-2">
            <a class="" href="/contact_form">問い合わせ</a>　/　<a id="logout-link" class="logout-links" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>


        <nav class="navbar navbar-expand-lg navbar-light bg-danger p-0 rounded">
            <a class="navbar-brand"><b class="d-lg-none ml-3">メニュー</b></a>
            <button class="navbar-toggler m-1 border border-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around py-1" id="navbarNavAltMarkup">
                <ul class="d-lg-none navbar-nav border-top border-white">   <!-- モバイル_ul -->
                    <li class="nav-item" style="margin:0 auto;">
                        <a class="nav-link p-3 font-weight-bold" href="/">案件一覧</a>
                    </li>
                </ul>                                                       <!-- モバイル_ul -->
                <ul class="d-none d-lg-block navbar-nav">                   <!-- PC__ul -->
                    <li class="nav-item" style="margin:0 auto;">
                        <a class="nav-link p-3 font-weight-bold" href="/">案件一覧</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin:0 auto;">
                        <a class="nav-link p-3 font-weight-bold" href="/entry">申込一覧</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin:0 auto;">
                        <a class="nav-link p-3 px-4 font-weight-bold" href="/work_past">過去歴</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin:0 auto;">
                        <a class="nav-link p-3 font-weight-bold" href="/payslips">給与明細</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin:0 auto;">
                        <a class="nav-link p-3 font-weight-bold" href="/staff_info">登録情報</a>
                    </li>
                </ul>                                                       <!-- PC__ul -->
            </div>
        </nav>


        <a class="d-block text-center my-3 bg-white font-weight-bold text-decoration-none flashingWarning border" href="/entry" style="margin: 0 auto; width: 12em; color:navy;">＜ ＜　出勤報告　＞ ＞</a>


        <hr class="pt-0 mt-0">

    </div>                                  <!-- /header -->