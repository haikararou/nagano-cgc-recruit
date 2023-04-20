<?php
$title_2nd = '人を知る';
$title_3rd = '浦野 章博';
$directory_2nd = 'people';
$directory_3rd = 'people03';
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

<body class="l-body people03" id="people">
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
      <h1 class="c-text--h1 --peopel"><span>職員紹介</span>相手への好奇心が、<br>「支えたい」の原動力。</h1>
      <h2 class="c-text--h2 --peopel">浦野 章博<span> （8年目 総務部企画情報課）</span></h2>
    </div>
  </section>

  <div class="l-hero--people">
    <figure>
      <img src="<?php echo $path; ?>assets/img/people/people03/main.png" alt="浦野 章博" width="993" height="1386">
      <figcaption>
        相手の話に<br>
        しっかり寄り添う<br>
        気さくな<br>
        広報担当職員
      </figcaption>
    </figure>
  </div>

  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
    </section>
    <section class="l-wrapper__container l-wrapper--right --peopel p-people">

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>現在の仕事</span>お客様と協会の、接点をつくる</h2>
        <p>元々保証業務を行っており、現在は広報業務を行っています。協会をより身近に、頼れる存在と感じていただくために、提供できる保証制度や創業支援・経営支援サービスなどの取り組みを発信しています。最近だと、お客様との新たな接点としてノベルティグッズを制作しました。<br>
          広報は営業とまた違った楽しさと難しさがあるので、日々試行錯誤しています。</p>
          <img src="<?php echo $path; ?>assets/img/people/people03/pic_01.png" alt="現在の仕事" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>協会の魅力</span>事業だけでなく、生活も支えていると感じる</h2>
        <p>事業を拡大するための大規模な設備投資を保証したり、資金繰りのアドバイスをしたりしてお客様から直接感謝されると、支えになれたかな、とやりがいを感じます。<br>
          また、昨今は新型コロナウイルスの影響により売上が急激に減少し、事業を続けるためのお金を必要としているお客様が多くいらっしゃいました。そういったお客様に対し、迅速に保証をしていたときは、お客様や共に働く従業員の生活を支えていると感じました。今後、私たちがどう支援していくべきかを日々考えています。</p>
          <img src="<?php echo $path; ?>assets/img/people/people03/pic_02.png" alt="協会の魅力" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>今後の目標</span>相手に興味を持ち、学び続ける。感謝される存在を目指して</h2>
        <p>目下の目標は、広報担当として、読みたくなる広報誌や刊行物を制作すること。読み手はどんな情報を求めているか、どんな見せ方がわかりやすいか、いつも考えています。<br>
          働くうえで大切にしているのは、相手に興味を持ち、前向きに学び続ける姿勢です。お客様ひとりひとりのことや、取り巻く環境を知ろうとすることをいつも心がけています。そうして引き出した話からは、数字だけではわからない、企業の本当の姿を知ることができます。<br>
          これからも、一人でも多くのお客様に感謝される仕事をしていきたいですね。</p>
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
              <dt> 9:00</dt>
              <dd>刊行物に掲載する<br>内容について打ち合わせ</dd>
            </div>
            <div>
              <dt>10:00</dt>
              <dd>刊行物の原稿作成</dd>
            </div>
            <div>
              <dt>12:00</dt>
              <dd>昼食</dd>
            </div>
            <div>
              <dt>13:00</dt>
              <dd>当協会提供の<br>テレビ番組<br>「信州夢追人」の取材</dd>
            </div>
            <div>
              <dt>17:00</dt>
              <dd>帰店、取材内容の整理</dd>
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
        <a href="<?php echo $path; ?>people/people01/" class="p-people--intro--div intro_01 intro">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="中島 菜々子" width="659" height="765">
            <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
          </figure>
          <h2>中島 菜々子<span><em>1年目</em>松本営業部業務第1課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people02/" class="p-people--intro--div intro_02 intro even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="本田 朋樹" width="662" height="761">
            <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
          </figure>
          <h2>本田 朋樹<span><em>2年目</em>松本営業部業務第2課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people04/" class="p-people--intro--div intro_04 intro">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="一ノ瀬 美波" width="659" height="765">
            <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
          </figure>
          <h2>一ノ瀬 美波<span><em>14年目</em>本店営業部業務第2課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people05/" class="p-people--intro--div intro_05 intro even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people05A.png" alt="石坂 友弥" width="659" height="764">
            <figcaption>さりげない<br>気配りで<br>誰からも頼られる<br>ベテラン社員</figcaption>
          </figure>
          <h2>石坂 友弥<span><em>16年目</em>業務統括部業務課</span></h2>
        </a>
      </section>
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

<script src="<?php echo $path; ?>assets/js/people.js"></script>

</body>
</html>