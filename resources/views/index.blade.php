<!--一覧画面を統括-->
@extends('layout')

@section('content')
    <h1>お店一覧</h1>

    <table class='table table-striped table-hover'>

        <tr>
            <th>カテゴリ</th><th>店名</th><th>住所</th><th>投稿者</th>
        </tr>
        @foreach ($shops as $shop)
            <tr>
                <td>{{ $shop->category->name }}</td>
                <td>
                    <a href={{ route('shop.detail', ['id' =>  $shop->id]) }}>
                        {{ $shop->name }}
                    </a>
                </td>
                <td>{{ $shop->address }}</td>
                <td>{{ $shop->user->name }}</td>
            </tr>
        @endforeach
    </table>

    <!--(@auth,@endauth)で囲んでいる部分はログイン時のみ表示-->
    @auth
        <div>
            <a href={{ route('shop.new') }} class='btn btn-outline-primary'>新しいお店を追加</a>
        </div>
    @endauth
    <hr>
    <a class="btn btn-primary" href="http://192.168.0.104:8000">ポートフォリオページに戻る</a>
@endsection
