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
          <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

          @include('style')
      </head>

      <body>
        <!--ナビゲーションバー部分-->
        <nav class="navbar navbar-default navbar-fixed-top transparent" id="nav1">
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
                  <li><a href="#form">Form</a></li>
                  <li><a href="#list">Link</a></li>
        				</ul>
                <!--リスト部分終わり-->
        			</div>
        		</div>
        	</nav>
          <!--ナビゲーションバー部分終わり-->

          <!--TOP画像-->
          <p class='lead'>Takumi Chiba's Portfolio<br><?= date("Y/m/d G:i:s") ?></p>
          <div id="photo">
            <img class="img-responsive center-block" src="{{ asset('/assets/images/test2.1.jpg') }}">
            <img class="img-responsive center-block" src="{{ asset('/assets/images/test5.jpg') }}">
            <img class="img-responsive center-block" src="{{ asset('/assets/images/test3.1.jpg') }}">
            <img class="img-responsive center-block" src="{{ asset('/assets/images/test4.jpg') }}">
          </div>
          <div class="container">


          <!--TOP画像終わり-->

          <!--starterスタート-->
              <div class="starter-template">
                                <h7>
                                   はじめまして,千葉拓海です<br>ポートフォリオをご覧いただきありがとうございます<br>
                                   PHPで在庫管理とランチマップのアプリを作成しました<br>
                                   また、ポートフォリオの感想を送ることのできる<br>
                                   フォームも用意してあります<br>
                                   送っていただけると嬉しいです！！！
                                </h7>
                <hr>
          <!--アプリ群-->
                      <h2 id="app"><span>アプリ</span></h2>
                      <div class="row" style="margin-bottom:60px">

                              <div class="col-sm-1">
                              </div>
                              <div class="col-sm-5">
                                <div class="box29">
                                  <a href="{{ route('shop.list') }}">
                                  <div class="img_wrap" >
                                      <img src="http://flat-icon-design.com/f/f_health_39/s512_f_health_39_1bg.png">
                                  </div>
                                  <div class="box-title">
                                      ランチマップアプリ<br>
                                      ---LunchmapAPP---
                                  </div>
                                  </a>
                                </div>
                                <p>
                                  Paiza ラーニングでの勉強をもとに作成した<br>
                                  ランチマップアプリケーションです。<br>
                                  ランチマップとしての基本的な閲覧機能に加えて、<br>
                                  ログイン時のみ記事の投稿、編集、削除が可能などの<br>
                                  機能を備えています<br>
                                  <br>
                                  PHP,Laravel,PHP MyAdmin　を使用<br>
                                </p>
                              </div>
                              <div class="col-sm-5">
                                <div class="box29">
                                  <a href="http://192.168.0.106:8001/">
                                  <div class="img_wrap" >
                                      <img src="http://flat-icon-design.com/f/f_business_88/s512_f_business_88_1bg.png">
                                  </div>
                                  <div class="box-title">
                                      在庫管理アプリ<br>
                                      ---InventoryAPP---
                                  </div>
                                  </a>
                                </div>
                                <p>
                                  在庫管理のアプリです。<br>
                                  paizaラーニングを応用して作成しました。<br>
                                  ログインした場合のみ詳細ページを閲覧できます。<br>
                                  <br>
                                  PHP,Laravel,PHP MyAdmin　を使用<br>
                                </p>
                              </div>
                              <div class="col-sm-1">
                              </div>
                      </div>
                      <!--1列目終わり-->
                    <div class="row" style="margin-bottom:60px">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-5">
                              <div class="box29">
                                <a href="{{ route('shop.list') }}">
                                <div class="img_wrap" >
                                    <img src="http://flat-icon-design.com/f/f_event_93/s512_f_event_93_1bg.png">
                                </div>
                                <div class="box-title">
                                    ゲームアプリ<br>
                                    ---GAMEAPP---
                                </div>
                                </a>
                              </div>
                              <p>
                                今春リリース予定！！<br>
                                こうご期待
                              </p>
                            </div>
                            <div class="col-sm-5">
                              <div class="box29">
                                <a href="{{ route('shop.list') }}">
                                <div class="img_wrap" >
                                    <img src="http://flat-icon-design.com/f/f_object_74/s256_f_object_74_0bg.png">
                                </div>
                                <div class="box-title">
                                    ショッピングアプリ<br>
                                    ---ShoppingAPP---
                                </div>
                                </a>
                              </div>
                              <p>
                                今夏リリース予定！！<br>
                                こうご期待
                              </p>
                            </div>
                            <div class="col-sm-1">
                            </div>
                    </div>

                    <!--アプリ群終わり-->
                    <hr>
                    @guest
                    @include('form')
                    @endguest
                    <hr>
                    <h2 id="list">↓いろんなリンク先↓</h2>
                    <a href="https://twitter.com/mwambawb"><img src="{{ asset('/assets/images/twitter.png') }}" alt="サンプル"></a>
                    <a href="mailto:mwambawbaw@gmail.com"><img src="{{ asset('/assets/images/mail.png') }}" alt="サンプル"></a>
                    <a href="https://twitter.com/mwambawb"><img src="{{ asset('/assets/images/youtube.jpg') }}" alt="サンプル"></a>
                    <a class="btn btn-primary" href="https://ja.wikipedia.org/wiki/%E5%A4%8F%E7%9B%AE%E6%BC%B1%E7%9F%B3" target="_blank">夏目漱石</a>
                    <h3></h3>

                    <a class="btn btn-primary" href="#">ページ先頭に戻る</a>
                </div>
              </div>



          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </body>

</html>
