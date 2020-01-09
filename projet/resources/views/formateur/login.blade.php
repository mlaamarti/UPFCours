@extends('layouts.header')
@section('title', 'authentication')

<div uk-height-viewport="offset-top: true; offset-bottom: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-1-3@m uk-width-1-2@s uk-margin-auto">
        <div class="uk-card-default uk-padding uk-card-small border-radius-6">
            <a href="../index.html" class="admin-logo"><i class="fas fa-graduation-cap"></i> UPFCours</a>
            <!-- Login tab -->
            <div id="login" class="tabcontent tab-default-open animation: uk-animation-slide-right-medium">
                <h2 class="uk-text-bold"> Log in </h2>
                <p class="uk-text-muted uk-margin-remove-top uk-margin-small-bottom"> Fill blank to log your account</p>
                <div class="uk-form-label"> Email address </div>
                <div class="uk-inline">
                    <span class="uk-form-icon"><i class="far fa-User icon-medium"></i></span>
                    <input class="uk-input uk-form-width-large" placeholder="name@example.com" type="text" required>
                </div>
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand@m uk-margin-small-bottom">
                        <div class="uk-form-label">Password</div>
                    </div>
                    <div class="uk-width-auto@m">
                        <a href="#" class="tablinks uk-text-small " onclick="openTabs(event, 'forget')"> Lost password? </a>
                    </div>
                </div>
                <div class="uk-inline uk-margin-small-bottom">
                    <span class="uk-form-icon"><i class="fas fa-key icon-medium"></i></span>
                    <input class="uk-input uk-form-width-large" name="password" id="password" placeholder="Password" type="password">
                </div>
                <div>
                    <label>
                        <input class="uk-checkbox" type="checkbox" data-show-pw="#password">
                        <span class="checkmark uk-text-small"> Show password  </span>
                    </label>
                </div>
                <div class=" uk-flex-middle" uk-grid>
                    <div class="uk-width-expand@m">
                        <input class="uk-button uk-button-success" type="submit" class="button" value="Sign in">
                    </div>
                </div>
            </div>

            <!-- forget tab -->
            <div id="forget" class="tabcontent animation: uk-animation-slide-bottom-medium">
                <h2 class="uk-text-bold"> Forget password  </h2>
                <p class="uk-text-muted uk-margin-remove-top uk-margin-small-bottom">to reset your password fill inter your email</p>
                <div>
                    <div class="uk-form-label">Email address</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon"><i class="fas fa-lock icon-medium"></i></span>
                        <input class="uk-input uk-form-width-large" placeholder="name@example.com" type="text">
                    </div>
                </div>
                <div class="uk-margin">
                    <input class="uk-button uk-button-success" type="submit" class="button" value="Reset password">
                </div>
                <span class="uk-text-small">
                            <a href="#" class="tablinks uk-text-bold" onclick="openTabs(event, 'login')"> Sign in  </a>
                        </span>

            </div>
        </div>
    </div>
</div>

<script>
    // Listen for clicks in the document
    document.addEventListener('click', function (event) {

        // Check if a password selector was clicked
        var selector = event.target.getAttribute('data-show-pw');
        if (!selector) return;

        // Get the passwords
        var passwords = document.querySelectorAll(selector);

        // Toggle visibility
        Array.from(passwords).forEach(function (password) {
            if (event.target.checked === true) {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        });
    }, false);
</script>
</body>
</html>

