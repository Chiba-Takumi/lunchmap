<h2 id="form"><span>フォーム</span></h2>
<p>
    ポートフォリオを見ていただきありがとうございました。<br>
    感想・アドバイス・文句お待ちしております。
</p>
<form class="form-horizontal" action="/store" method="post" target="_blank">
  {{ csrf_field()}}
      <div class="form-group">
            <label class="col-sm-2 control-label" for="subject">件名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" id="subject" required></input>
            </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label" for="message">メッセージ</label>
          <div class="col-sm-10">
              <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
          </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label" for="category">カテゴリ</label>
          <div class="col-sm-10">
              <select class="form-control" name="category" id="category">
                <option>仕事依頼</option>
                <option>アドバイス</option>
                <option>感想</option>
                <option>文句</option>
                <option>♡愛の告白♡</option>
                <option>その他</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">送信する</button>
          </div>
      </div>
</form>
