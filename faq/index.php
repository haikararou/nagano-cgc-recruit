<?php
$title_2nd = 'よくある質問';
// $title_3rd = '';
$directory_2nd = 'faq';
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

<body class="l-body" id="faq">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header.php");
}
?>

<main class="l-main">
  <section class="l-wrapper__outer l-wrapper2">
    <h1 class="c-text--h1">よくある質問</h1>
    <section class="l-wrapper__container l-wrapper3">
      <div class="p-text-box">
        <div class="p-faq">
          <dl>
            <div>
              <dt><span>勤務地はどこになりますか？</span></dt>
              <dd><span>本店（長野県長野市）及び松本営業部（松本市）、上田支店（上田市）、飯田支店（飯田市）、諏訪支店（諏訪市）、佐久支店（佐久市）、伊那店（伊那市）、中野支店（中野市）のいずれかになります。</span></dd>
            </div>
            <div>
              <dt><span>支店への通勤は可能ですか？社宅はありますか？</span></dt>
              <dd><span>居住地によっては各支店への通勤が可能です。また、一部の支店では新幹線通勤が可能です。通勤ができない支店に勤務する場合は、当協会が借り上げた職員宿舎を利用することができます。また、長野市には当会所有の宿舎があり、利用できます。</span></dd>
            </div>
            <div>
              <dt><span>配属はどのように決まりますか？人事異動はありますか？</span></dt>
              <dd><span>年に１度、自己申告と面談があります。その結果を踏まえて適性・能力等を考慮しながら配属先が決まります。また、その期間は概ね２～３年程度が一般的です。</span></dd>
            </div>
            <div>
              <dt><span>新入職員のサポート体制にはどんなものがありますか？</span></dt>
              <dd><span>内部研修及び外部研修の新入社員研修を実施しているほか、専任担当者（チューター）を決めてOJTを実施しています。専任担当者に限らず、職場全体で新入職員のフォローを行っていますのでご安心ください。</span></dd>
            </div>
            <div>
              <dt><span>研修制度や資格取得支援はありますか？</span></dt>
              <dd><span>入協後、新入職員研修をうけていただき、その後は、業務内容や、階層に応じた研修を受講し、知識習得や能力の向上に努めていただきます。また、「中小企業診断士養成課程」や「資格取得褒賞制度」等により業務に有益な資格取得をサポートしています。</span></dd>
            </div>
            <div>
              <dt><span>休日や休暇はどのくらいありますか？</span></dt>
              <dd><span>土日祝日が休みの完全週休２日制です。また年末年始（12月30日～１月３日）も休みとなります。有給休暇は年20日間付与されます。その他にも特別休暇として、年６日間のリフレッシュ休暇が付与されます。</span></dd>
            </div>
            <div>
              <dt><span>育児支援の制度はありますか？</span></dt>
              <dd><span>産前８週間、産後８週間は特別有給休暇を取得することができます。また、育児休業期間は子供が満３歳に達するまでとなっており、男性を含めこの制度を活用する職員が増えています。</span></dd>
            </div>
            <div>
              <dt><span>入協する前に取得しておいた方が良い資格等はありますか？</span></dt>
              <dd><span>専門性の高い業務であり、入協後、研修やOJTで正確な知識を取得できるよう研修体制も整備しています。そのため、入協前に取得しておくべき資格等はありません。学生時代にしかできない経験をたくさんしていただき、入協後の業務に役立てていただければと思います。</span></dd>
            </div>
          </dl>
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