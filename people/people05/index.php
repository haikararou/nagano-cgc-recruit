<?php
$title_2nd = '人を知る';
$title_3rd = '石坂 友弥';
$directory_2nd = 'people';
$directory_3rd = 'people05';
$description = '';
?>
<!DOCTYPE html>
<html dir="ltr" lang="ja" prefix="og: https://ogp.me/ns#"  class="no-js">
<head>
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/meta.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/meta.php");
}
?>
</head>

<body class="l-body people05" id="people">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header.php");
}
?>

<main class="l-main">

  <section class="l-wrapper__outer l-wrapper">
    <div>
      <h1 class="c-text--h1 --peopel"><span>職員紹介</span>一人ひとりの顔がわかる。<br>支え合いの空気が、協会をつくっている</h1>
      <h2 class="c-text--h2 --peopel">石坂 友弥<span> （16年目 業務統括部業務課）</span></h2>
    </div>
  </section>

  <div class="l-hero--people">
    <figure>
      <img src="<?php echo $path; ?>assets/img/people/people05/main.png" alt="石坂 友弥" width="993" height="1386">
      <figcaption>
        さりげない<br>
        気配りで<br>
        誰からも頼られる<br>
        ベテラン社員
      </figcaption>
    </figure>
  </div>

  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
    </section>
    <section class="l-wrapper__container l-wrapper--right --peopel p-people">

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>現在の仕事</span>協会職員の業務を支えることで、その先のお客様を支える</h2>
        <p>協会の営業店職員を「支える」業務を行っています。具体的には、お客様からコピーをいただいた決算書をシステムに入力したり、関係人が亡くなった場合の相続人調査等を行ったりといった業務です。<br>
          協会は140人程度の小さい組織なので、職員ほぼ全員の顔と名前がわかります。お客様との接点がある営業店職員一人ひとりを支えることで、お客様を支えていると実感します。</p>
          <img src="<?php echo $path; ?>assets/img/people/people05/pic_01.png" alt="現在の仕事" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>協会の魅力</span>一人ひとりのやさしさ、支え合う風潮</h2>
        <p>私は男性職員として初めて育休を取得しましたが、取得前にも復帰後にも、多くのサポートをしてもらいました。同僚と個別に面談し、育休中の業務の割り振りを行ったり、総務課の担当者に何度も相談にのってもらったり。復帰するときもたくさんの職員に支えていただき、スムーズに仕事に戻ることができました。長く協会にいて、色々な部署での業務を経験しましたが、協会の人たちはみんな穏やかで、いい人にしか出会ったことがありません。</p>
          <img src="<?php echo $path; ?>assets/img/people/people05/pic_02.png" alt="協会の魅力" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>今後の目標</span>これからもずっと、信頼する仲間と共に</h2>
        <p>末っ子が社会人になるまで働いていることが目標です。今後もワークライフバランスを意識しながら、この協会で働いていくつもりです。先は長いですが、みんなで日々切磋琢磨しながら、楽しく働いていられたらいいですね。<br>
          これからの協会を担っていく若手の活躍にも期待しています。</p>
      </div>

      <div class="p-text-box">
        <h3 class="c-text--h3 --peopel">ある1日のスケジュール</h3>
        <div class="p-people--schedule">
          <dl>
            <div>
              <dt> 8:30</dt>
              <dd>出勤</dd>
            </div>
            <div>
              <dt> 8:45</dt>
              <dd>営業店担当者へ電話し、<br>必要な対応を依頼</dd>
            </div>
            <div>
              <dt>10:00</dt>
              <dd>相続人調査の資料作成</dd>
            </div>
            <div>
              <dt>12:00</dt>
              <dd>昼食</dd>
            </div>
            <div>
              <dt>13:00</dt>
              <dd>決算書登録業務<br>照会事項があれば、<br>営業店担当者へ<br>電話し確認</dd>
            </div>
            <div>
              <dt>17:20</dt>
              <dd>退勤</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <div class="p-text-box">
      <h2 class="c-text--h2">他の職員はこちら</h2>
      <section class="p-people--intro p-people--intro--other">
        <a href="<?php echo $path; ?>people/people01/" class="p-people--intro--div intro_01">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="中島 菜々子" width="659" height="765">
            <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
          </figure>
          <h2>中島 菜々子<span><em>1年目</em>松本営業部業務第1課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people02/" class="p-people--intro--div intro_02 even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="本田 朋樹" width="662" height="761">
            <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
          </figure>
          <h2>本田 朋樹<span><em>2年目</em>松本営業部業務第2課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people03/" class="p-people--intro--div intro_03">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="浦野 章博" width="659" height="764">
            <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
          </figure>
          <h2>浦野 章博<span><em>8年目</em>総務部企画情報課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people04/" class="p-people--intro--div intro_04 even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="一ノ瀬 美波" width="659" height="765">
            <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
          </figure>
          <h2>一ノ瀬 美波<span><em>14年目</em>本店営業部業務第2課</span></h2>
        </a>
      </section>
      <div class="intro_06"></div>
    </div>

  </section>

</main>

<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/footer.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/footer.php");
}
?>

<script src="<?php echo $path; ?>assets/js/people05.js"></script>

</body>
</html>