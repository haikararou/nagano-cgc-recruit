/*------------------------------------------------------------------
Q&Aの開閉
/*------------------------------------------------------------------*/

const faqContainer = document.querySelectorAll(".p-faq__card");
const faqOpenButton = document.querySelectorAll(".p-faq__button");
//Q&Aの開閉
faqOpenButton.forEach(function (el, i) {
  el.addEventListener("click", function () {
    faqContainer[i].classList.toggle("active");
    faqOpenButton[i].classList.toggle("active");
  });
});
