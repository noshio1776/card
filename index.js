$(function(){
  $('.search').quicksearch('.animal');
  
  $('#open-modal').click(function(){
    $('#search-modal').css('display','block');
  });
  $('#close-modal').click(function(){
    $('#search-modal').css('display','none');
  });
});