<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131658092-1"></script>
<script>
  window_hm.dataLayer = window_hm.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131658092-1');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7273019847401202",
          enable_page_level_ads: true
     });
</script>

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

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window_hm.adsbygoogle || []).push({
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
          複数の配信サイトの情報をまとめて検索。<br>
          配信情報を調べる手間を最小限に。
        </p>
      </div>
  </header>
  <div class="information">
    <h2>このページの保存方法</h2>
    <ul>
      <li>ブックマークなどに保存していつでもアクセスできるようにしましょう</li>
      <li>safariならばホーム画面に追加機能が便利です(まずは下のボタンを押してください)</li>
    </ul>
    <img src="./image/addhome.png" alt="ホームボタンに追加する方法">
    <ul>
      <li>(01/17更新)Hulu、ニコニコ生放送・チャンネル、バンダイチャンネルの情報も追加しました。特に何も書いていなければ見放題対象作品です。</li>
      <li>(01/23更新)更新曜日情報を追加しました</li>
    </ul>
    <h2>不具合があった場合</h2>
    <ul>
      <li>初回放送など例外的な日時の配信/放送には対応できないことがあります。</li>
      <li>表示がおかしい際はキャッシュ削除を試してみてください</li>
      <li>
        データの追加や修正の必要な情報などの不具合がありましたら
        <a href="https://ssl.form-mailer.jp/fms/d85c330e603843">こちら</a>
        に気軽にご連絡ください。
      </li>
    </ul>
  </div>

    <?php
      $animeNameArray=array();
      $ydhms=array();
     ?>

    <?php foreach($_GET['name'] as $keyword): ?>
      <?php
      $db = null;
      $sql = null;
      $res = null;
      if(empty($keyword)){
      $keyword="存在しないアニメは見つけられない";
    }else if ( strpos( $keyword, "'" ) ) {
        $keyword="ウィズ";
      }else if($keyword=="allall"){
      $keyword="";
      echo "<h2>2019冬アニメ全配信情報</h2>";
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

        $animeNameArray[]=$rows[1];
        $ydhms[]=$rows[2];
        $ydhms[]=$rows[3];
        $ydhms[]=$rows[4];
        $ydhms[]=$rows[5];
        $ydhms[]=$rows[6];
        $ydhms[]=$rows[7];
        $ydhms[]=$rows[8];
        $ydhms[]=$rows[9];
        $ydhms[]=$rows[10];
      }
      ?>
    <?php endforeach ?>
    <?php $count = count($animeNameArray); ?>

<div class="linespace">
  <a href="https://px.a8.net/svt/ejp?a8mat=356O5L+AJ954I+3ULG+601S1" target="_blank" rel="nofollow">
  <img border="0" width="320" height="50" alt="" src="https://www29.a8.net/svt/bgt?aid=190107849637&wid=001&eno=01&mid=s00000017962001008000&mc=1"></a>
  <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=356O5L+AJ954I+3ULG+601S1" alt="">
</div>
<div class="linespace">
  <a href="https://px.a8.net/svt/ejp?a8mat=356O5L+AJ954I+3ULG+5YRHE" target="_blank" rel="nofollow">作品数・会員数No.1のアニメ見放題サービス【ｄアニメストア】</a>
<img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=356O5L+AJ954I+3ULG+5YRHE" alt="">
</div>

  <div class="selectPlatform">
    <ul>
      <li><input type="checkbox" name="btn" id="select_tv" checked="checked">最速放送/TV放送</li>
      <li><input type="checkbox" name="btn" id="select_danime" checked="checked">dアニメストア</li>
      <li><input type="checkbox" name="btn" id="select_abema" checked="checked">abemaTV</li>
      <li><input type="checkbox" name="btn" id="select_Netflix" checked="checked">Netflix</li>
      <li><input type="checkbox" name="btn" id="select_primevideo" checked="checked">primevideo</li>
      <li><input type="checkbox" name="btn" id="select_hulu" >hulu</li>
      <li><input type="checkbox" name="btn" id="select_nicoLive">ニコニコ生放送</li>
      <li><input type="checkbox" name="btn" id="select_nicoCh">ニコニコチャンネル</li>
      <li><input type="checkbox" name="btn" id="select_bandai">バンダイチャンネル</li>

    </ul>
  </div>
  <script type="text/javascript" src="selectPlatform.js">
  </script>

<?php for($i=0;$i<$count;$i++): ?>
<div class="container">
  <div id="animeName"><strong class="animeName"><?php echo $animeNameArray[$i] ?></strong></div>
  <p>の最新話まで残り</p>
  <div class="timer">
  <strong class="timer0">最速放送/TV放送</strong>
  <span class="timer0" id="dow_hm<?php echo $i*9 ?>" ></span>
  <p class="timer0" id="<?php echo $i*9?>">00日00時間00分00秒</p>

  <a class="timer1" href="https://anime.dmkt-sp.jp/">dアニメストア</a>
  <span class="timer1" id="dow_hm<?php echo $i*9+1 ?>" ></span>
  <p class="timer1" id="<?php echo $i*9+1?>">00日00時間00分00秒</p>

  <a class="timer2" href="https://abema.tv/video/genre/animation">abemaTV</a>
  <span class="timer2" id="dow_hm<?php echo $i*9+2 ?>" ></span>
  <p class="timer2" id="<?php echo $i*9+2?>">00日00時間00分00秒</p>

  <a  class="timer3"href="https://www.netflix.com/jp/">Netflix</a>
  <span class="timer3" id="dow_hm<?php echo $i*9+3 ?>" ></span>
  <p class="timer3" id="<?php echo $i*9+3?>">00日00時間00分00秒</p>

  <a class="timer4" href="https://www.amazon.co.jp/Prime-Video/b?ie=UTF8&node=3535604051">primevideo</a>
  <span class="timer4" id="dow_hm<?php echo $i*9+4 ?>" ></span>
  <p class="timer4" id="<?php echo $i*9+4?>">00日00時間00分00秒</p>

  <a class="timer5" href="https://www.happyon.jp/display/Anime">Hulu</a>
  <span class="timer5" id="dow_hm<?php echo $i*9+5 ?>" ></span>
  <p class="timer5" id="<?php echo $i*9+5?>">00日00時間00分00秒</p>

  <a class="timer6" href="http://live.nicovideo.jp/">ニコニコ生放送</a>
  <span class="timer6" id="dow_hm<?php echo $i*9+6 ?>" ></span>
  <p class="timer6" id="<?php echo $i*9+6?>">00日00時間00分00秒</p>

  <a class="timer7" href="https://ch.nicovideo.jp/portal/anime">ニコニコチャンネル</a>
  <span class="timer7" id="dow_hm<?php echo $i*9+7 ?>" ></span>
  <p class="timer7" id="<?php echo $i*9+7?>">00日00時間00分00秒</p>

<a class="timer8" href="https://www.b-ch.com/">バンダイチャンネル</a>
<span class="timer8" id="dow_hm<?php echo $i*9+8 ?>" ></span>
<p class="timer8" id="<?php echo $i*9+8?>">00日00時間00分00秒</p>
</p>

  </div>
</div>
<script type="text/javascript">
var ydhms =[];
ydhms = JSON.parse('<?php echo json_encode($ydhms); ?>');

</script>
</div>
<?php endfor ?>


<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-text="2019年冬アニメ配信情報検索エンジン＆最新話まであとどれくらいなのタイマーβ版" >Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<p></p>
<div class="fb-share-button" data-href="http://2019anime-timer.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F2019anime-timer.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>

<div class="home">
  <a href="index.html">homeに戻る</a>
</div>
<div class="mediumspace">
  <a href="https://px.a8.net/svt/ejp?a8mat=356O5Q+16V8C2+3VV0+61JSH" target="_blank" rel="nofollow">
  <img border="0" width="468" height="60" alt="" src="https://www27.a8.net/svt/bgt?aid=190107854072&wid=001&eno=01&mid=s00000018126001015000&mc=1"></a>
  <img border="0" width="1" height="1" src="https://www19.a8.net/0.gif?a8mat=356O5Q+16V8C2+3VV0+61JSH" alt="">
</div>
<div class="linespace">

</div>

<div class="space">
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
