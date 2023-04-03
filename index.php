<?php
// $title_2nd = '';
// $title_3rd = '';
// $directory_2nd = '';
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

<body class="l-body">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header.php");
}
?>

<main class="l-main">

誰かの一歩を、
支える人になる

明日を拓く、長野の中小企業を
支える人になりませんか。

募集要項を確認する

エントリーはこちら



ABOUT US
「公的な保証人」として、
長野県の中小企業を
支えています

信用保証協会は、法律に基づいて設立された公的機関です。協会の立ち位置やお客様にとっての存在意義について、ご説明します。

もっと見る



WORKS
仕事を知る

経営者や創業者のお客様が抱える課題と向き合い、最適な解決策を一緒に考えます。信用保証を通じて、事業の発展に貢献します。

もっと見る



PEOPLE
人を知る

職員の性格は十人十色、仕事内容も多種多様。それぞれの特性を活かしながら、日々お客様と向き合っている職員を紹介します。


<section class="p-people--intro">
          <a href="./people01/" class="p-people--intro--div intro_01">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people01A.png" alt="中島 菜々子">
              <figcaption>明朗快活で<br>場を明るくする<br>期待の新人職員</figcaption>
            </figure>
            <h2>中島 菜々子<span>1年目 松本営業部業務第1課</span></h2>
          </a>
          <a href="./people02/" class="p-people--intro--div intro_02">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people02A.png" alt="本田 朋樹">
              <figcaption>課題を<br>本質から解決する<br>気鋭の若手職員</figcaption>
            </figure>
            <h2>本田 朋樹<span>2年目 松本営業部業務第2課</span></h2>
          </a>
          <a href="./people03/" class="p-people--intro--div intro_03">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people03A.png" alt="浦野 章博">
              <figcaption>相手の話に<br>しっかり寄り添う<br>気さくな<br>広報担当職員</figcaption>
            </figure>
            <h2>浦野 章博<span>8年目 総務部企画情報課</span></h2>
          </a>
          <a href="./people04/" class="p-people--intro--div intro_04">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people04A.png" alt="一ノ瀬 美波">
              <figcaption>誠実に<br>お客様と向き合う<br>優しい<br>ワーキングママ</figcaption>
            </figure>
            <h2>一ノ瀬 美波<span>14年目 本店営業部業務第2課</span></h2>
          </a>
          <a href="./people05/" class="p-people--intro--div intro_05">
            <figure>
              <img src="<?php echo $path; ?>assets/img/people/people05A.png" alt="石坂 友弥">
              <figcaption>さりげない<br>気配りで<br>誰からも頼られる<br>ベテラン社員</figcaption>
            </figure>
            <h2>石坂 友弥<span>16年目 業務統括部業務課</span></h2>
          </a>
        </section>å



長野県信用保証協会職員
座談会

それぞれの色を持った職員が、年齢、性別、キャリアの垣根を超えて、
協会で働く日々について語り合いました！

もっと見る



CASE
支援事例

長野県の約半数の中小企業を支援しています。
創業、経営改善、事業再生など、事業の様々な場面で最適なサポートをいたします。

もっと見る


創業支援
個人経営の
ケーキ店

支援事例
コロナ渦で、集客が難しくなってしまったお客様。新たな宣伝手法・販売経路をつくることで、安定した売上を生むことに成功しました。




  <section class="l-wrapper">
    <div>
      <figure>
        <img src="" art="">
      </figure>
      <div>
        <h2><span>ENVIRONMENT</span>働く環境</h2>
        <p>充実した福利厚生や、職員同士助け合う空気。<br>協会には、安心して働ける「支え合い」の地盤があります。</p>
        <a href=""><span>もっと見る</span></a>
      </div>
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
</body>
</html>