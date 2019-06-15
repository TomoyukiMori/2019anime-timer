<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版" content="各配信サービス（dアニメストア/abemaTV/Netflix/primevideo）においてあるアニメの最新話が更新されるまでの残り時間を教えてくれるタイマーを生成するサイトです。">

  <meta property="og:url" content="http://2019anime-timer.com/" />
  <meta property="og:title" content="2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版" />
  <meta property="og:type" content="website">


  <link rel="stylesheet" href="css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="./footerFixed.js"></script>

  <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-7273019847401202",
      enable_page_level_ads: true
    });
  </script> -->


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
    <h2>このページの保存方法</h2>
    <ul>
      <li>ブックマークなどに保存していつでもアクセスできるようにしましょう</li>
      <li>safariならばホーム画面に追加機能が便利です（以下の操作でできます）</li>
      <img src="./image/addhome.png" alt="ホームボタンに追加する方法">

    </ul>

    <h2>不具合があった場合</h2>
    <ul>
      <li>基本的に一週間をカウントしているので例外的な日時の配信/放送には対応できません。ご了承ください。</li>
      <li>「配信日時が不明です（配信はしています）」の表示はまだ配信日時が公開されていないという意味です。公開され次第、更新いたします。</li>
      <li>
        不明になっている項目の正確な日時、データが誤っている項目、その他エラーなどは
        <a href="https://ssl.form-mailer.jp/fms/d85c330e603843">こちら</a>
        にご連絡ください。
      </li>
      <li>日時が間違えている場合やカスタマイズしたい場合は、「修正ページにGO」のボタンを押して編集してください。ただし、まだ改良中なのでやや操作性がよくないかもしれません。</li>
    </ul>
  </div>
  <?php
foreach($_GET['animeName'] as $array){
  $animeNameArray[]=$array;
}
$count = count($animeNameArray);

foreach($_GET['firstAirDate'] as $array){
  $firstAirDateArray[]=$array;
}
// echo $firstAirDate[1];
foreach ($_GET['danimeFirst'] as $array) {
  $danimeFirstArray[]=$array;
}
foreach ($_GET['abemaFirst'] as $array) {
  $abemaFirstArray[]=$array;
}
foreach ($_GET['netflixFirst'] as $array) {
  $netflixFirstArray[]=$array;
}
foreach ($_GET['primevideoFirst'] as $array) {
  $primevideoFirstArray[]=$array;
}
for($i=0;$i<$count;$i++){
  $ydhms[]=$firstAirDateArray[$i];
  $ydhms[]=$danimeFirstArray[$i];
  $ydhms[]=$abemaFirstArray[$i];
  $ydhms[]=$netflixFirstArray[$i];
  $ydhms[]=$primevideoFirstArray[$i];
}
$count = count($animeNameArray);
?>

<div class="mediumspace">

</div>

<form  action="change.php" method="POST">
  <?php foreach ($animeNameArray  as $value) : ?>
  <input type="hidden" name="name[]" value="<?php echo $value ?>">
<?php endforeach ?>
  <input type="submit" value="修正ページにGO" name="submit">
</form>

<?php for($i=0;$i<$count;$i++): ?>

<div class="container">
  <div id="animeName"><strong class="animeName"><?php echo $animeNameArray[$i] ?></strong></div>
  <p>の最新話まで残り</p>
  <div class="timer">
  <strong id="timer">最速放送/TV放送</strong><p id="<?php echo $i*5?>">00日00時間00分00秒</p>
  <a id="timer" href="https://anime.dmkt-sp.jp/">dアニメストア</a><p id="<?php echo $i*5+1?>">00日00時間00分00秒</p>
  </p>
  <a id="timer" href="https://abema.tv/video/genre/animation">abemaTV</a><p id="<?php echo $i*5+2?>">00日00時間00分00秒</p>
  </p>
  <a  id="timer"href="https://www.netflix.com/jp/">Netflix</a><p id="<?php echo $i*5+3?>">00日00時間00分00秒</p>
  </p>
  <a id="timer" href="https://www.amazon.co.jp/Prime-Video/b?ie=UTF8&node=3535604051">primevideo</a><p id="<?php echo $i*5+4?>">00日00時間00分00秒</p>
  </p>
  </div>
</div>
<script type="text/javascript">
var ydhms =[];
ydhms = JSON.parse('<?php echo json_encode($ydhms); ?>');
console.log(ydhms);
console.log(ydhms[0]);
console.log(ydhms[5]);

</script>
</div>
<?php endfor ?>

<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-text="2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版" data-url="http://2019anime-timer.com">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<p></p>
<div class="fb-share-button" data-href="http://2019anime-timer.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F2019anime-timer.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>

<div class="home">
  <a href="index.html">homeに戻る</a>
</div>
<div class="bigspace">

</div>



<script type="text/javascript">
var ydhms =[];
ydhms = JSON.parse('<?php echo json_encode($ydhms); ?>');
</script>
<script type="text/javascript" src="main2.js">
</script>
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
