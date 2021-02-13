@extends('layouts.app')

@section('content')

<div class="siteTitle text-center">
    <h1 class="siteTitle mt-4 pb-1">
    <a href="/login" style="text-decoration: none;">
        <b class="text-danger"><i class="fas fa-cannabis mr-3"></i>ハケン会社名<i class="fas fa-cannabis ml-3"></i></b>
    </a>
    </h1>
</div>

<hr class="headerHr">


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><b>{{ __('登録するユーザー情報を入力') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="font-size: 0.94em;">{{ __('パスワード(確認)') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required>

                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('住所') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"  value="{{ old('address') }}"required>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>住所を入力してください。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('年齢') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>年齢を0〜150の整数で入力してください。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('生年月日') }}</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="2000-01-01" min="1900-01-01" max="2100-12-31" required>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>年齢を0〜150の整数で入力してください。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                    <option value="男性">男性</option>
                                    <option value="女性">女性</option>
                                    <option value="その他" selected>その他</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>性別を選んでください。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('備考') }}</label>

                            <div class="col-md-6">
                                <textarea name="remarks" rows="4" class="form-control @error('remarks') is-invalid @enderror" placeholder="備　考　欄" value="{{ old('remarks') }}"></textarea>

                                @error('remarks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>備考を入力してください。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photoId" class="col-md-4 col-form-label text-md-right">{{ __('身分証の画像') }}</label>

                            <div class="col-md-6 mb-3">
                                <input id="photoId" type="file" accept="image/*" class="@error('photoId') is-invalid @enderror" name="photoId" required>

                                @error('photoId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>画像を選択してください。（拡張子は「jpg、png、gif」）{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-2">
                            <div class="col-md-12 text-center d-md-none col-md-12">
                                <button type="submit" class="btn btn-primary registerBtn">
                                    {{ __('　登録　') }}
                                </button>
                            </div>

                            <div class="col-md-12 text-center d-none d-md-block pb-1">
                                <button type="submit" class="btn btn-primary registerBtn">
                                    {{ __('　登録　') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="/login" class="d-block text-center mt-4">＜＜&nbsp;ログイン画面に戻る&nbsp;＞＞</a>
</div>

@endsection