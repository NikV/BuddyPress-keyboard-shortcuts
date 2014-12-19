/*
 * The JS file to make sure the keyboard shortcut works.
 */
jQuery(document).ready(function ($) {

    'use strict';

    if (window.addEventListener) {
        window.addEventListener("keydown", function (submit_activity) {
            if (submit_activity.keyCode === 13 && submit_activity.shiftKey) {

                if ($('#whats-new')) {
                    document.getElementById('aw-whats-new-submit').click();
                }


            }
        });
    }
});
