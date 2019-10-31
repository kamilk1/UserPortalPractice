function updateClock() {
  var currentTime = new Date();

  var currentHours = currentTime.getHours();
  var currentMinutes = currentTime.getMinutes();
  var currentSeconds = currentTime.getSeconds();

  var timeOfDay = currentHours < 12 ? "AM" : "PM";

  currentHours = currentHours % 12 == 0 ? "12" : currentHours % 12;
  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  var currentTimeString =
    currentHours +
    ":" +
    currentMinutes +
    ":" +
    currentSeconds +
    " " +
    timeOfDay;

  document.getElementById("clock").innerHTML = currentTimeString;
}

/*Once DOM loaded, calls updateClock() at 1s interval*/
document.addEventListener("DOMContentLoaded", function() {
  setInterval("updateClock()", 1000);
});
