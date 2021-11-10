@extends('layouts.app')

@section('title', '登録情報編集画面')

@section('content')

    <form action="{{ route('update') }}" method="post" class="text-center">
        @csrf
        <h1 class="mb-5">会員編集 会員ID：{{ $user->id }}</h1>
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="form-group d-flex flex-column">
            <input type="text" value="{{ $user->name }}" class="mb-3" name="name">
            <input type="tel" value="{{ $user->phone }}" class="mb-3" name="phone">
            <input type="email" value="{{ $user->email }}" class="mb-3" name="email">
            <input type="submit" class="btn btn-default border-dark w-75 mx-auto" value="編集">
        </div>
    </form>
    <form  action="{{ route('delete') }}" method="post" class="text-center">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{ $user->id }}">
        <input type="submit" class="btn btn-default border-dark mb-3 w-75" value="削除">
    </form>

@endsection