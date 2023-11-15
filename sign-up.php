<!DOCTYPE html><!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon May 22 2023 00:22:31 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="homezy.webflow.io" data-wf-page="63f4b2357336d34056b5cddb" data-wf-site="63dccc1ba88f450bf57ed4e1"
      data-wf-status="1">
<?php
include "./inc/head.php";
?>
<body>
<div class="auth-page-wrap">
    <div class="auth-page-content-wrap">
        <a href="index.php" class="auth-page-brand w-nav-brand">
            <img
                    src="uploads-ssl.webflow.com/64087d5b4d8daebee9cc0cf2/logo.png"
                    loading="lazy" alt="Estately - Logo" class="navbar-brand-image"/></a>
        <div class="utility-page-content w-form">
            <div class="utility-page-heading auth"><h4 class="color-dark-100">Create Your Account</h4>
                <div class="text-l">Get started by creating your account below</div>
            </div>
            <form id="wf-form-Sign-Up-Form" name="wf-form-Sign-Up-Form" data-name="Sign Up Form"
                  redirect="/utility-pages/sign-in" data-redirect="/utility-pages/sign-in" method="post"
                  class="utility-page-form">
                <div class="form-cols">
                    <div class="form-col">
                        <div class="form-row medium-margin-bottom">
                            <div class="form-label"><label>First Name</label></div>
                            <input type="text" class="text-field w-input" maxlength="256" name="First-Name"
                                   data-name="First Name" placeholder="First Name" id="First-Name-2" required=""/></div>
                    </div>
                    <div class="form-col">
                        <div class="form-col">
                            <div class="form-row medium-margin-bottom">
                                <div class="form-label"><label>Last Name</label></div>
                                <input type="text" class="text-field w-input" maxlength="256" name="Last-Name"
                                       data-name="Last Name" placeholder="Last Name" id="Last-Name-2" required=""/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row medium-margin-bottom">
                    <div class="form-label"><label>Email Address</label></div>
                    <input type="email" class="text-field w-input" maxlength="256" name="Email-Address"
                           data-name="Email Address" placeholder="Email Address" id="Email-Address" required=""/></div>
                <div class="form-cols">
                    <div class="form-col">
                        <div class="form-row small-margin-bottom">
                            <div class="form-label"><label>Password</label></div>
                            <input type="password" class="text-field w-input" maxlength="256" name="Password"
                                   data-name="Password" placeholder="Password" id="Password-2" required=""/></div>
                    </div>
                    <div class="form-col">
                        <div class="form-col">
                            <div class="form-row small-margin-bottom">
                                <div class="form-label"><label>Confirm Password</label></div>
                                <input type="password" class="text-field w-input" maxlength="256"
                                       name="Confirm-Password" data-name="Confirm Password" placeholder="Password"
                                       id="Confirm-Password" required=""/></div>
                        </div>
                    </div>
                </div>
                <div class="form-row medium-margin-bottom">
                    <div class="form-checkboxes"><label class="w-checkbox checkbox-field"><input type="checkbox"
                                                                                                 id="Agreement"
                                                                                                 name="Agreement"
                                                                                                 data-name="Agreement"
                                                                                                 required=""
                                                                                                 class="w-checkbox-input checkbox"/><span
                                    class="checkbox-label w-form-label" for="Agreement">I accept the <a href="#"
                                                                                                        class="link">Terms of Service</a> and <a
                                        href="#" class="link">Privacy Policy</a></span></label></div>
                </div>
                <div class="auth-page-form-buttons"><input type="submit" value="Sign Up" data-wait="Please wait..."
                                                           class="button w-button"/>

                </div>
                <div class="form-footnotes">
                    <div>Already have an account? <a href="login.php" class="link">Sign In</a></div>
                </div>
            </form>

        </div>
    </div>

</div>
<?php
include_once './inc/footer.php'
?>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63dccc1ba88f450bf57ed4e1"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="uploads-ssl.webflow.com/63dccc1ba88f450bf57ed4e1/js/webflow.89be3d23c.js"
        type="text/javascript"></script>
</body>
</html>