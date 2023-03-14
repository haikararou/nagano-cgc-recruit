/*------------------------------------------------------------------
ヘッダードロップシャドウ
/*------------------------------------------------------------------*/
const headerScrollTop = () => {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  let windowWidth = window.innerWidth;

  if (scrollTop <= 20) {
    headerShadow.classList.add("hiddenTop");
  } else if (scrollTop > 20 && windowWidth >= vr) {
    headerShadow.classList.remove("hiddenTop");
  }
};
window.addEventListener("scroll", function () {
  headerScrollTop();
});

/*------------------------------------------------------------------
ニュースティッカー
/*------------------------------------------------------------------*/
const animTime = 5000; // アニメーション時間(ms)
const speed = 100; // テキストの移動速度(px)
const limit = 0; // ブレークポイント(px)
let animId;
let isRunning = false;

const ticker = document.querySelector(".p-top-head__ticker-container");
loadTicker();

function loadTicker() {
  tickerAnim();
  animId = setInterval(tickerAnim, animTime);
  isRunning = true;
}

// アニメーション処理
function tickerAnim() {
  const items = ticker.querySelectorAll(".p-top-head__ticker-item");
  const running = ticker.querySelector(".run");
  let idx, link, first, next;
  if (items[1]) {
    //ニュースに２つ目の要素が存在するとき
    if (!running) {
      // 実行中の要素がない場合（初回のみ）
      first = items[0];
      link = first.querySelector("a");
      first.classList.add("fadeInDown", "run");
      first.style.zIndex = 1;
      setTimeout(textMove, 1000, link); // 第3引数に引数linkを指定。こうしないと即実行されてしまうので注意。
    } else {
      for (let i = 0; i < items.length; i++) {
        if (items[i] == running) {
          idx = i; // 実行中要素のインデックスを取得
          break;
        }
      }
      next = items[(idx + 1) % items.length];
      running.classList.replace("fadeInDown", "fadeOutDown");
      setTimeout(() => {
        running.classList.remove("fadeOutDown", "run");
        running.style.zIndex = 0;
        link = running.querySelector("a");
        link.style.transform = "none";
        next.classList.add("fadeInDown", "run");
        next.style.zIndex = 1;
        link = next.querySelector("a");
        setTimeout(textMove, 1000, link);
      }, 300);
    }
  } else {
    first = items[0];
    link = first.querySelector("a");
    first.classList.add("fadeInDown", "run");
    first.style.zIndex = 1;
  }
}

// テキスト移動処理
function textMove(elm) {
  const move = elm.parentNode.clientWidth - elm.clientWidth;
  if (move < 0) {
    elm.style.transform = "translateX(" + move + "px)";
    elm.style.transitionDuration = Math.abs(move) / speed + "s";
  }
}

// ウィンドウサイズ変更時
window.addEventListener("resize", () => {
  const windowWidth = window.innerWidth;
  if (windowWidth <= limit) {
    ticker.style.display = "none";
    clearInterval(animId);
    isRunning = false;
  } else {
    if (!isRunning) {
      ticker.style.display = "block";
      animId = setInterval(tickerAnim, animTime);
      isRunning = true;
    }
  }
});
/*------------------------------------------------------------------
お知らせタブ切り替え
/*------------------------------------------------------------------*/
const tabAll = document.querySelector(".p-tag--all > button");
const tabNews = document.querySelector(".p-tag--news > button");
const tabHosho = document.querySelector(".p-tag--hosho > button");
const tabImportant = document.querySelector(".p-tag--important > button");

const listAll = document.querySelector(".p-top-news__list--all");
const listNews = document.querySelector(".p-top-news__list--news");
const listHosho = document.querySelector(".p-top-news__list--hosho");
const listImportant = document.querySelector(".p-top-news__list--important");

tabAll.addEventListener("click", function () {
  listAll.classList.add("active");
  listNews.classList.remove("active");
  listHosho.classList.remove("active");
  listImportant.classList.remove("active");
});
tabNews.addEventListener("click", function () {
  listAll.classList.remove("active");
  listNews.classList.add("active");
  listHosho.classList.remove("active");
  listImportant.classList.remove("active");
});
tabHosho.addEventListener("click", function () {
  listAll.classList.remove("active");
  listNews.classList.remove("active");
  listHosho.classList.add("active");
  listImportant.classList.remove("active");
});
tabImportant.addEventListener("click", function () {
  listAll.classList.remove("active");
  listNews.classList.remove("active");
  listHosho.classList.remove("active");
  listImportant.classList.add("active");
});

/*------------------------------------------------------------------
夢追い人左右ボタン
/*------------------------------------------------------------------*/
const buttonLeft = document.querySelector(".p-top-ymb__left");
const buttonRight = document.querySelector(".p-top-ymb__right");
const ymbContainer = document.querySelector(".p-top-ymb__list");
const ymbCard = document.querySelector(".p-top-ymb__card");
let gap = 29;
let containerWidth = ymbContainer.clientWidth;
let cardWidth = ymbCard.clientWidth;
let left = 0;
let count = 0;

buttonRight.addEventListener("click", function () {
  if (count < 7) {
    left += cardWidth;
    left += gap;
    count++;
  }
  ymbContainer.style.marginLeft = left * -1 + "px";
});

buttonLeft.addEventListener("click", function () {
  if (count > 0) {
    left -= cardWidth;
    left -= gap;
    count--;
  }
  ymbContainer.style.marginLeft = left * -1 + "px";
});

window.onload = function () {
  headerShadow.classList.add("hiddenTop");
};

window.addEventListener("scroll", function () {});
