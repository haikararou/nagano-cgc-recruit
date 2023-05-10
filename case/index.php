<?php
$title_2nd = '支援ストーリー';
// $title_3rd = '';
$directory_2nd = 'case';
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

<body class="l-body" id="case">
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
    <h1 class="c-text--h1"><span>CASE</span>支援ストーリー</h1>
  </div>
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>CASE</span>支援ストーリー</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01" class="a-effect">創業者支援</a></li>
            <li><a href="#anchor--02" class="a-effect">経営改善支援</a></li>
            <li><a href="#anchor--03" class="a-effect">事業継承支援</a></li>
            <li><a href="#anchor--04" class="a-effect">課題解決支援</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="l-wrapper__container l-wrapper--right p-case">
      <div class="p-text-box" id="anchor--01">
        <h2 class="c-text--h2">創業者支援</h2>
        <div class="p-text-box--bluBox" id="case01">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 01</span>販売方法に悩む<br>ケーキ屋さんの広告宣伝をサポート</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_01.png" alt="" width="266" height="456"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">個人経営のケーキ屋さん</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">創業して日が浅い個人経営のケーキ屋さん。優れた腕前を持っていましたが、コロナ渦で集客がうまくいかなくなり、新たな顧客の開拓方法や広告宣伝方法に悩んでいました。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>そこで、新たな宣伝手法・販売経路をつくるために全面支援。首都圏のサテライトショップへの出店指導や、それに向けた商品開発、専門家によるSNS活用指導などを実施しました。さらに、非対面販売に取り組むため「自動販売機」を導入。そのための資金について<a href="/service/system/" target="_blank">保証支援</a>を行いました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4">結果</h2>
                <p>その結果、サテライトショップへの出店が実現。SNSの投稿見直しによって、問い合わせも増加しました。新たな販売経路として導入した自動販売機の評判も良く、売上が安定するようになりました。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-text-box" id="anchor--02">
        <h2 class="c-text--h2">経営改善支援</h2>
        <div class="p-text-box--bluBox" id="case02">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 02</span>日々の資金繰りに苦しむ飲食店を<br>関係機関と連携してサポート</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_02.png" alt="" width="394" height="447"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">個性派メニューの欧風料理店</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">お店の売りは、珍しいメニューと豊富なワイン。根強いファンがいる一方で新規客が少なく、コロナ禍での外出制限などもあって資金不足に苦労されていました。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>取引金融機関・飲食店を得意とするコンサルタントと連携して対策を検討。対策を盛り込んだ計画書を作成しました。また、新規客を呼び込むための新メニューを開発。それにあたり金融機関は、必要な調理設備を導入するべく「モノづくり補助金」の申請を支援しました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4">結果</h2>
                <p>経営計画に沿って新メニューの開発などに取り組んだ結果、新規顧客が増加しました。その過程で、社内では以前より前向きに意見交換ができるようになり、雰囲気がとても明るくなりました。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-text-box" id="anchor--03">
        <h2 class="c-text--h2">事業継承支援</h2>
        <div class="p-text-box--bluBox" id="case03">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 03</span>高齢となった社長さんの<br>事業承継をサポート</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_03.png" alt="" width="317" height="466"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">地域密着型の眼鏡・補聴器店</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">地域内で高い知名度があり、耳鼻科医院からの信頼も厚いお店。しかし、固定客の高齢化やコロナ渦での受診控えもあり、近年の売上は減少傾向でした。また、社長さんが高齢のため、事業を息子さんに継がせる準備が必要でした。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>当協会と提携している経営診断の専門家「中小企業診断士」を派遣し、長く事業を続けていくために取り組まなければならない課題の洗い出しを行いました。また、営業活動の取り組み方等についてアドバイスを受けました。事業を引き継ぐことについても、その道の専門家をお招きし、指導を受けながら息子さんと一緒に事業承継計画の策定に取り組みました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2  class="c-text--h4">結果</h2>
                <p>中小企業診断士の視点が入ったことで、取り組むべき課題と優先順位が明確に。経営に対する社長さんのモチベーションが大きくアップしました。また、社長さんと息子さんが本音で語り合い、目指していく将来像の目線を合わせることができました。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-text-box" id="anchor--04">
        <h2 class="c-text--h2">課題解決支援</h2>
        <div class="p-text-box--bluBox" id="case04">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 04</span>就業規則の見直しをサポート</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_07.png" alt="" width="302" height="451"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">老舗の製造業者</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">社内で発生したトラブルにより退職者が続発。社長さんは再発を防止するために就業規則の見直しを考えていましたが、具体的にどうすべきか悩んでいました。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>当協会が提携している労務の専門家「社会保険労務士」を派遣し、見直しすべき点を整理。従業員が働きやすい職場環境を整備するためのポイントや、将来的に改正が必要な規則や対応方法等について具体的なアドバイスを受けました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2  class="c-text--h4">結果</h2>
                <p>就業規則は会社・従業員それぞれを守るために必要であり、整備していくことの重要性を社長さんが再認識されました。優秀な従業員を確保するために必要な労働環境整備について理解が深まったことで、採用方法の見直しにもつながりました。</p>
              </div>
            </div>
          </div>
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
</body>
</html>