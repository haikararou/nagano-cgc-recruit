/*------------------------------------------------------------------
人を知る
/*------------------------------------------------------------------*/
$(function() {
  $('.intro_02').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_01 figure').addClass('on');
    }else{
      $('.intro_01 figure').removeClass('on');
    }
  });
  $('.intro_03').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_02 figure').addClass('on');
    }else{
      $('.intro_02 figure').removeClass('on');
    }
  });
  $('.intro_04').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_03 figure').addClass('on');
    }else{
      $('.intro_03 figure').removeClass('on');
    }
  });
  $('.intro_05').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_04 figure').addClass('on');
    }else{
      $('.intro_04 figure').removeClass('on');
    }
  });
  $('.intro_06').on('inview', function(event, isInView){
    if (isInView) {
      $('.intro_05 figure').addClass('on');
    }else{
      $('.intro_05 figure').removeClass('on');
    }
  });
});