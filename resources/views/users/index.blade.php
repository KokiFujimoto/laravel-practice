@extends('layouts.app')

@section('title', '会員一覧')

@section('content')

<div class="d-flex flex-column">
    <div>
        <a href="{{ url('/register') }}" class="float-right mb-1"><u>>>登録</u></a>
    </div>
    <div class="main-content">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('edit', $user->id) }}"><u>>>編集</u></a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

@endsection