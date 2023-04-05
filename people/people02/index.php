<?php
$title_2nd = '人を知る';
$title_3rd = '中本田 朋樹';
$directory_2nd = 'people';
$directory_3rd = 'people02';
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

<body class="l-body people02" id="people">
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
      <h1 class="c-text--h1 --peopel"><span>職員紹介</span>答えのない問いの最善策を、<br>導き出すやりがい。</h1>
      <h2 class="c-text--h2 --peopel">本田 朋樹<span> （2年目 松本営業部業務第2課）</span></h2>
    </div>
  </section>

  <div class="l-hero--people">
    <figure>
      <img src="<?php echo $path; ?>assets/img/people/people02/main.png" alt="本田 朋樹" width="993" height="1386">
      <figcaption>
        課題を<br>
        本質から解決する<br>
        気鋭の若手職員
      </figcaption>
    </figure>
  </div>

  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
    </section>
    <section class="l-wrapper__container l-wrapper--right --peopel p-people">

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>現在の仕事</span>若手の「やってみたい」を尊重してくれる上司</h2>
        <p>協会は、「困ったときはお互い様」の気持ちが強い組織だと感じます。ミスをしてしまったときも、嫌な顔一つせず優しくサポートしてくれる方ばかりです。課内で不在のメンバーがいるときは、できるだけ仕事を溜めないよう積極的に助け合う風潮があります。<br>
          私は、どんなことも「まずやってみないとわからない」と考える性格なのですが、協会の人たちは、若手職員の考えや行動を尊重してくれます。上司からのフォローも手厚いので、様々なことを恐れず、チャレンジしやすい環境だと思いますね。</p>
          <img src="<?php echo $path; ?>assets/img/people/peo0ple02/pic_01.png" alt="現在の仕事" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>協会の魅力</span>お客様にとってのメリットを、一番に考えて仕事ができる</h2>
        <p>協会の魅力は、お客様にとってのメリットを一番に考えられることです。経営支援などで関わった企業が実際に活躍されているのを見ると、やりがいを感じます。経営支援に赴くことは、今の楽しみのひとつです。<br>
          でも、自分がお客様を支えているというよりは、お客様に支えられていると感じることが多いですね。お話するなかで、自分が勉強させていただくこともたくさんあります。「一方的に支えている」というより、「支え合っている」という感覚に近いです。</p>
          <img src="<?php echo $path; ?>assets/img/people/people02/pic_02.png" alt="協会の魅力" width="1663" height="1114">
      </div>

      <div class="p-text-box">
        <h2 class="c-text--h2 --peopel2"><span>今後の目標</span>尊敬する先輩のように、誰からも信頼される人になる</h2>
        <p>入協2 年目になり、少しずつ担当を持たせていただけるようになってきました。今後は、外部との折衝や内部の事務処理等、担当者としての役割を、正確にこなせるようになっていきたいです。それを継続することで、内部からも外部からも、信頼される担当者になりたいですね。そしてゆくゆくは、物事の本質を即座に理解し、解決策を提示できるような存在を目指したいです。</p>
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
              <dt> 8:30</dt>
              <dd>ラック出し<br>朝郵便物開封、仕分け</dd>
            </div>
            <div>
              <dt> 9:30</dt>
              <dd>書庫から企業袋出し</dd>
            </div>
            <div>
              <dt>12:00</dt>
              <dd>保証業務</dd>
            </div>
            <div>
              <dt>12:00</dt>
              <dd>保証業務</dd>
            </div>
            <div>
              <dt>13:30</dt>
              <dd>保証業務</dd>
            </div>
            <div>
              <dt>16:30</dt>
              <dd>企業袋片付け</dd>
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
        <a href="<?php echo $path; ?>/people/people01/" class="p-people--intro--div intro_01">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="中島 菜々子" width="659" height="765">
            <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
          </figure>
          <h2>中島 菜々子<span>1年目 松本営業部業務第1課</span></h2>
        </a>
        <a href="<?php echo $path; ?>/people/people03/" class="p-people--intro--div intro_03 even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="浦野 章博" width="659" height="764">
            <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
          </figure>
          <h2>浦野 章博<span>8年目 総務部企画情報課</span></h2>
        </a>
        <a href="<?php echo $path; ?>/people/people04/" class="p-people--intro--div intro_04">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="一ノ瀬 美波" width="659" height="765">
            <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
          </figure>
          <h2>一ノ瀬 美波<span>14年目 本店営業部業務第2課</span></h2>
        </a>
        <a href="<?php echo $path; ?>/people/people05/" class="p-people--intro--div intro_05 even">
          <figure>
            <img src="<?php echo $path; ?>assets/img/people/people05A.png" alt="石坂 友弥" width="659" height="764">
            <figcaption>さりげない<br>気配りで<br>誰からも頼られる<br>ベテラン社員</figcaption>
          </figure>
          <h2>石坂 友弥<span>16年目 業務統括部業務課</span></h2>
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

<script>
$(function() {
  $('.intro_03').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_01 figure').addClass('on');
    }else{
      $('.intro_01 figure').removeClass('on');
    }
  });
  // $('.intro_03').on('inview', function(event, isInView){
  //   if (isInView) {
  //     $('.intro_02 figure').addClass('on');
  //   }else{
  //     $('.intro_02 figure').removeClass('on');
  //   }
  // });
  $('.intro_04').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_03 figure').addClass('on');
    }else{
      $('.intro_03 figure').removeClass('on');
    }
  });
  $('.intro_05').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_04 figure').addClass('on');
    }else{
      $('.intro_04 figure').removeClass('on');
    }
  });
  $('.intro_06').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_05 figure').addClass('on');
    }else{
      $('.intro_05 figure').removeClass('on');
    }
  });
});
</script>

</body>
</html>