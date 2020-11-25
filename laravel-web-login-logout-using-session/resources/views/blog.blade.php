@extends('master')
@section('content')
    <div class="title m-b-md">
        Raising the bar
    </div>
    <form action="{{route('logout')}}" method="post">
        @csrf
    <a href="">
        <button type="submit" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    </form>
    <hr>
@endsection
