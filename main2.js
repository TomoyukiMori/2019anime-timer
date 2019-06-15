var timeLeft;
var dow;
var onlyDay_pass;
var hmString;
var leftDays;
var leftHours;
var leftMinutes;
var leftSecounds;
var seconds = 1000;
var minutes = 1000 * 60;
var hours = 1000 * 60 * 60;
var days = 1000 * 60 * 60 * 24;
var length = ydhms.length;
var ydhms1970=new Array();
for(var i=0;i<length;i++){
  ydhms1970[i]=new Date(ydhms[i]).getTime();
}



var findout_dow_hm=(t,onlyDay_pass)=>{
  var WeekChars = [ "日曜", "月曜", "火曜", "水曜", "木曜", "金曜", "土曜" ];
  var dObj = new Date(t);
  var wDay = dObj.getDay();
  var dowString = WeekChars[wDay];

  var hour = dObj.getHours();
  var minute = dObj.getMinutes();

  hour=('0' + hour).slice(-2);
  minute=('0' + minute).slice(-2);
var hmString = `${hour}:${minute}`;

  if (dowString==undefined||hmString=="aN:aN") {
    return "";
  }else if (onlyDay_pass==1) {
    return "["+dowString+"更新"+"]";
  }else {
    return "["+dowString+" "+hmString+"]";
  }
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
  s = ('0' + s).slice(-2);

  timerString=d + '日' + h + '時間' + m + '分'+ s + '秒' ;
  if(timerString=="NaN日aN時間aN分aN秒"){
    return "配信されていません";
  }
  return timerString;
}

var timeConvert_onlyDay=(timeLeft)=>{
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
  s = ('0' + s).slice(-2);

  timerString=d + '日'  ;
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
  if ( ydhms[i].match(/不明/) || ydhms[i].match(/全話/)|| ydhms[i].match(/有料/)|| ydhms[i].match(/見放題/)) {
    dow_hm = findout_dow_hm(ydhms[i],onlyDay_pass);
    document.getElementById(`dow_hm${i}`).innerHTML =  dow_hm;
    document.getElementById(i).innerHTML =  ydhms[i];
  }else if(ydhms[i].length==10){
    var onlyDay_pass = 1;
    dow_hm = findout_dow_hm(ydhms[i],onlyDay_pass);
    document.getElementById(`dow_hm${i}`).innerHTML =  dow_hm;
    document.getElementById(i).innerHTML = timeConvert_onlyDay(timeLeft);
  }else{
    var onlyDay_pass = 0;
    dow_hm = findout_dow_hm(ydhms[i]);
    document.getElementById(`dow_hm${i}`).innerHTML =  dow_hm;
    document.getElementById(i).innerHTML = timeConvert(timeLeft);
    }
  }
  setTimeout(timerXCounter,30);
  }


timerXCounter();
