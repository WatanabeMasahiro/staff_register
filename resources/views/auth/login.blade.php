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
                <div class="card-header h5 text-center"><b>{{ __('ログイン情報を入力') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('スタッフID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="number" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>スタッフIDかパスワードが間違っています。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード ') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>スタッフIDかパスワードが間違っています。</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ログイン情報を保存') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                              <div class="d-md-none col-md-12 mb-3 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>
                              </div>

                              <div class="d-none d-md-block col-md-12 mb-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>
                              </div>

                              <div class="d-md-none col-md-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link col-md-12" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れた方') }}
                                    </a>
                                @endif
                              </div>

                              <div class="d-none d-md-block col-md-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link pl-1" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れた方') }}
                                    </a>
                                @endif
                              </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
