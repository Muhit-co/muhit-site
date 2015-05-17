<?php

// Mailchimp subscription form snippet
kirbytext::$tags['mailchimp'] = array(
  'attr' => array(
    ''
  ),
  'html' => function($tag) {
    return '<div id="mc_embed_signup" class="u-mb20">
              <form action="//muhit.us10.list-manage.com/subscribe/post?u=6a8d1b17307f12faebaebd16e&amp;id=95f5915f21" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">

                  <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_6a8d1b17307f12faebaebd16e_95f5915f21" tabindex="-1" value=""></div>

                  <div class="field-group">
                    <label for="mce-EMAIL"></label>
                    <input type="email" value="" name="EMAIL" class="required email u-mr10" id="mce-EMAIL" placeholder="Email Address">
                    <input type="submit" value="&#62147;" name="subscribe" id="mc-embedded-subscribe" class="btn">
                  </div>

                </div>
              </form>
            </div>';
  }
);

?>