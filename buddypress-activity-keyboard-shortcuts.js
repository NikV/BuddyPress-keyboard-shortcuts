/*
 * The JS file to make sure the keyboard shortcut works.
 */
window.addEventListener = function () {
    if (document.getElementById("whats-new")) {
        document.getElementById("whats-new").onkeydown = function (submit) {

            if (submit.keyCode == 13 && submit.metaKey) {
                document.getElementById("aw-whats-new-submit").click();
            }

            else if (submit.keyCode == 13 && submit.ctrlKey) {
                document.getElementById("aw-whats-new-submit").click();
            }
        }
    }
}
