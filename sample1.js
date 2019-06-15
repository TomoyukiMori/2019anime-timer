var timeLeft;
var leftDays;
var leftHours;
var leftMinutes;
var leftSecounds;
var seconds = 1000;
var minutes = 1000 * 60;
var hours = 1000 * 60 * 60;
var days = 1000 * 60 * 60 * 24;
var ydhms1970=new Array();
var ydhms=["2018/10/06 1:05:00","2018/10/10 12:00","2018/10/08 0:00","2018/10/10 12:00",""];
var length = ydhms.length;
for(var i=0;i<length;i++){
  ydhms1970[i]=new Date(ydhms[i]).getTime();
}

var timeConvert=(timeLeft)=>{
  var leftDays= Math.floor(timeLeft/days);
  var leftHours=Math.floor((timeLeft-leftDays*days)/hours);
  var leftMinutes=Math.floor((timeLeft-leftDays*days-leftHours*hours)/minutes);
  var leftSecounds=Math.floor((timeLeft-leftDays*days-leftHours*hours-minutes*leftMinutes)/seconds);
  var d = leftDays;
  var h =leftHours;
  var m = leftMinutes;
  var s = leftSecounds;
  var timerString;
  d=('0' + d).slice(-3);
  h=('0' + h).slice(-2);
  m = ('0' + m).slice(-2);
  s = ('0' + s).slice(-2);//残り00日00時間00分00秒
  timerString=d + '日' + h + '時間' + m + '分'+ s + '秒' ;
  if(timerString=="NaN日aN時間aN分aN秒"){
    return "配信されていません";
  }
  return timerString;
}
var countDown=(t)=>{
  if(t<Date.now()){
    while(t < Date.now()){
    t+=7*days;
    }
  }
  timeLeft=t-Date.now();
  return timeLeft;
  }



var timerXCounter = () =>{
  for(var i=0;i<length;i++){
  timeLeft= countDown(ydhms1970[i]);
  document.getElementById(i).innerHTML = timeConvert(timeLeft);
  }
  setTimeout(timerXCounter,30);
  }


timerXCounter();
