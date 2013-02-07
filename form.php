<!--

Based off pForm
http://www.phpform.org/

-->

<div id="form_container">
    <form  method="post" action="">
        <ul>
            <li>
                <label class="description">Name</label>
                <span>
                    <input id="first" type="text" maxlength="255" size="7" value="" />
                    <label for="first">First</label>
                </span>
                <span>
                    <input id="last" type="text" maxlength="255" size="12" value="" />
                    <label for="last">Last</label>
                </span> 
            </li>
            <li>
                <label class="description" for="email">Email</label>
                <div>
                    <input id="email" type="text" maxlength="255" value="" /> 
                </div> 
            </li>
            <li>
                <label class="description">Date</label>
                <span>
                    <input id="month" size="1" maxlength="2" value="" type="text" /> /
                    <label for="month">MM</label>
                </span>
                <span>
                    <input id="day" size="1" maxlength="2" value="" type="text" /> /
                    <label for="day">DD</label>
                </span>
                <span>
                    <input id="year" size="4" maxlength="4" value="" type="text" />
                    <label for="year">YYYY</label>
                </span>
            </li>
            <li>
                <label class="description">Time</label>
                <span>
                    <input id="hour" size="2" type="text" maxlength="2" value="" /> : 
                    <label for="hour">HH</label>
                </span>
                <span>
                    <input id="minute" size="2" type="text" maxlength="2" value="" /> : 
                    <label for="minute">MM</label>
                </span>
                <span>
                    <input id="second" size="2" type="text" maxlength="2" value="" />
                    <label for="second">SS</label>
                </span>
                <span>
                    <select style="width:4em" id="element_3_4">
                        <option value="AM" >AM</option>
                        <option value="PM" >PM</option>
                    </select>
                    <label>AM/PM</label>
                </span> 
            </li>
            <li>
                <label class="description" for="guests">Number of Guests</label>
                <div>
                    <input id="guests" type="text" maxlength="255" value="" /> 
                </div> 
            </li>
            <li>
                <input id="submit" class="button_text" type="submit" value="Submit" />
            </li>
        </ul>
    </form>
</div>