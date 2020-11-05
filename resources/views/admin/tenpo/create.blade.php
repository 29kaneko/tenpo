@extends('layouts.admin')
@section('title', '悠然かしや')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col align-self-start">
                <h2>悠然かしや</h2>
                    <a>{{ csrf_field() }}
                    <input type="submit" class="btn btn-primary btn-sm" value="新規登録">
                    </a>
                </div>
                <div class="col align-self-center">
                <h3>ログイン画面</h3>
                
                <form action="{{action('Admin\TenpoController@create') }}" method="post" enctype="multipart/form-data">
                
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="row">
                        <label class="col-md-8">メールアドレス、電話番号</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="email-address,telephone-number" value="{{ old('email-address,telephone-number') }}">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-8">パスワード</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">ログイン情報を保存する</label>
                                </div>
                            </div>
                    </div>
        <div class="row">
                <div class="col align-self-center">    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary btn-lg" value="ログイン">
                </div>    
                    
                </form>
            </div>
        </div>
    </div>
@endsection