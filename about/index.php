<?php
$title_2nd = '長野県信用保証協会とは';
// $title_3rd = '';
$directory_2nd = 'about';
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
    <img src="<?php echo $path; ?>assets/img/about/main.png" alt="長野県信用保証協会とは" width="2176" height="932">
  </div>
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>ABOUT US</span>長野県信用保証協会とは</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01" class="a-effect">私たちの役割</a></li>
            <li><a href="#anchor--02" class="a-effect">基本理念</a></li>
            <li><a href="#anchor--03" class="a-effect">数字で見る長野信用保証協会</a></li>
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
            <img src="<?php echo $path; ?>assets/img/about/fig.png" alt="信用保証制度のしくみ" width="1508" height="1299">
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
                <div class="item" data-from="00.0" data-to="50.7" data-duration="1500">
                  <div class="number counter">
                    <span class="count">00.0</span><span class="unit">%</span><span class="as_of">※2023年3月時点</span>
                  </div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers01.png" alt="長野県内の中小企業者のご利用率" width="518" height="252"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers02">
            <div class="p-about--numbers--flex">
              <div class="--numbers02">
                <h2>保証債務残高</h2>
                <div class="--left">
                  <div class="item" data-from="68941" data-to="80727" data-duration="1500">
                    <div class="number counter">
                      <span class="count">60941</span><span class="unit">件</span>
                    </div>
                  </div>
                  <div class="item" data-from="6481" data-to="7167" data-duration="1500">
                    <div class="number counter">
                      <span class="count">6481</span><span class="unit">億円</span><span class="as_of">※2023年3月時点</span>
                    </div>
                  </div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers02.png" alt="保証債務残高" width="273" height="271"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers03">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>職員数</h2>
                <div class="item" data-from="38" data-to="138" data-duration="1500">
                  <div class="number counter">
                    <span class="count">38</span><span class="unit">名</span><span class="as_of">※2023年3月時点</span>
                  </div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers03.png" alt="職員数" width="283" height="245"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers04">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>年間休日<span>※有給休暇等を除く</span></h2>
                <div class="item" data-from="60" data-to="120" data-duration="1500">
                  <div class="number counter">
                    <span class="count">60</span><span class="unit">日</span><span class="as_of">※2023年3月時点</span>
                  </div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers04.png" alt="年間休日" width="217" height="171"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers05">
            <div class="p-about--numbers--flex">
              <h2>月平均残業時間</h2>
              <div class="item" data-from="0" data-to="5" data-duration="350">
                <div class="number counter">
                  <span class="count">0</span>.0<span class="unit">時間</span><span class="as_of">※2023年3月時点</span>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers05.png" alt="月平均残業時間" width="195" height="195"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers06">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>3年以内新卒離職率</h2>
                <div class="number"><span class="count-down">0</span><span class="unit">%</span><span class="as_of">※2023年3月時点</span></div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers06.png" alt="3年以内新卒離職率" width="466" height="511"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers07">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>有給平均取得日数</h2>
                <div class="item" data-from="3" data-to="13" data-duration="350">
                  <div class="number counter">
                    <span class="count">3</span>.0<span class="unit">%</span><span class="as_of">※2023年3月時点</span>
                  </div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers07.png" alt="有給平均取得日数" width="228" height="252"></figure>
            </div>
          </div>
          <div class="p-about--numbers numbers08">
            <div class="p-about--numbers--flex">
              <div class="--center">
                <h2>育児休業復職率</h2>
                <div class="item" data-from="50" data-to="100" data-duration="1500">
                  <div class="number counter">
                    <span class="count">50</span><span class="unit">%</span><span class="as_of">※2023年3月時点</span>
                  </div>
                </div>
              </div>
              <figure><img src="<?php echo $path; ?>assets/img/about/numbers08.png" alt="育児休業復職率" width="285" height="303"></figure>
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
<script>
$(function() {
  $('.numbers06').on('inview', function(event, isInView) {
    if (isInView) {
      $(".numbers06 .count-down").each(function(){
        $(this).prop('Counter',30).animate({
              Counter: $(this).text()
          }, {
              duration: 1000,
              easing: 'swing',
              step: function (now) {
                  $(this).text(Math.ceil(now));
              }
          });
      });
    }
  });
});
</script>

<script>
const items = document.querySelectorAll( '.item' );
const root = document.querySelector( '.container' );

const isFloat = ( n ) => {
  return Number( n ) === n && n % 1 !== 0;
}

const getDecimalPointLength =( n ) => {
  return ( String( n ).split( '.' )[1] || '' ).length;
}

const observeAction = ( entries ) => {
  entries.forEach( entry => {
    if ( entry.isIntersecting ) {
      if ( ! entry.target.classList.contains( 'is-visible' ) ) {
        const counterEle = entry.target.querySelector( '.counter .count' );
        const from = parseFloat( entry.target.dataset.from || 0 );
        const to = parseFloat( entry.target.dataset.to || 0 );
        const duration = parseInt( entry.target.dataset.duration ) || 1500;

        if ( !Number.isFinite( from ) || !Number.isFinite( to ) || from > to ) {
          return false;
        }

        const increment = to - from;
        const deciamlPointLength = getDecimalPointLength( increment );
        const startTime = performance.now();

        const countUp = ( timestamp ) => {
          const elapsed = performance.now() - startTime;
          const countValue = ( from + ( ( elapsed / duration ) * increment ) ).toFixed( deciamlPointLength );

          if ( countValue >= to ) {
            counterEle.innerText = to.toLocaleString();
          } else {
            counterEle.innerText = parseFloat( countValue ).toLocaleString();
            requestAnimationFrame( countUp );
          }
        }
        requestAnimationFrame( countUp );

        entry.target.classList.add( 'is-visible' );
      }
    }
  } );
}

const options = {
  root: root,
  threshold: 1,
}

const obsever = new IntersectionObserver( observeAction, options );

items.forEach( target => {
  obsever.observe( target );
} );
</script>

</body>
</html>