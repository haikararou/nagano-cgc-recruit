<?php
$title_2nd = '仕事を知る';
// $title_3rd = '';
$directory_2nd = 'works';
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

<body class="l-body" id="works">
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
    <h1 class="c-text--h1"><span>WORKS</span>仕事を知る</h1>
    <img src="<?php echo $path; ?>assets/img/works/main.png" alt="仕事を知る" width="2176" height="938">
  </div>
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>WORKS</span>仕事を知る</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01" class="a-effect">営業店</a></li>
            <li><a href="#anchor--02" class="a-effect">企業支援部</a></li>
            <li><a href="#anchor--03" class="a-effect">業務統括部</a></li>
            <li><a href="#anchor--04" class="a-effect">総務部</a></li>
            <li><a href="#anchor--05" class="a-effect">コンプライアンス統括室</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="l-wrapper__container l-wrapper--right p-works">
      <div class="p-text-box">
        <p>協会には８つの営業店、３つの部、１室があり、各部署がどんな仕事をしているのかを、詳しくご紹介します。</p>
      </div>
      <div class="p-text-box" id="anchor--01">
        <h2 class="c-text--h2">営業店</h2>
        <p>実際にお客様と対話し、課題の解決策を一緒に考える機会が多い部署です。保証相談を受け、現状分析やヒアリングから審査を行う「保証審査業務」、保証をご利用いただいている中小企業の経営・再生支援、創業者のフォローアップを行う「経営支援」、代位弁済（※）後の債務に係る管理や回収といった、お客様の債務解決に関わる「管理回収業務」等を行います。<br>
          ※信用保証協会が中小企業に代わって金融機関へ借入金を返済すること</p>
      </div>
      <div class="p-text-box" id="anchor--02">
        <h2 class="c-text--h2">企業支援部</h2>
        <h3 class="c-text--h3">企業支援課</h3>
        <p>信用保証制度の改正・周知や各支援事業の統括といった、業務全般に関わる企画、調整及び推進を行います。さらに、地域全体の経営改善や再生スキルの向上を目的とした「信州中小企業ネットワーク会議」の事務局運営も担っています。お客様の意見を聞き、制度創設等業務に反映させる部署です。</p>
        <h3 class="c-text--h3">審査課</h3>
        <p>営業店で行う「保証審査業務」と「管理回収業務」を統括する部署です。保証審査に関する相談業務、求償権（※）の管理・回収の統括や指導を行っています。実際に業務を行う営業店に正確な情報を共有することが重要な部署です。<br>
          ※他人のための弁済をした者が、他人に対してその返還または弁済を求めること</p>
      </div>
      <div class="p-text-box" id="anchor--03">
        <h2 class="c-text--h2">業務統括部</h2>
        <h3 class="c-text--h3">信用保険課</h3>
        <p>代位弁済の手続きを統括する部署です。制度の根幹を支える部署であり、協会が在る意義を実感しやすい部署です。</p>
        <h3 class="c-text--h3">業務課</h3>
        <p>財務データの入力、保証稟議書の管理、全国信用保証協会連合会等への定期報告といった「保証事務」と、法的措置、債権管理等に関わる「管理事務」を行います。営業店の職員を事務的な側面から支えることで、業務を円滑化する役割を担っています。</p>
      </div>
      <div class="p-text-box" id="anchor--04">
        <h2 class="c-text--h2">総務部</h2>
        <h3 class="c-text--h3">総務課</h3>
        <p>協会の「人」と「お金」を適切に管理することで、協会を裏から支える部署です。<br>
          人事や給与等、働く職員に関する業務を担う「総務」と、予算や保証料など、金銭面の管理を担う「経理」の仕事があります。</p>
        <h3 class="c-text--h3">企画情報課</h3>
        <p>経営企画に関する業務全般を行います。具体的な業務には、経営計画の策定、Webサイト管理等のシステム運用、お客様に協会の存在を知ってもらうための広報活動などがあります。</p>
      </div>
      <div class="p-text-box" id="anchor--05">
        <h2 class="c-text--h2">コンプライアンス統括室</h2>
        <p>内部監査やコンプライアンス管理、個人情報保護など、コンプライアンスに関わる業務を統括します。</p>
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