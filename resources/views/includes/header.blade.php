<body>
    <div class="container header">    <!-- header -->


        <div id="siteTitle" class="siteTitle text-center">
            <h1 class="siteTitle mt-4 pb-1">
                <a href="/inventory_control" style="text-decoration: none;">
                    <b class="text-danger"><i class="fas fa-cannabis mr-3"></i>ハケン会社名<i class="fas fa-cannabis ml-3"></i></b>
                </a>
            </h1>
        </div>

        <hr class="w-75 pb-0 mb-0">

        <div id="navBar">

            <div class="text-center d-block my-2 pt-2">
                <a class="" href="/#">問い合わせ</a> / <a id="logout-link" class="logout-links" href="{{ route('logout') }}">{{ __('ログアウト') }}</a>
            </div>

            <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> -->


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a>
                    </div>
                </div>
            </nav>

            <div class="navBar">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                                    <a class="nav-item nav-link" href="#">Features</a>
                                    <a class="nav-item nav-link" href="#">Pricing</a>
                                    <a class="nav-item nav-link disabled" href="#">Disabled</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-info">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>

        </div>

        <hr class="pt-0 mt-0">

    </div>                                  <!-- /header -->