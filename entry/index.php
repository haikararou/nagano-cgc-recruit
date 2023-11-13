<?php
$title_2nd = 'エントリー';
// $title_3rd = '';
$directory_2nd = 'entry';
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

<body class="l-body" id="guideline">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header_test.php");
}
?>

<main class="l-main">
  <section class="l-wrapper__outer l-wrapper2">
    <h1 class="c-text--h1">エントリー</h1>
    <section class="l-wrapper__container l-wrapper3">
      <div class="p-text-box">
        <h2 class="c-text--h2 -L">新卒採用</h2>
        <div class="btn-entry"><a href="https://job.mynavi.jp/24/pc/search/corp94407/outline.html" target="_blank"><span>エントリーはこちら</span></a></div>
        </div>
      </div>
      <div class="p-text-box">
        <h2 class="c-text--h2 -L">中途採用</h2>
        <div class="btn-entry"><a href="#" target="_blank"><span>エントリーはこちら</span></a></div>
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
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/footer_test.php");
}
?>
</body>
</html>