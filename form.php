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
                    <input id="first" name="first" type="text" maxlength="255" size="9" value="" />
                    <label for="first">First</label>
                </span>
                <span>
                    <input id="last" name="last" type="text" maxlength="255" size="14" value="" />
                    <label for="last">Last</label>
                </span> 
            </li>
            <li>
                <label id="email" class="description" name="email" for="email">Email</label>
                <div>
                    <input id="email" name="email" type="text" maxlength="255" size="25" value="" /> 
                </div> 
            </li>
            <li>
                <label id="date" class="description">Date</label>
                <span>
                    <input id="month" name="month" size="2" maxlength="2" value="" type="text" /> /
                    <label for="month">MM</label>
                </span>
                <span>
                    <input id="day" name="day" size="2" maxlength="2" value="" type="text" /> /
                    <label for="day">DD</label>
                </span>
                <span>
                    <input id="year" name="year" size="6" maxlength="4" value="" type="text" />
                    <label for="year">YYYY</label>
                </span>
            </li>
            <li>
                <label id="time" class="description">Time</label>
                <span>
                    <input id="hour" name="hour" size="4" type="text" maxlength="2" value="" /> : 
                    <label for="hour">HH</label>
                </span>
                <span>
                    <input id="minute" name="minute" size="4" type="text" maxlength="2" value="" />
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