<?php get_header(); ?>


    <section class="panel">
        <div class="container-wide">
            <div class="panel-login">
                <header>
                    <h2 class="h2 panel-login__title">admin login</h2>
                </header>
                <form name="jwt-form" class="jwt-form" action="/admin-panel">
                    <div class="panel-login--form-group">
                        <label for="panel-login--email"><?= __('User name') ?></label>
                        <input type="text" id="panel-login--email" name="log" required>
                    </div>

                    <div class="panel-login--form-group">
                        <label for="panel-login--password">Password</label>
                        <input type="password" id="panel-login--password" name="pwd" required>
                    </div>
                    <div class="panel-login--form-group panel-login--form-group--btn">
                        <button type="submit" class="btn btn--sign-in"><?= __('Sign in') ?></button>
                    </div>
                    <p class="message message--not-response"><?= __('Sorry, but there is some problem, try again later') ?></p>
                    <p class="message message--validation js-error"></p>
                </form>
            </div>
        </div>
    </section>


<?php
get_footer();
