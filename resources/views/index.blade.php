<!--一覧画面を統括-->
@extends('layout')

@section('content')
<h5>ToDo
  <p>・店一覧を確認する<br>
     ・loginすることでお店情報の追加が行える<br>
     ・店情報の編集、削除を行うことができるのは情報登録者のみ<br>
     ・カテゴリ、投稿者はソートできる
  </p>
</h5>
<div class="row">
    <div class="col-sm-12">
        <div class="jumbotron bg-white">

            <h1>お店一覧</h1>
            <div id="users">
            <table class='table table-striped table-hover'>

                <tr>
                    <th class="sort" data-sort="name">カテゴリ</th>
                    <th class="nise">店名</th>
                    <th class="nise">住所</th>
                    <th class="sort" data-sort="born">投稿者</th>
                </tr>
                 <tbody class="list">
                @foreach ($shops as $shop)
                    <tr>
                        <td class="name">{{ $shop->category->name }}</td>
                        <td>
                            <a href={{ route('shop.detail', ['id' =>  $shop->id]) }}>
                                {{ $shop->name }}
                            </a>
                        </td>
                        <td>{{ $shop->address }}</td>
                        <td class="born">{{ $shop->user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script>
        var options = {
        valueNames: [ 'name', 'born' ]
        };
        var userList = new List('users', options);
        userList.sort( 'born', {order : 'desc' });
    </script>

    <!--(@auth,@endauth)で囲んでいる部分はログイン時のみ表示-->
    @auth
        <div>
            <a class="btn btn-primary" href={{ route('shop.new') }} class='btn btn-outline-primary'>新しいお店を追加</a>
        </div>
    @endauth
    <hr>
    <a class="btn btn-primary" href="/">ポートフォリオページに戻る</a>
<h1></h1>
@endsection
