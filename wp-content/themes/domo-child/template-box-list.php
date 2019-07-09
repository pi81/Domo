<?php
/**
 * Template Name: Box list
 **/

get_header(); ?>

    <section>
        <div class="container-wide box-list__container">
            <div class="box-list">
                <div class="box-list__elem">
                    <h2 class="box-list__elem--title">January</h2>
                </div>
                <div class="box-list__elem">
                    <h2 class="box-list__elem--title">February</h2>
                </div>
                <div class="box-list__elem">
                    <h2 class="box-list__elem--title">March</h2>
                </div>
                <div class="box-list__elem">
                    <h2 class="box-list__elem--title">April</h2>
                </div>
                <div class="box-list__elem">
                    <h2 class="box-list__elem--title">May</h2>
                </div>
                <div class="box-list__elem">
                    <h2 class="box-list__elem--title">June</h2>
                </div>
                <div class="box-list__elem box-list__elem--plus">
                    <span class="box-list__add-new single-box__add-new" class="btn btn__new-domo" id="btn__new-domo" data-toggle="domo-card__new"></span>
                </div>
            </div>
        </div>

        <!-- new domo popup -->
        <div id="domo-card__new" class="domo-card__new">
            <div class="domo-card__new--emoticon">
              <span class="domo-box__emoji" data-counter="1">
                <div class="emoji  emoji--love">
                    <div class="emoji__heart"></div>
                </div>
              </span>
            </div>
            <div class="domo-card__new--form-group">
                <label for="domo-card__new--to">Do:</label>
                <input type="text" id="domo-card__new--to" name="domo-card__new--to" placeholder="imię">
            </div>

            <div class="domo-card__new--form-group">
                <label for="domo-card__new--from">Od:</label>
                <input type="text" id="domo-card__new--from" name="domo-card__new--from" placeholder="imię">
            </div>

            <div class="domo-card__new--form-group">
                <textarea id="domo-card__new--comment" type="textarea" name="domo-card__new--comment" max-length="6000" rows="7" placeholder="napisz kilka słów za co chciałbyś podziękować"></textarea>
            </div>

            <div class="domo-card__new--form-group domo-card__new--form-group--btn">
                <button class="btn btn--save">Save changes</button>
                <button class="btn btn--cancel">Cancel</button>
            </div>
        </div>
        <!-- new domo popup end -->

        <!-- popup for password -->
        <div id="domo-pass" class="domo-pass">
            <div class="domo-pass__group">
                <label for="domo-pass-input">Hasło: </label>
                <input type="text" id="domo-pass-input" name="password" placeholder="hasło">
            </div>
            <div class="domo-pass__group">
                <button class="btn btn--submit domo-pass__submit">Submit</button>
            </div>
        </div>

        <!-- popup for password end -->
    </section>


<?php
get_footer();
