$(document).ready(function () {
    $("#toggleBtn").click(function () {
        if ($("#password").attr("type") === "password") {
            $("#toggleBtn").text("Hide");
            $("#password").attr("type", "text");
        } else {
            $("#toggleBtn").text("Show");
            $("#password").attr("type", "password");
        }
    })
})