<?php
$title_2nd = '長野県信用保証協会とは';
// $title_3rd = '';
$directory_2nd = 'about';
// $directory_3rd = '';
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

<body class="l-body" id="about">
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
    <h1 class="c-text--h1"><span>ABOUT US</span>長野県信用保証協会とは</h1>
    <img src="<?php echo $path; ?>assets/img/about/main.png" alt="">
  </div>
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>ABOUT US</span>長野県信用保証協会とは</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01">私たちの役割</a></li>
            <li><a href="#anchor--02">基本理念</a></li>
            <li><a href="#anchor--03">数字で見る長野信用保証協会</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="l-wrapper__container l-wrapper--right p-about">
      <div class="p-text-box" id="anchor--01">
        <h2 class="c-text--h2">私たちの役割</h2>
        <p>信用保証協会は、信用保証協会法に基づいて設立された公的機関です。<br>
          中小企業・小規模事業者のお客様が金融機関から事業資金を借入する際に「公的な保証人」となり、資金調達をサポートしています。万が一返済できなかった場合には、金融機関に立替払い（代位弁済）することを約束します。中小企業の事業資金について「公的保証人」となれるのは、信用保証協会だけ。協会は全国に51（47都道府県＋横浜市、川崎市、岐阜市、名古屋市）あり、長野県信用保証協会はそのひとつです。</p>
        <div class="p-text-box--bluBox">
          <h2 class="p-text-box--bluBox--h2">信用保証制度のしくみ</h2>
          <div class="p-text-box--bluBox--inner">
            <img src="<?php echo $path; ?>assets/img/about/fig.png" alt="">
          </div>
        </div>
        <div class="p-about--merit">
          <h2>中小企業者が信用保証協会を利用するメリットって？</h2>
          <ul>
            <li>金融機関から融資が受けやすくなる</li>
            <li>地方公共団体の低金利な融資制度を利用できる</li>
            <li>無担保、第三者保証人不要で融資が受けられる</li>
            <li>各種支援サービスを無料で受けられる</li>
          </ul>
        </div>
      </div>
      <div class="p-text-box" id="anchor--02">
        <h2 class="c-text--h2">基本理念</h2>
        <p class="p-about--philosophy">私たち長野県信用保証協会は信用保証により<br>明日を拓く中小企業を力強くサポートし<br>長野県の洋々たる発展の一翼を担う</p>
      </div>
      <div class="p-text-box" id="anchor--03">
        <h2 class="c-text--h2">数字で見る長野県信用保証協会</h2>
        <section class="p-about--numbers--outer">
          <div class="p-about--numbers numbers01">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>長野県内の<br>中小企業者のご利用率</h2>
                <div class="number">50.3<span class="unit">%</span><span class="as_of">※2022年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers01.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers02">
            <div class="p-about--numbers--flex">
              <div class="--numbers02">
                <h2>保証債務残高</h2>
                <div class="--left">
                  <div class="number">78,941<span class="unit">件</span></div><br>
                  <div class="number">7,481<span class="unit">億円</span><span class="as_of">※2022年3月時点</span></div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers02.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers03">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>職員数</h2>
                <div class="number">138<span class="unit">名</span><span class="as_of">※2022年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers03.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers04">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>年間休日</h2>
                <div class="number">120<span class="unit">日</span><span class="as_of">※2022年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers04.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers05">
            <div class="p-about--numbers--flex">
              <h2>月平均残業時間</h2>
              <div class="number">3.7<span class="unit">時間</span><span class="as_of">※2022年3月時点</span></div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers05.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers06">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>3年以内新卒離職率</h2>
                <div class="number">0<span class="unit">%</span><span class="as_of">※2022年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers06.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers07">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>有給取得率</h2>
                <div class="number">14.3<span class="unit">日</span><span class="as_of">※2022年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers07.png" alt=""></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers08">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>育児休業復職率</h2>
                <div class="number">100<span class="unit">%</span><span class="as_of">※2022年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers08.png" alt=""></figure>
            </div>
          </div>
        </section>
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
</body>
</html>