function changename() {
    var element = document.getElementById("nameframe");
    var style = window.getComputedStyle(element);
    var top = style.getPropertyValue("display");
    if (top == "none") {
        document.getElementById("nameframe").style.display = "block";
        document.getElementById("emailframe").style.display = "none";
        document.getElementById("emailframe").src = "changeemail.php";
        document.getElementById("passframe").style.display = "none";
        document.getElementById("passframe").src = "changepass.php";
        document.getElementById("picframe").style.display = "none";
        document.getElementById("picframe").src = "changepic.php";
    }
    else {
        document.getElementById("nameframe").style.display = "none";
        document.getElementById("nameframe").src = "changename.php";
    }
}
function changeemail() {
    var element = document.getElementById("emailframe");
    var style = window.getComputedStyle(element);
    var top = style.getPropertyValue("display");
    if (top == "none") {
        document.getElementById("emailframe").style.display = "block";
        document.getElementById("nameframe").style.display = "none";
        document.getElementById("nameframe").src = "changename.php";
        document.getElementById("passframe").style.display = "none";
        document.getElementById("passframe").src = "changepass.php";
        document.getElementById("picframe").style.display = "none";
        document.getElementById("picframe").src = "changepic.php";
    }
    else {
        document.getElementById("emailframe").style.display = "none";
        document.getElementById("emailframe").src = "changeemail.php";
    }
}
function changepass() {
    var element = document.getElementById("passframe");
    var style = window.getComputedStyle(element);
    var top = style.getPropertyValue("display");
    if (top == "none") {
        document.getElementById("passframe").style.display = "block";
        document.getElementById("nameframe").style.display = "none";
        document.getElementById("nameframe").src = "changename.php";
        document.getElementById("emailframe").style.display = "none";
        document.getElementById("emailframe").src = "changeemail.php";
        document.getElementById("picframe").style.display = "none";
        document.getElementById("picframe").src = "changepic.php";
    }
    else {
        document.getElementById("passframe").style.display = "none";
        document.getElementById("passframe").src = "changepass.php";
    }
}
function changepic() {
    var element = document.getElementById("picframe");
    var style = window.getComputedStyle(element);
    var top = style.getPropertyValue("display");
    if (top == "none") {
        document.getElementById("picframe").style.display = "block";
        document.getElementById("nameframe").style.display = "none";
        document.getElementById("nameframe").src = "changename.php";
        document.getElementById("emailframe").style.display = "none";
        document.getElementById("emailframe").src = "changeemail.php";
        document.getElementById("passframe").style.display = "none";
        document.getElementById("passframe").src = "changepass.php";
    }
    else {
        document.getElementById("picframe").style.display = "none";
        document.getElementById("picframe").src = "changepic.php";
    }
}