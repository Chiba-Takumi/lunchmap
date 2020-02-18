<!--メインの画面,ホーム画面-->
<!DOCTYPE html>
<html lang="ja">

      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>千葉拓海のポートフォリオ</title>
          <!-- Bootstrap -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

          <style>
              body {
                padding: 50px;
                background-color: #95C1FF;
                color: #000000;
                margin: 0px;
              }

              p {
                font-weight: bold;
                font-size: 100%;
                font-family: serif;

              }

              .starter-template {
                padding: 40px 15px;
                background-color: white;
              }

          </style>
      </head>

      <body>
        <!--ナビゲーションバー部分-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
        		<div class="container">
        			<div class="navbar-header">
        				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
        				<a class="navbar-brand" href="#">ポートフォリオ</a>
        			</div>
        			<div id="navbar" class="collapse navbar-collapse">
                <!--list,tableなどのナビバーのリスト部分-->
        				<ul class="nav navbar-nav">
        					<li class="active"><a href="#">Home</a></li>
                  <li><a href="#app">成果物</a></li>
                  <li><a href="#list">Link</a></li>
                  <li><a href="#form">Form</a></li>
        				</ul>
                <!--リスト部分終わり-->
        			</div>
        		</div>
        	</nav>
          <!--ナビゲーションバー部分終わり-->
          <div class="container">
              <div class="starter-template">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="jumbotron">
                                <h1>ポートフォリオ</h1>
                                <p class='lead'>Takumi Chiba's Portfolio　　<?= date('Y/m/d H:i:s') ?></p>
                                <a href="https://twitter.com/mwambawb/status/999562703688556544" target="_blank">
                                <img class="img-responsive center-block" src="{{ asset('/assets/images/test.jfif') }}"></a>
                                <p>（仮）ポートフォリオのメインページ<br>自己紹介とか書きます</p>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                      <h2 id="app"></h2>
                            <div class="col-sm-6">
                                <h2>ランチマップアプリ</h2>
                                <a href="{{ route('shop.list') }}">
                                <img class="img-responsive center-block" src="http://flat-icon-design.com/f/f_health_39/s512_f_health_39_1bg.png"></a>
                                <p>
                                  Paiza ラーニングで作成したランチマップアプリケーションです。<br>
                                  ランチマップとしての基本的な閲覧機能に加えて、
                                  ログイン時のみ記事の投稿、編集、削除が可能などの機能を備えています
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h2>在庫管理アプリ</h2>
                                <a href="http://192.168.0.104:8001/articles">
                                <img class="img-responsive center-block" src="http://flat-icon-design.com/f/f_business_88/s512_f_business_88_1bg.png"></a>
                                <p>
                                  在庫管理のアプリです。今後作ります。<br>
                                  ログインした場合のみ詳細ページを閲覧できるようにします。<br>
                                  商品の登録、削除、編集を行えるようにします。<br>
                                </p>
                            </div>

                    </div>
                    <hr>
                    <h2 id="list">↓いろんなリンク先↓</h2>
                    <a class="btn btn-primary" href="https://twitter.com/mwambawb" target="_blank">Twitter</a>
                    <a class="btn btn-primary" href="https://twitter.com/mwambawb" target="_blank">Gmail</a>
                    <a class="btn btn-primary" href="https://twitter.com/mwambawb" target="_blank">YouTube</a>
                    <a class="btn btn-primary" href="https://ja.wikipedia.org/wiki/%E5%A4%8F%E7%9B%AE%E6%BC%B1%E7%9F%B3" target="_blank">夏目漱石</a>
                    <hr>
                    @include('form')
                    <hr>
                    <a class="btn btn-primary" href="#">ページ先頭に戻る</a>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <hr>
                    <h2>リスト</h2>
                    <ul class="list-group">
                      <li class="list-group-item">ねこ</li>
                      <li class="list-group-item">いぬ</li>
                      <li class="list-group-item">うさぎ</li>
                    </ul>
                    <hr>
                    <h2 id="table">テーブル</h2>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>名前</th>
                          <th>特徴</th>
                          <th>住所</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>たま</td>
                          <td>くつした</td>
                          <td>東京都港区</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>みけ</td>
                          <td>とらじま</td>
                          <td>東京都台東区</td>
                        </tr>
                      </tbody>
                    </table>
                    <a class="btn btn-primary" href="#">ページ先頭に戻る</a>
                </div>
              </div>


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </body>

</html>
