function getSubmit() {
    document.getElementById("table").style.visibility = "visible";
    document.getElementById("showButton").innerHTML = "Hide Data";
    document.getElementById("showButton").onclick = hideSubmit;
}

function hideSubmit() {
    document.getElementById("table").style.visibility = "hidden";
    document.getElementById("showButton").innerHTML = "Show Data";
    document.getElementById("showButton").onclick = getSubmit;
}
