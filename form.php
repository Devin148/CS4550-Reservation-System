<!--

Based off pForm
http://www.phpform.org/

-->

<div id="form_container">
    <form name="reservation" method="post" onsubmit="return validateForm();" action="reserve.php">
        <ul>
            <li>
                <label id="name" class="description">Name</label>
                <span>
                    <input id="first" name="first" type="text" maxlength="255" size="7" value="" />
                    <label for="first">First</label>
                </span>
                <span>
                    <input id="last" name="last" type="text" maxlength="255" size="12" value="" />
                    <label for="last">Last</label>
                </span> 
            </li>
            <li>
                <label id="email" class="description" name="email" for="email">Email</label>
                <div>
                    <input id="email" name="email" type="text" maxlength="255" value="" /> 
                </div> 
            </li>
            <li>
                <label id="date" class="description">Date</label>
                <span>
                    <input id="month" name="month" size="1" maxlength="2" value="" type="text" /> /
                    <label for="month">MM</label>
                </span>
                <span>
                    <input id="day" name="day" size="1" maxlength="2" value="" type="text" /> /
                    <label for="day">DD</label>
                </span>
                <span>
                    <input id="year" name="year" size="4" maxlength="4" value="" type="text" />
                    <label for="year">YYYY</label>
                </span>
            </li>
            <li>
                <label id="time" class="description">Time</label>
                <span>
                    <input id="hour" name="hour" size="2" type="text" maxlength="2" value="" /> : 
                    <label for="hour">HH</label>
                </span>
                <span>
                    <input id="minute" name="minute" size="2" type="text" maxlength="2" value="" />
                    <label for="minute">MM</label>
                </span>
                <span>
                    <select id="tod" name="tod">
                        <option value="AM" >AM</option>
                        <option value="PM" >PM</option>
                    </select>
                    <label>AM/PM</label>
                </span> 
            </li>
            <li>
                <label id="guests" class="description" for="guests">Number of Guests</label>
                <div>
                    <input id="guests" name="guests" type="text" maxlength="255" value="" /> 
                </div> 
            </li>
            <li>
                <input id="submit" class="button_text" type="submit" value="Submit" />
            </li>
        </ul>
    </form>
</div>

<script>
var first;
var last;
var email;
var month;
var day;
var year;
var hour;
var min;
var tod;
var guests;

function validateForm() {
    first = document.forms["reservation"]["first"].value;
    last = document.forms["reservation"]["last"].value;

    email = document.forms["reservation"]["email"].value;

    month = document.forms["reservation"]["month"].value;
    day = document.forms["reservation"]["day"].value;
    year = document.forms["reservation"]["year"].value;

    hour = document.forms["reservation"]["hour"].value;
    minute = document.forms["reservation"]["minute"].value;

    tod = document.forms["reservation"]["tod"].value;

    guests = document.forms["reservation"]["guests"].value;

    resetLabels();
    return checkEmpty();
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

function checkEmpty() {
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

function isEmpty(field) {
    if (field == null || field =="") {
        return true;
    }
    return false;
}
</script>