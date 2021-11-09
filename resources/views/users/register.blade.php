@extends('layouts.app')

@section('title', '会員登録')

@section('content')

<form action="{{ route('store') }}" method="post">
    @csrf
    <div class="form-group mx-auto text-center">
        <h1 class="mb-5">会員登録</h1>
        <input type="text" class="form-control mb-3 border-dark" name="name" placeholder="名前">
        <input type="tel" class="form-control mb-3 border-dark" name="phone" placeholder="電話番号">
        <input type="email" class="form-control mb-3 border-dark" name="email" placeholder="メールアドレス">
        <input type="submit" class="btn btn-default border-dark w-75" value="登録">
    </div>
</form>

@endsection