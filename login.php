<!DOCTYPE html>

<html data-wf-domain="homezy.webflow.io" data-wf-page="63f4b2467717a0d2403a2638" data-wf-site="63dccc1ba88f450bf57ed4e1"
      data-wf-status="1">
<?php
include "./inc/head.php";
?>
<body>
<div class="auth-page-wrap">
    <div class="auth-page-content-wrap"><a href="index.php" class="auth-page-brand w-nav-brand"><img
                    src="assets/64087d5b4d8daebee9cc0cf2/logo.png"
                    loading="lazy" alt="Estately - Logo" class="navbar-brand-image"/></a>
        <div class="utility-page-content w-form">
            <div class="utility-page-heading auth"><h4 class="color-dark-100">Welcome back!</h4>
                <div class="text-l">Access your account by signing in below</div>
            </div>
            <form id="wf-form-Sign-In-Form" name="wf-form-Sign-In-Form" data-name="Sign In Form"
                  redirect="/homes/home-v1" data-redirect="/homes/home-v1" method="post" class="utility-page-form">
                <div class="form-row medium-margin-bottom">
                    <div class="form-label"><label>Email Address</label></div>
                    <input type="email" class="text-field w-input" maxlength="256" name="Email-Address"
                           data-name="Email Address" placeholder="Email Address" id="Email-Address" required=""/></div>
                <div class="form-row small-margin-bottom">
                    <div class="form-label"><label>Password</label></div>
                    <input type="password" class="text-field w-input" maxlength="256" name="Password"
                           data-name="Password" placeholder="Password" id="Password-2" required=""/></div>
                <div class="form-row medium-margin-bottom">
                    <div class="form-checkboxes"><label class="w-checkbox checkbox-field"><input type="checkbox"
                                                                                                 id="Remember"
                                                                                                 name="Remember"
                                                                                                 data-name="Remember"
                                                                                                 class="w-checkbox-input checkbox"/><span
                                    class="checkbox-label w-form-label" for="Remember">Remember Me</span></label><a
                                href="/utility-pages/forgot-password" class="link">Forgot Password?</a></div>
                </div>
                <div class="auth-page-form-buttons">
                    <input type="submit" value="Sign In" data-wait="Please wait..."
                                                           class="button w-button"/>


                </div>
                <div class="form-footnotes">
                    <div>Don’t you have an acount? <a href="sign-up.php" class="link">Sign Up</a></div>
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
<script src="assets/63dccc1ba88f450bf57ed4e1/js/webflow.89be3d23c.js"
        type="text/javascript"></script>
</body>
</html>