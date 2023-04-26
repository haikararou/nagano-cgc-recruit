<?php
$title_2nd = '人を知る';
$title_3rd = 'M.I.';
$directory_2nd = 'people';
$directory_3rd = 'people04';
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

<body class="l-body people04" id="people">
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
      <h1 class="c-text--h1 --peopel"><span>職員紹介</span>仕事と子育てを両立しながら、<br>日々誠実に、丁寧に</h1>
      <h2 class="c-text--h2 --peopel">M.I.<span> （14年目 本店営業部業務第2課）</span></h2>
    </div>
  </section>

  <div class="l-hero--people">
    <figure>
      <img src="<?php echo $path; ?>assets/img/people/people04/main.png" alt="M.I." width="993" height="1386">
      <figcaption>
        誠実に<br>
        お客様と向き合う<br>
        優しい<br>
        ワーキングママ
      </figcaption>
    </figure>
  </div>

  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
    </section>
    <section class="l-wrapper__container l-wrapper--right --peopel p-people">

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>現在の仕事</span>育児と並行して、企業の経営を支援する</h2>
        <p>現在は育休を経て子育てをしながら、時間短縮勤務（9:30-16:30）で働いています。<br>
          主な業務は、金融機関から来る事前相談の回答、稟議書の作成、経営支援業務など。業況が厳しいお客様と今後どのように経営改善を図り、資金繰りを維持していくかを一緒に考えています。外部からの視点でアドバイスを行い、喜んでいただけたときは、多少でも力になれたのかなと嬉しく思います。</p>
          <img src="<?php echo $path; ?>assets/img/people/people04/pic_01.png" alt="現在の仕事" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>協会の魅力</span>「仕事に替わりはいても、ママに替わりはいない」という言葉</h2>
        <p>二人目を出産後復帰したあと、夫が単身赴任でした。そのため、平日子供のことは基本私が行っており、保育園の呼び出しなどで急遽帰ることも頻繁にありました。そんなとき、「仕事に替わりはいても、ママに替わりはいないよ」と、課の人があたたかくフォローしてくれました。その支えがなければ、挫けていたと思います。<br>
          子育てしながら働くことに理解のある人が多く、仕事と育児を両立させやすい環境だと感じます。土日祝もカレンダー通り休めるので、正社員でも子供の成長をしっかり楽しむことができます。</p>
          <img src="<?php echo $path; ?>assets/img/people/people04/pic_02.png" alt="協会の魅力" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>今後の目標</span>いきいきしたワーキングマザーの、前例になりたい</h2>
        <p>ワーキングマザーとして、これからも働き続けたいと思っています。自分のように、子育てしながら働く存在がいることで、一層女性が働きやすいように規定が変わり、環境が改善されてきました。若い人たちがあとに続くことができるように、多少なりとも貢献できたらいいなと思います。<br>
          協会の人たちに支えられた経験がたくさんあるので、自分も同じ立場の人を、進んで支えられる人でありたいです。</p>
      </div>

      <div class="p-text-box">
        <h3 class="c-text--h3 --peopel">ある1日のスケジュール</h3>
        <div class="p-people--schedule">
          <dl>
            <div>
              <dt> 9:30</dt>
              <dd>出勤</dd>
            </div>
            <div>
              <dt>10:10</dt>
              <dd>スケジュール、調査書確認</dd>
            </div>
            <div>
              <dt>10:45</dt>
              <dd>稟議書作成<br>不足書類や不明点を<br>金融機関へ連絡</dd>
            </div>
            <div>
              <dt>12:00</dt>
              <dd>昼食</dd>
            </div>
            <div>
              <dt>13:00</dt>
              <dd>事前相談への回答や<br>保証審査</dd>
            </div>
            <div>
              <dt>14:00</dt>
              <dd>担当先企業の<br>バンクミーティング</dd>
            </div>
            <div>
              <dt>16:00</dt>
              <dd>帰店し、報告書作成</dd>
            </div>
            <div>
              <dt>16:30</dt>
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
            <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="N.N." width="659" height="765">
            <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
          </figure>
          <h2>N.N.<span><em>1年目</em>松本営業部業務第1課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people02/" class="p-people--intro--div intro_02 intro even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="T.H." width="662" height="761">
            <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
          </figure>
          <h2>T.H.<span><em>2年目</em>松本営業部業務第2課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people03/" class="p-people--intro--div intro_03 intro">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="A.U." width="659" height="764">
            <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
          </figure>
          <h2>A.U.<span><em>8年目</em>総務部企画情報課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people05/" class="p-people--intro--div intro_05 intro even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people05A.png" alt="T.I." width="659" height="764">
            <figcaption>さりげない<br>気配りで<br>誰からも頼られる<br>ベテラン職員</figcaption>
          </figure>
          <h2>T.I.<span><em>16年目</em>業務統括部業務課</span></h2>
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