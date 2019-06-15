//即時関数にすると変数を渡せない
console.log("いっかいめ");
console.log(firstAirDate);
var timeLeft;
var leftDays;
var leftHours;
var leftMinutes;
var leftSecounds;
var seconds = 1000;
var minutes = 1000 * 60;
var hours = 1000 * 60 * 60;
var days = 1000 * 60 * 60 * 24;
var firstAirDate1970  = new Date(firstAirDate).getTime();
var danimeFirst1970  = new Date(danimeFirst).getTime();
var abemaFirst1970  = new Date(abemaFirst).getTime();
var netflixFirst1970  = new Date(netflixFirst).getTime();
var primevideoFirst1970  = new Date(primevideoFirst).getTime();
var nextAirDate;





// class Timer{
//   constructor(ymdhm){
//     this.ymdhm=ymdhm;//ymdhmを引数
//     this.dateObject=new Date(this.ymdhm);//ymdhmからdateオブジェクトを
//     this.nextAirDate=this.dateObject.getTime();//1970からの経過時間
//   }

  // timeConvert(t){
  //   var leftDays= Math.floor(timeLeft/days);
  //   var leftHours=Math.floor((timeLeft-leftDays*days)/hours);
  //   var leftMinutes=Math.floor((timeLeft-leftDays*days-leftHours*hours)/minutes);
  //   var leftSecounds=Math.floor((timeLeft-leftDays*days-leftHours*hours-minutes*leftMinutes)/seconds);
  //   var d = leftDays;
  //   var h =leftHours;
  //   var m = leftMinutes;
  //   var s = leftSecounds;
  //   var timerString;
  //   d=('0' + d).slice(-3);
  //   h=('0' + h).slice(-2);
  //   m = ('0' + m).slice(-2);
  //   s = ('0' + s).slice(-2);//残り00日00時間00分00秒
  //   timerString=d + '日' + h + '時間' + m + '分'+ s + '秒' ;
  //   return timerString;
  // }
  //
  // timer1writeDowner(t){
  //   timeLeft = this.countDown(t);
  //   timer1.textContent = this.timeConvert(timeLeft);
  // }
  // timer2writeDowner(t){
  //   timeLeft = this.countDown(t);
  //   timer2.textContent = this.timeConvert(timeLeft);
  // }
  // timer3writeDowner(t){
  //   timeLeft = this.countDown(t);
  //   timer3.textContent = this.timeConvert(timeLeft);
  // }
  // timer4writeDowner(t){
  //   timeLeft = this.countDown(t);
  //   timer4.textContent = this.timeConvert(timeLeft);
  // }
  // timer5writeDowner(t){
  //   timeLeft = this.countDown(t);
  //   timer5.textContent = this.timeConvert(timeLeft);
  // }
  //
  // countDown(){
  //     timeLeft=this.nextAirDate-Date.now();
  //     if(timeLeft<=0){
  //       while(this.nextAirDate < Date.now()){
  //       this.nextAirDate+=7*days;
  //       }
  //     }
  //     return timeLeft;
  // }
// }
//class おしまい
///////////////////////////////////////////////////////////////////////////////////////////////
var timeConvert=(t)=>{
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
  return timerString;
}

var countDown=(t)=>{
      timeLeft=t-Date.now();
      if(timeLeft<=0){
        while(t < Date.now()){
        t+=7*days;
        }
      }
      return timeLeft;
  }

timer1writeDowner=(t)=>{
  timeLeft = countDown(t);
  timer1.textContent = this.timeConvert(timeLeft);
}
timer2writeDowner=(t)=>{
  timeLeft = this.countDown(t);
  timer2.textContent = this.timeConvert(timeLeft);
}
timer3writeDowner=(t)=>{
  timeLeft = this.countDown(t);
  timer3.textContent = this.timeConvert(timeLeft);
}
timer4writeDowner=(t)=>{
  timeLeft = this.countDown(t);
  timer4.textContent = this.timeConvert(timeLeft);
}
timer5writeDowner=(t)=>{
  timeLeft = this.countDown(t);
  timer5.textContent = this.timeConvert(timeLeft);
}
/////////////////////////////////////////////////////////////////////////////////
// 
// var firstAirDate = new Timer(firstAirDate);
// var danimeFirst = new Timer(danimeFirst);
// var abemaFirst = new Timer(abemaFirst);
// var netflixFirst = new Timer(netflixFirst);
// var primevideoFirst = new Timer(primevideoFirst);


var timer1Counter =function(){
timer1writeDowner(firstAirDate1970);
setTimeout(timer1Counter,10);
}
timer1Counter();

var timer2Counter =function(){
timer2writeDowner(danimeFirst1970);
setTimeout(timer2Counter,10);
}
timer2Counter();

var timer3Counter =function(){
timer3writeDowner(abemaFirst1970);
setTimeout(timer3Counter,10);
}
timer3Counter();

var timer4Counter =function(){
timer4writeDowner(netflixFirst1970);
setTimeout(timer4Counter,10);
}
timer4Counter();

var timer5Counter =function(){
timer5writeDowner(primevideoFirst1970);
setTimeout(timer5Counter,10);
}
timer5Counter();
