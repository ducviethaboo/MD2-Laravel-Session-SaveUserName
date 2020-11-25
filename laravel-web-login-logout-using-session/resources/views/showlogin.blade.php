@extends('master')
@section('content')
    @if (session()->has('login-fail'))
        <div class="login-fail">
            <p class="text-danger">{{session()->get('login-fail')}}</p>
        </div>
    @endif
    <div class="title m-b-md">
        Đăng nhập
    </div>
    <div class="form-login">
        <form class="text-left" method="post" action="{{ route('check.login') }}">
            @csrf
            <div class="form-group">
                <label for="inputUsername">Tên người dùng</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="username"
                       placeholder="Enter username"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="password"
                       placeholder="Password"
                       required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
            <a class="btn" href="{{route('login')}}">Quay lại</a>
        </form>

    </div>
@endsection
