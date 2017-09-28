<link href="/public/css/auth.css" rel="stylesheet">
<script>
    var onloadCallback = function () {
        grecaptcha.render('html_element', {
            'sitekey': '6LeRuzEUAAAAANQ0F6K5-p_5VIPR9OL5ugjVsTKS'
        });
    };
</script>
<div class="wrap reboot">
    <div class="sign-up">
        <div class="l-signup-header">
            <div class="container">
                <div class="l-box-content">
                    <a class="spotify-logo" href="/us/"></a>
                </div>
            </div>
        </div>


        <div class="container">
            <h1 class="text1">You’re almost done!</h1>
            <div id="testSlider" class="l-box-content">
                <div id="firstDiv">

                </div>
                <div id="secondDiv">

                </div>
            </div>
            <h3 class="text2">Please log in or sign up to view your result! We’re excited to share this travel
                opportunity with you!</h3>
        </div>

        <div class="l-signup-body">
            <div class="container">
                <div class="l-box-content specPadding1">
                    <section class="signup-select">
                        <form name="" method="post" action="" id="js-register-with-facebook" novalidate="novalidate">

                            <div class="hidden ajax-spinner"></div>
                            <input type="hidden" id="data_source" name="data_source" value="www">
                            <input type="hidden" id="creation_flow" name="creation_flow">

                            <div class="content">
                                <div class="js-general-error alert alert-info hidden"
                                     data-error="Oops! Something went wrong, please try again or check out our testing <a href=&quot;/help/&quot;>help area</a>"></div>
                                <a href="<?php echo $this->facebook->login_url(); ?>"
                                   class="btn btn-facebook btn-block js-signup-fb" id="select-button-signup-fb">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <span id="littleBorderFaceBook"></span>
                                    Sign up with Facebook
                                </a>
                                <fieldset>
                                    <ul>
                                    </ul>
                                </fieldset>
                                <strong class="line-thru">or</strong>
                            </div>
                            <input type="hidden" id="sp_csrf" name="sp_csrf" value="Boa_VuaYEsiwchCbcens5Q3AgPkOUt9RfqHHM0P6OLw">
                        </form>
                    </section>
                    <section class="register">
                        <div class="content">
                            <h2 class="center hdr-l">Sign up with your email address</h2>

                            <form id="js-register-with-email" method="post" action="" novalidate="novalidate">

                                <fieldset>
                                    <ul>
                                        <li>
                                            <label class="sr-only required" for="register_email">Email</label>
                                            <input type="email" placeholder="Email" class="required" id="register_email" name="register_email">
                                        </li>

                                        <li>
                                            <label class="sr-only required" for="register_password">Password</label>
                                            <input type="password" id="register_password" name="register_password" required="required" autocomplete="off" maxlength="100" placeholder="Password">
                                        </li>

                                        <li>
                                            <label class="sr-only required" for="register_username">Full name</label>
                                            <input type="text" id="register_username" name="register_username"
                                                   required="required" autocapitalize="off" autocorrect="off"
                                                   autocomplete="off" maxlength="30" placeholder="Full name"
                                                   data-msg-minlength="Your username is too short."
                                                   data-msg-remote="We're sorry, that username is not available."
                                                   data-msg-required="Please choose a username."
                                                   data-msg-nowhitespace="Spaces are not allowed in usernames."
                                                   data-msg-forbiddenchars="Your username contains characters that we do not allow"
                                                   data-rule-nowhitespace="true"
                                                   data-rule-forbiddenchars="^[a-zA-Z0-9_\-\+]+$"
                                                   data-rule-minlength="4">
                                        </li>

                                        <li id="li-dob" class="controls-dob" data-error-age="Sorry, but you don't meet Spotify's age requirements.">
                                            <label for="register-age">Date of birth:</label>
                                            <div id="register-dob" class="register-dob">
                                                <div class="controls controls-month">
                                                    <select id="register_dob_month" name="register_dob_month" required="required"
                                                            class="dob" data-msg-required="When were you born?">
                                                        <option value="" disabled="disabled" selected="selected">month
                                                        </option>
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="controls controls-day">
                                                    <input type="number" id="register_dob_day" name="register_dob_day"
                                                           required="required" max="31" maxlength="2" min="1"
                                                           pattern="[0-9]*" placeholder="day" class="dob"
                                                           data-msg-required="When were you born?"
                                                           data-msg-number="Please enter a valid day of the month."
                                                           data-msg-min="Please enter a valid day of the month."
                                                           data-msg-max="Please enter a valid day of the month.">
                                                </div>
                                                <div class="controls controls-year">
                                                    <input type="number" id="register_dob_year" name="register_dob_year"
                                                           required="required" min="1900" max="2004" maxlength="4"
                                                           pattern="[0-9]*" placeholder="year" class="dob"
                                                           data-msg-required="When were you born?"
                                                           data-msg-number="Please enter a valid year."
                                                           data-msg-min="Please enter a valid year."
                                                           data-msg-max="Sorry, but you don't meet Spotify's age requirements.">
                                                </div>
                                            </div>
                                            <ul id="errors_financial" class="messages"></ul>
                                        </li>
                                        <li id="li-gender" class="gender">
                                            <label class="sr-only">Gender:</label>
                                            <label for="register-male" class="radio control-inline">
                                                <input type="radio" id="register-male" name="gender" required="required"
                                                       class="gender" data-msg-required="Please indicate your gender."
                                                       value="male">
                                                Male
                                            </label>
                                            <label for="register-female" class="radio control-inline">
                                                <input type="radio" id="register-female" name="gender"
                                                       required="required" class="gender"
                                                       data-msg-required="Please indicate your gender." value="female">
                                                Female
                                            </label>
                                            <ul id="errors_financial" class="messages"></ul>
                                        </li>

                                        <li id="li-thirdparty" class="thirdparty">
                                            <label for="register_thirdparty" class="checkbox">
                                                <input type="checkbox" required="required" id="register_thirdparty" name="thirdpartyemail"  class="thirdparty" value="true" data-msg-required="Please share">
                                                Share my registration data with Gettravely content providers for marketing purposes.
                                            </label>
                                        </li>


                                        <li id="li-recaptcha">
                                                <div id="html_element"></div>
                                        </li>

                                        <li class="li-terms-notick">
                                            <p class="notice">By clicking on Sign up, you agree to <a href="/int/legal/end-user-agreement/" target="_blank">Gettravely terms & conditions</a> and <a href="/int/legal/privacy-policy/" target="_blank">privacy policy</a>
                                            </p>
                                        </li>
                                    </ul>
                                </fieldset>
                                <button type="submit" id="saveNewForm">Sign up</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>