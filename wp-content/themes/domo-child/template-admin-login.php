<?php
/**
 * Template Name: Admin login
 **/

get_header(); ?>

    <section class="panel">
        <div class="container-wide">
            <div class="panel-login">
                <header>
                    <h2 class="h2 panel-login__title">admin login</h2>
                </header>
                <div class="panel-login--form-group">
                    <label for="panel-login--email">Email</label>
                    <input type="text" id="panel-login--email" name="panel-login--email" placeholder="Email">
                </div>

                <div class="panel-login--form-group">
                    <label for="panel-login--password">Password</label>
                    <input type="text" id="panel-login--password" name="panel-login--password" placeholder="Password">
                </div>
                <div class="panel-login--form-group panel-login--form-group--btn">
                    <a href="/admin-panel"><button class="btn btn--sign-in">Sign in</button></a>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
