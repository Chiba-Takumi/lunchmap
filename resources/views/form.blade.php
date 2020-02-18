<h2 id="form">フォーム</h2>
<p>このサイトの修正意見ください</p>
<form class="form-horizontal" action="/store" method="post">
  {{ csrf_field()}}
      <div class="form-group">
            <label class="col-sm-2 control-label" for="subject">件名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" id="subject">
            </div>
      </div>
      <div class="form-group">
          <label class="col-sm-2 control-label" for="message">メッセージ</label>
          <div class="col-sm-10">
              <textarea class="form-control" name="message" id="message" rows="3"></textarea>
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
                <option>その他</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button type="submit">送信する</button>
          </div>
      </div>
</form>
