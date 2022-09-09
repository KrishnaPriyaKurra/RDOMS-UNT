let $dininghall = "";
let $date = "";
let $meal = "";
let $time = "";
function meangreen() {
    $dininghall = "Mean Green";
}
function west() {
    $dininghall = "Kitchen West";
}
function eagle() {
    $dininghall = "Eagle Landing";
}
function bruce() {
    $dininghall = "Bruceteria";
}
function champs() {
    $dininghall = "Champs"
}
function today() {
    var today = new Date();
    $date = (today.getMonth() + 1) + '/' + today.getDate() + '/' + today.getFullYear();
}
function tomorrow() {
    var today = new Date();
    $date = (today.getMonth() + 1) + '/' + (today.getDate() + 1) + '/' + today.getFullYear();
}
function setdate() {
    var today = new Date();
    document.getElementById("daybutton1").innerText += ('\n' + (today.getMonth() + 1) + '/' + today.getDate() + '/' + today.getFullYear()).toString();
    document.getElementById("daybutton2").innerText += ('\n' + (today.getMonth() + 1) + '/' + (today.getDate() + 1) + '/' + today.getFullYear()).toString();
}
function breakfast() {
    $meal = "Breakfast";
    const timings = ["7:00 AM", "8:00 AM", "9:00 AM", "10:00 AM"];
    document.getElementById("time1").innerText = timings[0];
    document.getElementById("time1").style.visibility = "visible";
    document.getElementById("time2").innerText = timings[1];
    document.getElementById("time2").style.visibility = "visible";
    document.getElementById("time3").innerText = timings[2];
    document.getElementById("time3").style.visibility = "visible";
    document.getElementById("time4").innerText = timings[3];
    document.getElementById("time4").style.visibility = "visible";
}
function lunch() {
    $meal = "Lunch";
    const timings = ["11:00 AM", "12:00 PM", "1:00 PM", "2:00 PM"];
    document.getElementById("time1").innerText = timings[0];
    document.getElementById("time1").style.visibility = "visible";
    document.getElementById("time2").innerText = timings[1];
    document.getElementById("time2").style.visibility = "visible";
    document.getElementById("time3").innerText = timings[2];
    document.getElementById("time3").style.visibility = "visible";
    document.getElementById("time4").innerText = timings[3];
    document.getElementById("time4").style.visibility = "visible";
}
function dinner() {
    $meal = "Dinner";
    const timings = ["3:00 PM", "4:00 PM", "5:00 PM", "6:00 PM"];
    document.getElementById("time1").innerText = timings[0];
    document.getElementById("time1").style.visibility = "visible";
    document.getElementById("time2").innerText = timings[1];
    document.getElementById("time2").style.visibility = "visible";
    document.getElementById("time3").innerText = timings[2];
    document.getElementById("time3").style.visibility = "visible";
    document.getElementById("time4").innerText = timings[3];
    document.getElementById("time4").style.visibility = "visible";
}
function time1() {
    $time = document.getElementById("time1").innerText;
}
function time2() {
    $time = document.getElementById("time2").innerText;
}
function time3() {
    $time = document.getElementById("time3").innerText;
}
function time4() {
    $time = document.getElementById("time4").innerText;
}
function checkin() {
    document.getElementById("Date").value = $date;
    document.getElementById("Meal").value = $meal;
    document.getElementById("DiningHall").value = $dininghall;
}
