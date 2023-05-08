<?php
$title_2nd = '支援事例';
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
  <section class="l-wrapper__outer2 l-wrapper">
    <section class="l-wrapper--left">
      <div class="l-wrapper--left--fixed">
        <h1 class="c-text--h1"><span>CASE</span>支援事例</h1>
        <nav class="l-nav">
          <ul>
            <li><a href="#anchor--01" class="a-effect">創業者支援</a></li>
            <li><a href="#anchor--02" class="a-effect">事業継承支援</a></li>
            <li><a href="#anchor--03" class="a-effect">経営改善支援</a></li>
            <li><a href="#anchor--04" class="a-effect">課題解決支援</a></li>
            <li><a href="#anchor--05" class="a-effect">事業再生支援</a></li>
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
                  <dd class="p-text-box--bluBox--dd">個創業して日が浅い個人経営のケーキ屋さん。優れた腕前を持っていましたが、コロナ渦で集客がうまくいかなくなり、新たな顧客の開拓方法や広告宣伝方法に悩んでいました。</dd>
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
      <div class="p-text-box" id="anchor--02">
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
      <div class="p-text-box" id="anchor--03">
        <h2 class="c-text--h2">経営改善支援</h2>
        <div class="p-text-box--bluBox" id="case04">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 04</span>資金繰りを見直し、<br>新店舗で新たなスタート</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_04.png" alt="" width="330" height="528"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">個人経営のステーキ店</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">人気店でありながら、リーズナブルな価格設定であったため、収益は厳しい状況。そんな中、賃借し店舗から移転することになり資金が必要になりましたが、既存借入の返済負担もあって資金繰りが厳しい状態でした。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>そこで、事業継続に向けて経営改善支援を行うことに。課題を整理し、解決に向けてスケジュールを策定。既存借入金を調整するための弁護士を紹介し、今後の収支見通しと返済計画の検討を行っていきました。新店舗のコンセプト、メニュー、販売価格も再検討しました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2  class="c-text--h4">結果</h2>
                <p>新店舗への移転は無事完了。メニューのリニューアルと価格改定も実施しました。その結果、客数・客単価いずれも大きく上昇し、収益が改善。現在はマスコミにもたびたび取り上げられる人気店となっています。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-text-box--bluBox" id="case05">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 05</span>経営診断から必要資金の保証まで、<br>一貫体制で支援</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_05.png" alt="" width="453" height="487"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">木製建具・家具製造業者</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">高い技術力で取引先からの信頼は厚く、受注はコンスタントに確保している一方で、滞留在庫の多さや収益性の低さから資金繰りに窮していました。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>そこで、当協会の「中小企業診断士活用事業」と「経営サポート専門家派遣事業」を利用し、課題をの洗い出しと経営戦略の練り直しを行いました。また、滞留在庫の整理整頓ができる環境を整備するために、倉庫建設資金を保証協力しました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2  class="c-text--h4">結果</h2>
                <p>関係者と現状認識を共有したことで、信頼関係が構築され、労働環境の改善を見据えた新商品の開発、人材育成を推進する組織体制の整備など、長期的な経営方針の目線合わせができました。また、倉庫の建設により滞留在庫の見える化が進み、削減に向けた道筋を立てられるようになりました。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-text-box" id="anchor--04">
        <h2 class="c-text--h2">課題解決支援</h2>
        <div class="p-text-box--bluBox" id="case06">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 06</span>製造原価管理方法を見直し、<br>課題を一つひとつ解決</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_06.png" alt="" width="365" height="465"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">自動車部品中心の塗装業者</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">現在、思うような利益を確保できていない状態。また、リーマンショックの際に調達した債務が過大で、返済緩和の条件変更から脱却できず、将来に向けての前向きな設備投資が困難でした。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>現在利用している製品等の原価管理シートを確認し、原価管理の基本的な考え方について、専門家の指導を受けました。また、過去の決算書の数値をもとに、資金繰り正常化について議論し、今度の方向性を決めていきました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2  class="c-text--h4">結果</h2>
                <p>専門家の視点が入ったことで、製造原価の中で割高となっている箇所が明確になったことで、各課題を解決に導くきっかけとなりました。また、社内の管理会計の仕組みをブラッシュアップしたことで、全体経費を加味した個別製品毎の採算計算が可能になりました。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p-text-box--bluBox" id="case07">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 07</span>就業規則の見直しをサポート</h2>
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
      <div class="p-text-box" id="anchor--05">
        <h2 class="c-text--h2">事業再生支援</h2>
        <div class="p-text-box--bluBox" id="case08">
          <h2 class="p-text-box--bluBox--h2"><span>CASE 08</span>再生ファンドの活用で、<br>旅館の名前を存続</h2>
          <div class="p-text-box--bluBox--inner">
            <div class="p-text-box--bluBox--fig">
              <figure><img src="<?php echo $path; ?>assets/img/case/case_08.png" alt="" width="410" height="466"></figure>
              <dl class="p-text-box--bluBox--dl">
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>事業者</span></dt>
                  <dd class="p-text-box--bluBox--dd">地域を代表する老舗温泉旅館</dd>
                </div>
                <div>
                  <dt class="p-text-box--bluBox--dt"><span>課題</span></dt>
                  <dd class="p-text-box--bluBox--dd">先代の借入金が多額に残っており、新たな資金調達は困難。そのため、必要な更新投資ができずに施設の老朽化が進行し、集客力も大きく低下していました。</dd>
                </div>
              </dl>
            </div>
            <div class="p-text-box--bluBox--flow--outer">
              <div class="p-text-box--bluBox--flow">
                <h2 class="c-text--h4 case_img">支援内容</h2>
                <p>中小企業再生ファンドを活用した再生スキームの立案により、金融債権者が債権の一部を放棄。当ファンドが設備資金を貸付しました。さらに、宿泊業を得意とする専門家から、販売チャネル、広告宣伝方法の見直し等のアドバイスを受けました。</p>
              </div>
              <div class="p-text-box--bluBox--flow">
                <h2  class="c-text--h4">結果</h2>
                <p>過剰な債務が解消され、財務の健全化と経営の安定化が図られました。数十年ぶりの設備投資を実行したことで、施設の魅力が向上し、同業他社との競争力もUP。さらに、HPのリニューアルとオンラインエージェントとの関係強化により、Web経由の宿泊予約が大幅に増加しました。</p>
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