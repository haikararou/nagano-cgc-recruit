/*------------------------------------------------------------------
人を知る
/*------------------------------------------------------------------*/
const intros = document.querySelectorAll(".intro");
const introsArray = Array.prototype.slice.call(intros, 0);
const options = {
  root: null,
  rootMargin: "-40% 0px",
  threshold: 0
};
const observer = new IntersectionObserver(doWhenIntersect, options);
introsArray.forEach(function(intro) {
  observer.observe(intro);
});
function doWhenIntersect(entries) {
  const entriesArray = Array.prototype.slice.call(entries, 0);
  entriesArray.forEach(function(entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("on");
    } else {
      entry.target.classList.remove('on');
    }
  });
}