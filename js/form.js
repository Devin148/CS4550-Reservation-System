// Is the form, with formId, not empty?
// Returns  true if the form is completely filled out
//          false if any element is left blank
function isFormFilled(formId) {
    var valid = true;
    var query = "#" + formId + " :text," +
                "#" + formId + " select";
    $(query).each(function() {
        if ($(this).val() == null || $(this).val() == '') {
            valid = false;
            // Alter background to signify there's an error
            $(this).css("background-color", "#F00");
            $(this).stop().animate({
                backgroundColor: "#FFF"
            });
        }
    });
    return valid;
}

// Is the provided string empty?
function isEmpty(string) {
    return (string == null || string == "") ? true : false;
}

// Is the provided email valid?
function isEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email) ? true : false;
}

// Is the date a real date and is it beyond today's date?
function isDateAllowed(day, month, year) {
    var currentTime = new Date();
    var currentYear = currentTime.getFullYear();
    var currentMonth = currentTime.getMonth() + 1;
    var currentDay = currentTime.getDate();

    if (year > currentYear) {
        if ((day <= 31 && day >=1) &&
            (month <= 12 && month >=1)) {
            return true;
        }
    } else if (year == currentYear) {
        if ((month > currentMonth) &&
            (day <= 31 && day >=1)) {
            return true;
        } else if (month < currentMonth) {
            return false;
        } else {
            if ((day <= 31 && day >=1) &&
                (day > currentDay)) {
                return true;
            }
        }
    }

    return false;
}

// Is the given time during our hours of operation?
function isTimeAllowed(hour, minute, tod) {
    // If it's in the AM, we close at 3am, so the reservation must be between 12am and 2am
    if (tod == "AM") {
        if ((hour == 12 || hour == 1 || hour == 2) &&
            (minute <= 59 && minute >= 0)) {
                return true;
        }
    // If it's in the PM, we open at 12pm and the PM ends at 11:59pm
    } else if (tod == "PM") {
        if ((hour <=12 && hour >=1) &&
            (minute <= 59 && minute >= 0)) {
            return true;
        }
    }
    return false;
}