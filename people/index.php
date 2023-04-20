<?php
$title_2nd = '人を知る';
// $title_3rd = '';
$directory_2nd = 'people';
// $directory_3rd = '';
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

<body class="l-body" id="people">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header.php");
}
?>

<main class="l-main">
  <div class="l-hero">
    <h1 class="c-text--h1"><span>PEOPLE</span>人を知る</h1>
    <img src="<?php echo $path; ?>assets/img/people/main.png" alt="人を知る" width="2176" height="938">
  </div>
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>PEOPLE</span>人を知る</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01" class="a-effect">職員紹介</a></li>
            <li><a href="#anchor--02" class="a-effect">座談会</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="l-wrapper__container l-wrapper--right p-people">
      <div class="p-text-box" id="anchor--01">
        <h2 class="c-text--h2">職員紹介</h2>
        <p>職員の性格は十人十色、仕事内容も多種多様。それぞれの特性を活かしながら、日々お客様と向き合っている職員を紹介します。</p>
        <section class="p-people--intro">
          <a href="./people01/" class="p-people--intro--div intro_01 intro">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="中島 菜々子" width="659" height="765">
              <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
            </figure>
            <h2>中島 菜々子<span><em>1年目</em>松本営業部業務第1課</span></h2>
          </a>
          <a href="./people02/" class="p-people--intro--div intro_02 intro even">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="本田 朋樹" width="662" height="761">
              <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
            </figure>
            <h2>本田 朋樹<span><em>2年目</em>松本営業部業務第2課</span></h2>
          </a>
          <a href="./people03/" class="p-people--intro--div intro_03 intro">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="浦野 章博" width="659" height="764">
              <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
            </figure>
            <h2>浦野 章博<span><em>8年目</em>総務部企画情報課</span></h2>
          </a>
          <a href="./people04/" class="p-people--intro--div intro_04 intro even">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="一ノ瀬 美波" width="659" height="765">
              <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
            </figure>
            <h2>一ノ瀬 美波<span><em>14年目</em>本店営業部業務第2課</span></h2>
          </a>
          <a href="./people05/" class="p-people--intro--div intro_05 intro">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people05A.png" alt="石坂 友弥" width="659" height="764">
              <figcaption>さりげない<br>気配りで<br>誰からも頼られる<br>ベテラン社員</figcaption>
            </figure>
            <h2>石坂 友弥<span><em>16年目</em>業務統括部業務課</span></h2>
          </a>
        </section>
      </div>
      <div class="p-text-box intro_06" id="anchor--02">
        <div class="p-people--bnr">
          <h2 class="p-people--bnr--title"><img src="<?php echo $path; ?>assets/img/people/zadankai_title.svg" alt="長野県信用保証協会職員 座談会" width="312" height="150"></h2>
          <p class="p-people--bnr--text">それぞれの色を持った職員が、年齢、性別、キャリアの垣根を超えて、<br>
            協会で働く日々について語り合いました！</p>
            <a class="c-arrow" href="./zadankai/"><span>もっと見る</span></a>
          <figure class="p-people--bnr--people"><img src="<?php echo $path; ?>assets/img/people/zadankai_people.png" alt="メンバー" width="1712" height="736"></figure>
        </div>
      </div>
    </section>
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