/*------------------------------------------------------------------
お知らせタブ切り替え
/*------------------------------------------------------------------*/
const tabAll = document.querySelector(".p-tag--all > button");
const tabGuaranteeSystem = document.querySelector(
  ".p-tag--guarantee_system > button"
);
const tabGuarantee = document.querySelector(".p-tag--guarantee > button");
const tabCampaign = document.querySelector(".p-tag--campaign > button");
const tabOthers = document.querySelector(".p-tag--others > button");

const listAll = document.querySelector(".p-top-news__list--all");
const listGuaranteeSystem = document.querySelector(
  ".p-top-news__list--guarantee_system"
);
const listGuarantee = document.querySelector(".p-top-news__list--guarantee");
const listCampaign = document.querySelector(".p-top-news__list--campaign");
const listOthers = document.querySelector(".p-top-news__list--others");

tabAll.addEventListener("click", function () {
  listAll.classList.add("active");
  listGuaranteeSystem.classList.remove("active");
  listGuarantee.classList.remove("active");
  listCampaign.classList.remove("active");
  listOthers.classList.remove("active");
});
tabGuaranteeSystem.addEventListener("click", function () {
  listAll.classList.remove("active");
  listGuaranteeSystem.classList.add("active");
  listGuarantee.classList.remove("active");
  listCampaign.classList.remove("active");
  listOthers.classList.remove("active");
});
tabGuarantee.addEventListener("click", function () {
  listAll.classList.remove("active");
  listGuaranteeSystem.classList.remove("active");
  listGuarantee.classList.add("active");
  listCampaign.classList.remove("active");
  listOthers.classList.remove("active");
});
tabCampaign.addEventListener("click", function () {
  listAll.classList.remove("active");
  listGuaranteeSystem.classList.remove("active");
  listGuarantee.classList.remove("active");
  listCampaign.classList.add("active");
  listOthers.classList.remove("active");
});
tabOthers.addEventListener("click", function () {
  listAll.classList.remove("active");
  listGuaranteeSystem.classList.remove("active");
  listGuarantee.classList.remove("active");
  listCampaign.classList.remove("active");
  listOthers.classList.add("active");
});
