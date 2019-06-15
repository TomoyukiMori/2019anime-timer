$(function () {

$('[name="btn"]:checkbox').change(function(){

if(this.id=="select_tv"){
  $('.timer0').toggle();
}else if(this.id=="select_danime"){
  $('.timer1').toggle();
}else if(this.id=="select_abema"){
  $('.timer2').toggle();
}else if(this.id=="select_Netflix"){
  $('.timer3').toggle();
}else if(this.id=="select_primevideo"){
  $('.timer4').toggle();
}else if(this.id=="select_hulu"){
  $('.timer5').toggle();
}else if(this.id=="select_nicoLive"){
  $('.timer6').toggle();
}else if(this.id=="select_nicoCh"){
  $('.timer7').toggle();
}else if(this.id=="select_bandai"){
  $('.timer8').toggle();
}

});





});
