<?php

function form_create_mailchimp() {
$form_string = '<div class="mailchimpform">
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

return $form_string;
}

?>