<?php

function create_blackkettle_form() {
return '<div class="mailchimpform">
    <form id="mc-embedded-subscribe-form" class="validate" action="http://blackkettleranch.us3.list-manage2.com/subscribe/post?u=bce96288a959436a667b70b31&amp;id=d51b31a093" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
        <h3><span style="color: #660000;">Subscribe to our newsletter</span></h3>
        <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address</label>
            <input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" />
        </div>
        <div class="mc-field-group">
            <label for="mce-FNAME">First Name</label>
            <input id="mce-FNAME" class="" name="FNAME" type="text" value="" />
        </div>
        <div class="mc-field-group">
            <label for="mce-LNAME">Last Name </label>
            <input id="mce-LNAME" class="" name="LNAME" type="text" value="" />
        </div>
        Powered by <a title="MailChimp - email marketing made easy and fun" href="http://eepurl.com/TzYtL">MailChimp</a>
        <div id="mce-responses" class="clear"></div>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;">
            <input name="b_bce96288a959436a667b70b31_d51b31a093" type="text" value="" /></div>
        <div>
            <input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
    </form>
</div>';

}

function create_blackkettle_facebook() {
    return '<div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/blackkettleranch" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=387&amp;href=https%3A%2F%2Fwww.facebook.com%2Fblackkettleranch&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;width=120">
    <span style="vertical-align: bottom; width: 116px; height: 20px;">
        <iframe name="f1be82e55b4f388" width="120px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FuN4_cXtJDGb.js%3Fversion%3D42%23cb%3Df28c35213fcfc64%26domain%3Dblackkettleranch.com%26origin%3Dhttp%253A%252F%252Fblackkettleranch.com%252Ff8d7340ad45d1c%26relation%3Dparent.parent&amp;container_width=387&amp;href=https%3A%2F%2Fwww.facebook.com%2Fblackkettleranch&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;width=120" style="border: none; visibility: visible; width: 116px; height: 20px;" class=""></iframe>
    </span>
</div>
<br />
<br />';

}

?>