$(document).ready(function(){

  $(".gnb").mouseover(function(){
    $(".gnb").find(".sub_gnb").stop().slideDown("fast");
  });

  $(".gnb").mouseleave(function(){
    $(".gnb").find(".sub_gnb").stop().slideUp("fast");
  });






});
