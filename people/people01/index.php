<?php
$title_2nd = '人を知る';
$title_3rd = 'N.N.';
$directory_2nd = 'people';
$directory_3rd = 'people01';
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

<body class="l-body people01" id="people">
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
      <h1 class="c-text--h1 --peopel"><span>職員紹介</span>先輩の背中を追いかけて、<br>自分のなりたい姿を目指す</h1>
      <h2 class="c-text--h2 --peopel">N.N.<span> （1年目 松本営業部業務第1課）</span></h2>
    </div>
  </section>

  <div class="l-hero--people">
    <figure>
      <img src="<?php echo $path; ?>assets/img/people/people01/main.png" alt="N.N." width="402" height="665">
      <figcaption>
        明朗快活で<br>
        場を明るくする<br>
        期待の新人職員
      </figcaption>
    </figure>
  </div>

  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
    </section>
    <section class="l-wrapper__container l-wrapper--right --peopel p-people">

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>現在の仕事</span>中小企業を、後方から支える</h2>
        <p>現在は、保証稟議書の作成などを行う保証業務や、郵便物開封、公用車管理といった庶務を中心に行っています。先輩方と一緒に、お客様の経営支援に赴くこともあります。一年目なので、業務の基礎的なことを教わっている最中です。<br>
          協会の仕事は、中小企業のお客様を後方から支えることだと思っています。「公的な保証人」という、金融機関とは別の立場から企業支援ができることに、魅力を感じています。</p>
          <img src="<?php echo $path; ?>assets/img/people/people01/pic_01.png" alt="現在の仕事" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>協会の魅力</span>お客様にとってのメリットを、一番に考えて仕事ができる</h2>
        <p>協会の魅力は、お客様にとってのメリットを一番に考えられることです。経営支援などで関わった企業が実際に活躍されているのを見ると、やりがいを感じます。経営支援に赴くことは、今の楽しみのひとつです。<br>
          でも、自分がお客様を支えているというよりは、お客様に支えられていると感じることが多いですね。お話するなかで、自分が勉強させていただくこともたくさんあります。「一方的に支えている」というより、「支え合っている」という感覚に近いです。</p>
          <img src="<?php echo $path; ?>assets/img/people/people01/pic_02.png" alt="協会の魅力" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>今後の目標</span>尊敬する先輩のように、誰からも信頼される人になる</h2>
        <p>金融機関の方にも中小企業の方にも信頼される、知識と人柄を身につけることです。目標としている先輩のようになれるよう、日々勉強中です。<br>
          先輩は、業務のなかでわからないことがあったり、失敗したりしてしまったときも、丁寧にフォローしてくれます。業務以外の相談にのっていただくこともあり、普段からよく様子を見て、気にかけてくれているのを感じます。一人ひとりがしっかりと責任を持ち、お互いに助け合う、先輩方の姿をとても尊敬しています。自分もそんな人になりたいです。</p>
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
              <dd>メールの確認等業務準備<br>郵便開封、仕分け</dd>
            </div>
            <div>
              <dt> 9:15</dt>
              <dd>保証審査補助、庶務</dd>
            </div>
            <div>
              <dt>12:00</dt>
              <dd>昼食</dd>
            </div>
            <div>
              <dt>13:00</dt>
              <dd>保証稟議書の作成</dd>
            </div>
            <div>
              <dt>16:30</dt>
              <dd>資料片付け</dd>
            </div>
            <div>
              <dt>16:50</dt>
              <dd>一日の振り返り</dd>
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
        <a href="<?php echo $path; ?>people/people02/" class="p-people--intro--div intro_02 intro">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="T.H." width="662" height="761">
            <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
          </figure>
          <h2>T.H.<span><em>2年目</em>松本営業部業務第2課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people03/" class="p-people--intro--div intro_03 intro even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="A.U." width="659" height="764">
            <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
          </figure>
          <h2>A.U.<span><em>8年目</em>総務部企画情報課</span></h2>
        </a>
        <a href="<?php echo $path; ?>people/people04/" class="p-people--intro--div intro_04 intro">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="M.I." width="659" height="765">
            <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
          </figure>
          <h2>M.I.<span><em>14年目</em>本店営業部業務第2課</span></h2>
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