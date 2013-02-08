<!--

Based off pForm
http://www.phpform.org/

-->

<div id="form_container">
    <form name="reservation" method="post" onsubmit="return validateForm();" action="reserve.php">
        <ul>
            <li>
                <label class="description">Name</label>
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
                <label class="description" name="email" for="email">Email</label>
                <div>
                    <input id="email" type="text" maxlength="255" value="" /> 
                </div> 
            </li>
            <li>
                <label class="description">Date</label>
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
                <label class="description">Time</label>
                <span>
                    <input id="hour" name="hour" size="2" type="text" maxlength="2" value="" /> : 
                    <label for="hour">HH</label>
                </span>
                <span>
                    <input id="minute" name="minute" size="2" type="text" maxlength="2" value="" /> : 
                    <label for="minute">MM</label>
                </span>
                <span>
                    <input id="second" name="second" size="2" type="text" maxlength="2" value="" />
                    <label for="second">SS</label>
                </span>
                <span>
                    <select style="width:4em" id="tod" name="tod">
                        <option value="AM" >AM</option>
                        <option value="PM" >PM</option>
                    </select>
                    <label>AM/PM</label>
                </span> 
            </li>
            <li>
                <label class="description" for="guests">Number of Guests</label>
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
function validateForm() {
    var first = document.forms["reservation"]["first"].value;
    var last = document.forms["reservation"]["last"].value;

    var email = document.forms["reservation"]["email"].value;

    var month = document.forms["reservation"]["month"].value;
    var day = document.forms["reservation"]["day"].value;
    var year = document.forms["reservation"]["year"].value;

    var hour = document.forms["reservation"]["hour"].value;
    var minute = document.forms["reservation"]["minute"].value;
    var second = document.forms["reservation"]["second"].value;

    var tod = document.forms["reservation"]["tod"].value;

    var guests = document.forms["reservation"]["guests"].value;

    if (isEmpty(first) || isEmpty(last) ||
        isEmpty(email) ||
        isEmpty(month) || isEmpty(day) || isEmpty(year) ||
        isEmpty(hour) || isEmpty(minute) || isEmpty(second) ||
        isEmpty(tod) || isEmpty(guests)) {
        alert("One of the fields has been left empty");
        return false;
    }
}

function isEmpty(field) {
    if (field == null || field =="") {
        return true;
    }
    return false;
}
</script>