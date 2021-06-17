$(function(){
    let totalTime = 600;
    let min = 0;
    let sec = 0;
    let counter = 0;
    let timer = setInterval(function () {
        counter++;
        min = Math.floor( (totalTime - counter) / 60);
        sec = totalTime - (min * 60) - counter;
        $(".timerBox span").text(min + ":" + sec);
      if(counter == totalTime) {
          clearInterval(timer);
      }
    }, 1000);
});
function showResult() {
    $("questionScreen").hide();
    $("resultScreen").show();
}








/*const startingMinutes = 10;
let time = startingMinutes * 60;
const countdownEl = document.getElementById('countdownn');
setInterval(updateCountdown, 1000);
function updateCountdown() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    countdownEl.innerHTML = `${minutes}: ${seconds}`;
    time--;
}*/