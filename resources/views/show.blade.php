<!--詳細ページ-->
@extends('layout')

@section('content')
    <h1>{{ $shop->name }}</h1>
    <div>
        <p>{{ $shop->category->name }}</p>
        <p>{{ $shop->address }}</p>
    </div>

    <iframe id='map'
        src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDUn6P4Bydi-2eDZlZQNPFEYotaO1G2K6g&amp;q={{ $shop->address }}'
        width='100%'
        height='320'
        frameboder='0'>
    </iframe>

    <div>
        <a href={{ route('shop.list' )}}>一覧に戻る</a>
        @auth
            <!--詳細情報のuseridとloginしているuseridが等しかった時ボタンを表示する-->
            @if ($shop->user_id === $login_user_id)
                 | <a href={{ route('shop.edit', ['id' =>  $shop->id]) }}>編集</a>
                <p></p>
                {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
                    {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
                {{ Form::close() }}
            @endif
        @endauth
    </div>
@endsection
