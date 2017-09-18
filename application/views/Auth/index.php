<link href="/public/css/auth.css" rel="stylesheet">
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
    <h3 class="text2">Please log in or sign up to view your result! We’re excited to share this travel opportunity with you!</h3>
</div>

        <div class="l-signup-body">
            <div class="container">
                <div class="l-box-content specPadding1">
                    <section class="signup-select">
                        <form name="" method="post" action="int/xhr/json/sign-up-for-spotify-fb.php" id="js-register-with-facebook" novalidate="novalidate">
                            <div class="hidden ajax-spinner"></div>
                            <input type="hidden" id="data_source" name="data_source" value="www">


                            <input type="hidden" id="creation_flow" name="creation_flow">

                            <div class="content">
                                <div class="js-general-error alert alert-info hidden" data-error="Oops! Something went wrong, please try again or check out our testing <a href=&quot;/help/&quot;>help area</a>"></div>
                                <a href="#" class="btn btn-facebook btn-block js-signup-fb" id="select-button-signup-fb">
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
                            <input type="hidden" id="sp_csrf" name="sp_csrf"
                                   value="Boa_VuaYEsiwchCbcens5Q3AgPkOUt9RfqHHM0P6OLw"></form>
                    </section>
                    <section class="register">
                        <div class="content">
                            <h2 class="center hdr-l">Sign up with your email address</h2>

                            <form id="js-register-with-email" method="post"
                                  action="/int/xhr/json/sign-up-for-spotify.php" novalidate="novalidate">
                                <div class="hidden ajax-spinner"></div>

                                <input type="hidden" id="data_source" name="data_source" value="www">


                                <input type="hidden" id="invisible_captcha" name="invisible_captcha" value="false">

                                <div class="js-general-error alert alert-info hidden"
                                     data-error="Oops! Something went wrong, please try again or check out our testing <a href=&quot;/help/&quot;>help area</a>"></div>

                                <input type="hidden" id="sp_csrf" name="sp_csrf"
                                       value="Boa_VuaYEsiwchCbcens5Q3AgPkOUt9RfqHHM0P6OLw">

                                <input type="hidden" id="creation_flow" name="creation_flow">

                                <input type="hidden" id="register-forward-url" name="forward_url"
                                       value="https://www.spotify.com/int/signup/success/">

                                <input type="hidden" id="register-pre-tick-eula" name="signup_pre_tick_eula"
                                       value="true">

                                <fieldset>
                                    <ul>
                                        <li>
                                            <label class="sr-only required" for="register-email">Email</label>
                                            <input type="email" id="register-email" name="email" required="required"
                                                   maxlength="100" placeholder="Email"
                                                   data-msg-email="The email address you supplied is invalid."
                                                   data-msg-remote="We're sorry, that email is taken."
                                                   data-msg-required="Please enter your email."
                                                   data-rule-remote="/int/xhr/json/isEmailAvailable.php">
                                        </li>

                                        <li>
                                            <label class="sr-only required" for="register-confirm-email">Confirm
                                                email</label>
                                            <input type="email" id="register-confirm-email" name="confirm_email"
                                                   required="required" maxlength="100" placeholder="Confirm email"
                                                   data-msg-email="The email address you supplied is invalid."
                                                   data-msg-equalto="Email address doesn't match."
                                                   data-msg-required="Please enter your email."
                                                   data-rule-equalto="#register-email">
                                        </li>
                                        <li>
                                            <label class="sr-only required" for="register-password">Password</label>
                                            <input type="password" id="register-password" name="password"
                                                   required="required" autocomplete="off" maxlength="100"
                                                   placeholder="Password"
                                                   data-msg-minlength="Your password is too short."
                                                   data-msg-required="Please choose a password."
                                                   data-rule-minlength="4">
                                        </li>

                                        <li>
                                            <label class="sr-only required" for="register-username">Username</label>
                                            <input type="text" id="register-username" name="username"
                                                   required="required" autocapitalize="off" autocorrect="off"
                                                   autocomplete="off" maxlength="30" placeholder="Username"
                                                   data-msg-minlength="Your username is too short."
                                                   data-msg-remote="We're sorry, that username is not available."
                                                   data-msg-required="Please choose a username."
                                                   data-msg-nowhitespace="Spaces are not allowed in usernames."
                                                   data-msg-forbiddenchars="Your username contains characters that we do not allow"
                                                   data-rule-nowhitespace="true"
                                                   data-rule-forbiddenchars="^[a-zA-Z0-9_\-\+]+$"
                                                   data-rule-minlength="4"
                                                   data-rule-remote="/int/xhr/json/isUsernameAvailable.php">
                                        </li>

                                        <li id="li-dob" class="controls-dob"
                                            data-error-age="Sorry, but you don't meet Spotify's age requirements.">
                                            <label for="register-age">Date of birth:</label>
                                            <div id="register-dob" class="register-dob">
                                                <div class="controls controls-month">
                                                    <select id="register-dob-month" name="dob_month" required="required"
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
                                                    <input type="number" id="register-dob-day" name="dob_day"
                                                           required="required" max="31" maxlength="2" min="1"
                                                           pattern="[0-9]*" placeholder="day" class="dob"
                                                           data-msg-required="When were you born?"
                                                           data-msg-number="Please enter a valid day of the month."
                                                           data-msg-min="Please enter a valid day of the month."
                                                           data-msg-max="Please enter a valid day of the month.">
                                                </div>
                                                <div class="controls controls-year">
                                                    <input type="number" id="register-dob-year" name="dob_year"
                                                           required="required" min="1900" max="2004" maxlength="4"
                                                           pattern="[0-9]*" placeholder="year" class="dob"
                                                           data-msg-required="When were you born?"
                                                           data-msg-number="Please enter a valid year."
                                                           data-msg-min="Please enter a valid year."
                                                           data-msg-max="Sorry, but you don't meet Spotify's age requirements.">
                                                </div>
                                            </div>
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

                                        </li>

                                        <li id="li-thirdparty" class="thirdparty">
                                            <label for="register-thirdparty" class="checkbox">
                                                <input type="checkbox" id="register-thirdparty" name="thirdpartyemail"
                                                       class="thirdparty" value="true">
                                                Share my registration data with Spotify's content providers for
                                                marketing purposes.
                                            </label>
                                        </li>


                                        <li id="li-recaptcha">
                                            <div class="g-recaptcha"
                                                 data-sitekey="6LdaGwcTAAAAAJfb0xQdr3FqU4ZzfAc_QZvIPby5">
                                                <div style="width: 304px; height: 78px;">
                                                    <div>
                                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdaGwcTAAAAAJfb0xQdr3FqU4ZzfAc_QZvIPby5&amp;co=aHR0cHM6Ly93d3cuc3BvdGlmeS5jb206NDQz&amp;hl=ru&amp;v=r20170915175810&amp;size=normal&amp;cb=4nvsnxhoj3xs"
                                                                title="виджет reCAPTCHA" width="304" height="78"
                                                                frameborder="0" scrolling="no"
                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                    </div>
                                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                              class="g-recaptcha-response"
                                                              style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha"
                                                   id="hiddenRecaptcha" data-error="Please confirm you're not a robot.">

                                        </li>

                                        <li class="li-terms-notick">
                                            <p class="notice">By clicking on Sign up, you agree to <a
                                                        href="/int/legal/end-user-agreement/" target="_blank">Spotify's
                                                    terms &amp; conditions</a> and <a href="/int/legal/privacy-policy/"
                                                                                      target="_blank">privacy policy</a>
                                            </p>
                                        </li>

                                    </ul>
                                </fieldset>
                                <a href="#" id="register-button-email-submit"
                                   class="btn btn-green btn-block js-signup-email-submit">
                                    Sign up
                                </a>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</div>
