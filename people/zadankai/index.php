<?php
$title_2nd = '人を知る';
$title_3rd = '長野県信用保証協会職員 座談会';
$directory_2nd = 'people';
$directory_3rd = 'zadankai';
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

<body class="l-body" id="zadankai">
<?php
$url = $_SERVER["REQUEST_URI"];
if (strstr($url, 'test/')) {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit_test/assets/inc/header.php");
} else {
  include($_SERVER['DOCUMENT_ROOT'] . "/recruit/assets/inc/header.php");
}
?>

<main class="l-main">
  <div class="l-hero--zadankai">
    <h1 class="l-hero--zadankai--title"><img src="<?php echo $path; ?>assets/img/people/zadankai_title.svg" alt="長野県信用保証協会職員 座談会" width="312" height="150"></h1>
    <p class="l-hero--zadankai--text">それぞれの色を持った職員が、年齢、性別、<br class="sp">キャリアの垣根を超えて、<br>協会で働く日々について語り合いました！</p>
    <figure class="l-hero--zadankai--people"><img src="<?php echo $path; ?>assets/img/people/zadankai/main.png" alt="座談会" width="3942" height="1676"></figure>
    <div class="l-hero--zadankai--balloon">
      <div class="l-hero--zadankai--balloon03">A.U.<span>8年目<br>総務部<br>企画情報課</span></div>
      <div class="l-hero--zadankai--balloon01">N.N.<span>1年目<br>松本営業部<br>業務第1課</span></div>
      <div class="l-hero--zadankai--balloon02">T.H.<span>2年目<br>松本営業部<br>業務第2課</span></div>
      <div class="l-hero--zadankai--balloon04">M.I.<span>14年目<br>本店営業部<br>業務第2課</span></div>
      <div class="l-hero--zadankai--balloon05">T.I.<span>16年目<br>業務統括部<br>業務課</span></div>
    </div>
  </div>
  <section class="l-wrapper__outer l-wrapper2">
    <section class="l-wrapper__container l-wrapper3 p-zadankai">
      <div class="p-text-box p-zadankai--member">
        <h2>MEMBER</h2>
        <div class="p-zadankai--member--list">
          <figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.<span>1年目<br>松本営業部業務第1課</span></figcaption></figure>
          <figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.<span>2年目<br>松本営業部業務第2課</span></figcaption></figure>
          <figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.<span>8年目<br>総務部企画情報課</span></figcaption></figure>
          <figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.<span>14年目<br>本店営業部業務第2課</span></figcaption></figure>
          <figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.<span>16年目<br>業務統括部業務課</span></figcaption></figure>
        </div>
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title"><span class="--q-title01">協会を選んだ理由はなんですか？</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>最初はなんとなく、かたいイメージだったんです。でもインターンシップの際、職員の雰囲気が和やかで皆仲がいいのを見て、ここなら馴染めそうだと感じたのが決め手でした。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>私は、金融関連で企業支援に携われる仕事を探していて。業務内容が、自分のしたいことと一番合致していると感じたのが協会でした。説明会を経て、実際にここで働くイメージを持てたことも大きかったです。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>自分もN.N.さんと同じく金融業志望だったのですが、当時、金融業はノルマが厳しいイメージがあったんです。数字に追われてしまったら、本当にお客様のための仕事ができないのではないかと思っていたとき、協会の存在を知りました。「公的な保証人」という立場である協会でなら、お客様第一で支援ができると感じました。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>自分は就職を機に、長野にUターンしました。決して大きくはない組織にもかかわらず、多くのお客様を支えていることに驚くとともに、ここでなら、自分の力を発揮できるのではないかと思いました。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>実は、私は就活が中々うまくいかなくて…悩んでいたとき人づてに、「協会はいい職場だよ」と聞きました。選考を受けてみたら、とんとん拍子に選考が進んで。きっと、自分に合っていたのだと思います。</dd>
          </div>
        </dl>
        <img src="<?php echo $path; ?>assets/img/people/zadankai/pic_01.png" alt="協会を選んだ理由はなんですか？" width="1712" height="1148">
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title --q-title02"><span>お客様を支えていると感じる瞬間は？</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>困っているお客さんの相談にのって、少しでも喜んでもらえたときは、支えになれたかなと感じます。外部の視点から解決策を提案し、サポートすることで、事業再興の支えになれたら嬉しいですね</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>お金を借りるのはとても大きなことなので、お客様にとっての最善は何か、本当によく考えます。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>融資したあと、どのように支援していくかが大事ですね。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>保証協会の仕事は、後方支援。金融機関とは別の立場から、視点を加えることで支援できるのが、協会の意義なのかなと思います。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>支援を通じて、お客様から学ぶことも多いです。自分たちのほうが、お客様に支えられているなあと感じます。</dd>
          </div>
        </dl>
        <img src="<?php echo $path; ?>assets/img/people/zadankai/pic_02.png" alt="お客様を支えていると感じる瞬間は？" width="1712" height="1147">
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title --q-title03"><span>仕事に活かせている自分の性格は？</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>素直で、少しミーハーな性格です。お客様のお話を聞くと、その商品を魅力的に感じ、「応援したい！」と思うんです。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>自分は、地道な継続作業が苦ではない、根気のあるところかな。あとは、お客様と交渉するのも苦手じゃないですね。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>T.I.さんは、順応性が高いのだと思います。どこの部署でも自分なりのやり方を見つけて、良好な人間関係を築いていける人です。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>保証業務は答えがひとつではないので、上司と意見が異なることがあります。だからこそ、お互いに意見を出しあって、一番の最善を見つけていく。自分はその過程に、楽しさとやりがいを感じます。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>私は、人と話したり、電話をとったりするのが苦じゃないところですかね。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>N.N.さんは入協して二日目くらいで、既に電話をばんばんとっていたんですよ。お客様から”今の新人！？すごいね”という声が、たくさん届きました。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>今日少し話しただけでも、若手二人はとてもしっかりしているなあと感じます。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>いやいやそんな…！でも、T.H.さんは本当に、どんな対応をするときもいつも落ち着いていて。自分と一年しか違わないのに、すごいなあ、と思います。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>T.H.くんからは、仕事関連の電話をもらうことが時々あるんだけどね。丁寧な姿勢が伝わるから、断れないんだよなあ。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>いつもありがとうございます（笑）。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>協会の仕事は人と話すことがとても多いから、話すのが得意だったり、相手に信頼感を与えることができるのは、大きな強みだと思うよ。でももちろん、話が苦手な人もいる。小さい組織なので、職員一人ひとりの特性を見て、苦手な部分を補い合っている空気はあるかもしれません。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>私は話すのが苦手なので、N.N.さんがうらやましいです。ただ、とにかく誠実に話すことは心がけています。真面目で責任感のある性格が、仕事に活かせているのかもしれません。あとは、いやなことがあってもすぐ忘れられるところかな（笑）。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>うらやましい。自分はずっと引きずっちゃうタイプです…（笑）。だから、結構人に相談しますね。話すことが自分にとって発散になったり、新たな視点を得られたりするので。</dd>
          </div>
        </dl>
        <img src="<?php echo $path; ?>assets/img/people/zadankai/pic_03.png" alt="仕事に活かせている自分の性格は？" width="1712" height="1147">
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title --q-title04"><span>どんなふうに成長できますか？</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>T.H.さんは最初から、落ち着いて対応ができるタイプだったんですか？</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>落ち着いてますかね…？自分ではあまりそう思わないのですが…（笑）。でも、自分のチューターとしてついてくれた先輩は、いつもすごく落ち着いている人でした。いろんな意見で場がぐちゃっとしても、本質の部分をついてぱっと解決するのをそばで見ていました。その姿を、無意識に真似ているかもしれません。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>いいチューターですね。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>チューターは同じ部署の、年の近い先輩が担当するんだよね。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>先輩方は、1年目でも2年目でも、まずしっかり意見を聞いてくれます。たとえ間違っていたとしても、一旦全部聞いたあとに、具体的なアドバイスをしてくれる。「やってみたい」と思ったことに、挑戦しやすい環境だと思います。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>若いうちから、ちゃんとできていてすごいなあ…。とくに経営支援は、私たちの頃はそれほどやっていなかったので、普段からお客様と会って経験を積めるのはいいことですね。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>支援するためには、まずお客様の現場を知ることが必要ですからね。相手と関係を構築してから、どういった支援が必要かを引き出して、解決策を一緒に考える。そうやって実践しながら、学んでいくんです。</dd>
          </div>
        </dl>
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title --q-title05"><span>キャリアはどのように決まりますか？</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>本人の希望や適正を考慮して、配属が決まります。職員数がそれほど多くないので、それぞれの得意なことや、向いていそうな仕事はわかりやすいと思います。適材適所の配置になっているんじゃないかな。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>自分は営業店で保証審査・経営支援業務の経験をし、今は広報の仕事をしています。刊行物をつくったり、ノベルティグッズをつくったり。お客様に、協会との接点を持ってもらうために日々試行錯誤しています。最近は、イメージキャラクターうさぽくんのイラストがついたアメをつくりました。実際、お客さんの反応はどうでしょうか？</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>いいですよ。あるお客様にグッズを渡したら、「協会も変わったなあ」ということばをいただきました。昔よりも今のほうが、より親近感を持ってもらえているみたいです。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>私は今、お客様の担当を任せてもらえるように、色々な業務を覚えている最中です。人と話すのは苦ではないので、いずれ担当を持って、お客様のお話に寄り添う支援ができたらと思います。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>自分は少しずつ、担当を持たせてもらえるようになってきました。先輩の担当をサポートしつつ、支援の仕方を学んでいます。</dd>
          </div>
        </dl>
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title --q-title06"><span>協会の働きやすさはどんなところ？</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>プライベートの時間をしっかり取れるところです。家族や趣味の時間を、十分に楽しむことができます。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>業務以外でも相談にのっていただいたり、気にかけていただいたりするところですね。職員があたたかい。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>上司のことを尊敬できる環境です。お客様のための最善策を考え続け、やり抜く姿をとても尊敬しています。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>私は育休を経て、今は時短勤務ですが、仕事と育児を両立させやすい環境だと感じます。復職したての頃は、保育園からの呼び出しも頻繁にあったのですが、”仕事に替わりはいても、ママに替わりはないよ”と、あたたかくサポートいただきました。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>自分は、男性職員で初めて育休を取得しました。その時も、引き継ぎから復帰まで、サポートが手厚くて助かりました。16年間協会にいますが、職場で嫌だなと思う人に会ったことがないです。</dd>
          </div>
        </dl>
      </div>
      <div class="p-text-box">
        <h2 class="p-zadankai--q-title --q-title07"><span>今後の目標・就活生にメッセージ</span></h2>
        <dl class="p-zadankai--dl">
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>先輩方のように、周りから信頼される職員になることが今の目標です。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>自分は、物事の本質を理解して、解決に導ける人になりたいです。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>一つでの多くの中小企業のお客様に、感謝される仕事をすることですね。そのために、常に最善の解決策を考え、最後までやり抜けるよう努力しようと思います。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>ワーキングママとして働き続けることです。日々職員の皆さんに支えられているので、社内で同じ立場の人ができたときは、私が支えられるようになりたいです。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>今日皆さんと話していて、職員同士楽しく、支え合いながらこれからも働いていけたらいいなと思いました。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ichinose.png" alt="M.I." width="168" height="173"><figcaption>M.I.</figcaption></figure></dt>
            <dd>私は就活でたくさん悩み、迷い、結果ここにたどり着き、人に恵まれたと感じながら仕事をしています。一緒に働く人の存在は、働くうえでとても大切です。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_honda.png" alt="T.H." width="168" height="173"><figcaption>T.H.</figcaption></figure></dt>
            <dd>就職活動には迷いや不安もあると思いますが、社会人生活は、楽しいことがたくさんあります。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_ishizaka.png" alt="T.I." width="168" height="173"><figcaption>T.I.</figcaption></figure></dt>
            <dd>色々な場所に顔を出してみて、社会や自分を知る、いい機会にしてください。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_nakajima.png" alt="N.N." width="168" height="173"><figcaption>N.N.</figcaption></figure></dt>
            <dd>不安なことは、頼れる人にどんどん頼るといいと思います。</dd>
          </div>
          <div>
            <dt><figure><img src="<?php echo $path; ?>assets/img/people/zadankai/icon_urano.png" alt="A.U." width="168" height="173"><figcaption>A.U.</figcaption></figure></dt>
            <dd>自分に合った企業が見つかることを信じて、頑張ってください。応援しています！</dd>
          </div>
        </dl>
        <img src="<?php echo $path; ?>assets/img/people/zadankai/pic_04.png" alt="今後の目標・就活生にメッセージ" width="1712" height="1147">
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