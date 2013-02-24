/*

Messy messy messy...

*/

function validateForm() {
    var first = document.forms["reservation"]["first"].value;
    var last = document.forms["reservation"]["last"].value;
    var email = document.forms["reservation"]["email"].value;
    var month = document.forms["reservation"]["month"].value;
    var day = document.forms["reservation"]["day"].value;
    var year = document.forms["reservation"]["year"].value;
    var hour = document.forms["reservation"]["hour"].value;
    var min = document.forms["reservation"]["minute"].value;
    var tod = document.forms["reservation"]["tod"].value;
    var guests = document.forms["reservation"]["guests"].value;
    resetLabels();
    return (checkEmpty(first, last, email, month, day, year, hour, min, tod, guests) && validateInput(month, day, year, email, guests));
}

function resetLabels() {
    $("label#name").css("color", "#FFF");
    $("label#name").html("Name");

    $("label#email").css("color", "#FFF");
    $("label#email").html("Email");

    $("label#date").css("color", "#FFF");
    $("label#date").html("Date");

    $("label#time").css("color", "#FFF");
    $("label#time").html("Time");

    $("label#guests").css("color", "#FFF");
    $("label#guests").html("Number of Guests");
}

function checkEmpty(first, last, email, month, day, year, hour, min, tod, guests) {
    var completed = true;
    if (isEmpty(first)) {
        $("label#name").css("color", "#F00");
        $("label#name").html("* Name is required");
        completed = false;
    }
    if (isEmpty(last)) {
        $("label#name").css("color", "#F00");
        $("label#name").html("* Name is required");
        completed = false;
    }
    if (isEmpty(email)) {
        $("label#email").css("color", "#F00");
        $("label#email").html("* Email is required");
        completed = false;
    }
    if (isEmpty(month)) {
        $("label#date").css("color", "#F00");
        $("label#date").html("* Date is required");
        completed = false;
    }
    if (isEmpty(day)) {
        $("label#date").css("color", "#F00");
        $("label#date").html("* Date is required");
        completed = false;
    }
    if (isEmpty(year)) {
        $("label#date").css("color", "#F00");
        $("label#date").html("* Date is required");
        completed = false;
    }
    if (isEmpty(hour)) {
        $("label#time").css("color", "#F00");
        $("label#time").html("* Time is required");
        completed = false;
    }
    if (isEmpty(minute)) {
        $("label#time").css("color", "#F00");
        $("label#time").html("* Time is required");
        completed = false;
    }
    if (isEmpty(guests)) {
        $("label#guests").css("color", "#F00");
        $("label#guests").html("* Number of guests is required");
        completed = false;
    }
    return completed;
}

function validateInput(month, day, year, email, guests) {
    var success = true;

    if (month > 12 || month < 1) {
        success = false;
        $("label#date").css("color", "#F00");
        $("label#date").html("* Date does not exist");
    }
    if (day > 31 || day < 1) {
        success = false;
        $("label#date").css("color", "#F00");
        $("label#date").html("* Date does not exist");
    }
    if (year < new Date().getFullYear()) {
        success = false;
        $("label#date").css("color", "#F00");
        $("label#date").html("* Date does not exist");
    }
    if (guests <= 0) {
        success = false;
        $("label#guests").css("color", "#F00");
        $("label#guests").html("* At least one guest required");
    }
    if (guests > 15) {
        success = false;
        $("label#guests").css("color", "#F00");
        $("label#guests").html("* No more than 15 per reservation");
    }

    return (success && validateEmail(email));
}

function validateEmail(email) {
    // Get the email
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    // Check if it's a real email
    if (re.test(email)) {
        return true;
    } else {
        $("label#email").css("color", "#F00");
        $("label#email").html("* Please enter a valid email");
        return false;   
    }
}

function isEmpty(field) {
    if (field == null || field =="") {
        return true;
    }
    return false;
}