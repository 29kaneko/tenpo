@extends('layouts.admin')
@section('title', '悠然かしや')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ログイン画面</h2>
                <form action="{{action('Admin\TenpoController@create') }}" method="post" enctype="multipart/form-data">
                
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email-address" value="{{ old('email-address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">パスワード</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">パスワード（確認のため再度入力してください）</label>
 
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                    </div>
                    
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
 
                                    <label class="form-check-label" for="remember">ログイン情報を保存する</label>
                                </div>
                            </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="新規登録">
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="ログイン">
                    
                    
                </form>
            </div>
        </div>
    </div>
@endsection