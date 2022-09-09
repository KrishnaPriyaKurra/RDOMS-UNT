function showrequests() {
    var element = document.getElementById("serviceframe");
    var style = window.getComputedStyle(element);
    var top = style.getPropertyValue("display");
    if (top == "none")
        document.getElementById("serviceframe").style.display = "block";
    else {
        document.getElementById("serviceframe").style.display = "none";
    }
}
function showpolldata() {
    var element = document.getElementById("pollframe");
    var style = window.getComputedStyle(element);
    var top = style.getPropertyValue("display");
    if (top == "none")
        document.getElementById("pollframe").style.display = "block";
    else {
        document.getElementById("pollframe").style.display = "none";
    }
}