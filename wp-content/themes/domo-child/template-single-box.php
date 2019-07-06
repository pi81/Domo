<?php
/**
 * Template Name: Single Box
 **/

get_header(); ?>

    <section>
        <div class="container-wide">
            <div class="single-box__casing">
                <span class="single-box__nav single-box__nav--prev"></span>
                <div class="single-box">
                    <div class="box-wrapper">
                        <a href="/card-list" class="box js-box">
                            <div class="side front"></div>
                            <div class="side top"></div>
                            <div class="side left"></div>
                            <div class="side right"></div>
                            <div class="side open bottom1"></div>
                            <div class="side open bottom2"></div>
                            <div class="side open bottom3"></div>
                            <div class="side open bottom4"></div>
                            <div class="side back"></div>
                        </a>
                    </div>

                    <h3 class="domo-box__name">Name</h3>
                    <div class="domo-box__aside">
                    <span class="domo-box__emoji" data-counter="1">
                        <div class="emoji  emoji--love">
                            <div class="emoji__heart"></div>
                        </div>
                    </span>
                        <span class="domo-box__emoji" data-counter="5">
                        <div class="emoji  emoji--yay">
                            <div class="emoji__face">
                                <div class="emoji__eyebrows"></div>
                                <div class="emoji__mouth"></div>
                            </div>
                        </div>
                    </span>
                        <span class="domo-box__emoji" data-counter="3">
                        <div class="emoji  emoji--wow">
                            <div class="emoji__face">
                                <div class="emoji__eyebrows"></div>
                                <div class="emoji__eyes"></div>
                                <div class="emoji__mouth"></div>
                            </div>
                        </div>
                    </span>
                    </div>
                    <span class="single-box__add-new" class="btn btn__new-domo" id="btn__new-domo" data-toggle="domo-card__new"></span>
                </div>
                <span class="single-box__nav single-box__nav--next"></span>
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
