<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版</title>
  <link rel="stylesheet" href="css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./footerFixed.js"></script>
  <script type="text/javascript" src="./footerFixed.js"></script>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-7273019847401202",
      enable_page_level_ads: true
    });
  </script>

</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <header>
      <div class="header-left">
        <h1><a href="index.html">2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版</a></h1>
        <p>
        冬アニメの次回配信までどれくらいあるのか<br>
        どこで配信されるのか気になった時に一目で分かる！
        </p>

      </div>
  </header>
  <div class="information">

    <h2>不具合があった場合の対処法</h2>
    <ol>
      <li>タイマー作成に必要な情報（初回放送/配信日時）が検索されています</li>
      <li>時間情報に誤りがある場合は公式HPから正しい初回放送/配信日時を調べて「yyyy/mm/dd hh:mm」（例：2019/01/03 23:30 ※全て半角）の形式で該当箇所を修正してください</li>
    </ol>
    <h2>最速放送以外のTV放送のタイマーを生成したい場合</h2>
    <ol>
      <li>応急処置にはなりますが「最速放送/次回最速放送日時」の項目にご自身の利用しているTV放送の情報を入力してください</li>
      <li>入力する情報は初回放送日時あるいはその時点での次回放送日時です</li>
      <li>形式は「yyyy/mm/dd hh:mm」（例：2019/01/03 23:30 ※全て半角）でお願いします</li>
    </ol>

    </div>
    <div class="mediumspace">

    </div>
  <?php foreach($_POST['name'] as $keyword): ?>
    <?php
    $db = null;
    $sql = null;
    $res = null;
    if(empty($keyword)){
    $keyword="存在しないアニメは見つけられない";
  }else if ( strpos( $keyword, "'" ) ) {
      $keyword="ウィズ";
    }
    try {
      $db = new SQLite3('myapp.db');
    } catch (Exception $e) {
      print 'DBへの接続でエラーが発生しました。<br>';
      print $e->getTraceAsString();
      return;
    }
    $sql = "SELECT * FROM winterAnime where animeName like '%$keyword%'";
    $res = $db->query($sql);
    while( $rows = $res->fetchArray() ) {

      $animeName=$rows[1];
      $firstAirDate=$rows[2];
      $danimeFirst=$rows[3];
      $abemaFirst=$rows[4];
      $netflixFirst=$rows[5];
      $primevideoFirst=$rows[6];
    }
    ?>
<div class="container">
    <form method="get" action="changedTimer.php">
              <span>作品名</span>
              <p><input type="text" id="animeName" name="animeName[]" value="<?php echo $animeName ?>"></p>
              <span>最速放送/次回最速放送日時</span>
              <p><input type="text" id="name_1" name="firstAirDate[]" value="<?php echo $firstAirDate ?>"></p>
              <span>dアニメストア初回/次回配信日時</span>
              <p><input type="text" id="name_1" name="danimeFirst[]" value="<?php echo $danimeFirst ?>"></p>
              <span>abemaTV初回/次回配信日時</span>
              <p><input type="text" id="name_1" name="abemaFirst[]" value="<?php echo $abemaFirst ?>"></p>
              <span>Netflix初回/次回配信日時</span>
              <p><input type="text" id="name_1" name="netflixFirst[]" value="<?php echo $netflixFirst ?>"></p>
              <span>primevideo初回/次回配信日時</span>
              <p><input type="text" id="name_1" name="primevideoFirst[]" value="<?php echo $primevideoFirst ?>"></p>
</div>
  <?php endforeach ?>
  <div class="submit">
    <input type="submit" value="送信" name="submit">
  </div>
</form>
<p></p>
<div class="home">
  <a href="index.html">homeに戻る</a>
</div>
<div class="bigspace">

</div>


<div id="footer">
  <ul>
    <li>
      <a href="https://ssl.form-mailer.jp/fms/d85c330e603843">お問い合わせ</a>
    </li>
    <li>
      <a href="https://twitter.com/soupofmo">soupofmoのTwitterアカウント</a>
    </li>
    <li>
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-text="2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版" data-url="http://2019anime-timer.com">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </li>
    <li>
      <div class="fb-share-button" data-href="http://2019anime-timer.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F2019anime-timer.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
    </li>

  </ul>
  <p>&copy; 2019 2019anime-timer.com</p>
</div>

</body>
</html>
