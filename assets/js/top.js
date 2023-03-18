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
夢追い人左右ボタン
/*------------------------------------------------------------------*/
// const buttonLeft = document.querySelector(".p-top-ymb__left");
// const buttonRight = document.querySelector(".p-top-ymb__right");
// const ymbContainer = document.querySelector(".p-top-ymb__list");
// const ymbCard = document.querySelector(".p-top-ymb__card");
// let gap = 29;
// let containerWidth = ymbContainer.clientWidth;
// let cardWidth = ymbCard.clientWidth;
// let left = 0;
// let count = 0;

// buttonRight.addEventListener("click", function () {
//   if (count < 7) {
//     left += cardWidth;
//     left += gap;
//     count++;
//   }
//   ymbContainer.style.marginLeft = left * -1 + "px";
// });

// buttonLeft.addEventListener("click", function () {
//   if (count > 0) {
//     left -= cardWidth;
//     left -= gap;
//     count--;
//   }
//   ymbContainer.style.marginLeft = left * -1 + "px";
// });

// window.onload = function () {
//   headerShadow.classList.add("hiddenTop");
// };

// window.addEventListener("scroll", function () {});
