<?php
$title_2nd = '働く環境';
// $title_3rd = '';
$directory_2nd = 'environment';
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

<body class="l-body" id="environment">
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
    <h1 class="c-text--h1"><span>ENVIRONMENT</span>働く環境</h1>
    <img src="<?php echo $path; ?>assets/img/environment/main.png" alt="働く環境" width="2176" height="920">
  </div>
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>ENVIRONMENT</span>働く環境</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01" class="a-effect">福利厚生</a></li>
            <li><a href="#anchor--02" class="a-effect">研修制度</a></li>
            <li><a href="#anchor--03" class="a-effect">協会の様子</a></li>
          </ul>
        </nav>
      </div>
    </section>
    <section class="l-wrapper__container l-wrapper--right p-environment">
      <div class="p-text-box" id="anchor--01">
        <h2 class="c-text--h2">福利厚生</h2>
        <p>職員のワークライフバランスを実現するため、さまざまな制度を用意しています。</p>
        <h3 class="c-text--h3">休日・休暇</h3>
        <p>完全週休2日制、祝祭日、年末年始（12月30日～1月3日）<br>年次有給休暇、特別有給休暇（慶弔休暇など）、リフレッシュ休暇、 看護休暇、介護休暇、ボランティア休暇 等</p>
        <h3 class="c-text--h3">子育てサポート</h3>
        <p>出産休暇（産前産後休暇）、育児休業、育児短時間勤務制度</p>
        <h3 class="c-text--h3">福利厚生・社内制度</h3>
        <p>各種社会保険（厚生年金、厚生年金基金、組合健康保険、雇用保険、労災保険）<br>住宅資金・厚生資金貸付制度、医療費補助、各種サークル活動 等<br>職員宿舎（家賃補助）</p>
      </div>
      <div class="p-text-box" id="anchor--02">
        <h2 class="c-text--h2">研修制度</h2>
        <p>さまざまな研修制度により、一人ひとりのスキルアップをサポートします。</p>
        <table class="p-table">
          <thead class="p-table__head">
            <tr>
              <th class="p-table--bg_non"></th>
              <th>内部研修</th>
              <th>外部研修</th>
              <th>通信教育</th>
            </tr>
          </thead>
          <tbody class="p-table__body">
            <tr>
              <th>１年目</th>
              <td>一般教養コース、<br>業務入門コース</td>
              <td>新人職員研修、<br>ビジネスマナー<br>電話対応、<br>決算書の見方</td>
              <td>決算書の分析的<br>見方・読み方コース、<br>はじめて学ぶ簿記コース</td>
            </tr>
            <tr>
              <th>２年目</th>
              <td>基本業務コース</td>
              <td>初級職員研修、<br>若手社員<br>ブラッシュアップ</td>
              <td>融資実務基礎コース、<br>登記簿の<br>見方・調べ方コース</td>
            </tr>
            <tr>
              <th>４年目</th>
              <td rowspan="2">能力開発コース、<br>企業審査入門コース 他</td>
              <td>基本法令コース、<br>信用調査コース 等</td>
              <td>民法・社法基礎講座</td>
            </tr>
            <tr>
              <th>４年目以降</th>
              <td>OJTトレーナー研修、<br>CS研修（百貨店研修）、<br>外部団体等<br>派遣研修・階層別研修</td>
              <td>指定の講座から<br>選択して受講 等</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="p-text-box" id="anchor--03">
        <h2 class="c-text--h2">協会の様子</h2>
        <p>職員にアンケートを実施。実際の雰囲気・仕事のやりがい・働く人の印象について、現場の声をまとめました。</p>
        <div class="p-environment--state p-environment--stateA">
          <figure>
            <figcaption>雰囲気</figcaption>
            <img src="<?php echo $path; ?>assets/img/environment/voice_01.png" alt="雰囲気" width="862" height="776">
          </figure>
          <ul>
            <li><span>年次関係なく、個人としての意見が尊重されます</span></li>
            <li><span>採用の段階から今も変わらず、雰囲気がいいと感じます</span></li>
            <li><span>どんなことも、ひとまず受け入れてくれます</span></li>
            <li><span>職場内外のことを、気軽に相談しあえる空気です</span></li>
          </ul>
        </div>
        <div class="p-environment--state p-environment--stateB">
          <figure>
            <figcaption>職員の印象</figcaption>
            <img src="<?php echo $path; ?>assets/img/environment/voice_02.png" alt="職員の印象" width="862" height="776">
          </figure>
          <ul>
            <li><span>困ったことがあると、周りの先輩方がよく助けてくれます</span></li>
            <li><span>人の話をよく聞く、柔軟性のある人が多いと思います</span></li>
            <li><span>真面目で、内にやる気が満ちあふれている人がたくさんいます</span></li>
            <li><span>個性豊かな人が多いので、いろいろな考え方を吸収できます</span></li>
          </ul>
        </div>
        <div class="p-environment--state p-environment--stateC">
          <figure>
            <figcaption>仕事のやりがい</figcaption>
            <img src="<?php echo $path; ?>assets/img/environment/voice_03.png" alt="仕事のやりがい" width="862" height="776">
          </figure>
          <ul>
            <li><span>経営支援の成果が出て、お客様から感謝されたとき</span></li>
            <li><span>担当した創業先が繁盛しているのを見ると、この仕事をしていてよかったと感じます</span></li>
            <li><span>お客様へ最適な提案ができるとうれしいです</span></li>
            <li><span>開業支援をするときは、どんなお店ができるのかわくわくします</span></li>
          </ul>
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