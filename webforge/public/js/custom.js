jQuery(function($) {
    $('#phone').mask('+38 (999) 999-9999');
    $('#phone2').mask('+38 (999) 999-9999');
});
function enMenu() {
    document.cookie = "lang=en";
}
function ruMenu() {
    document.cookie = "lang=ru";
}