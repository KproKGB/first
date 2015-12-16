jQuery(function($) {
    $('#phone').mask('+38 (999) 999-9999');
    $('#phone2').mask('+38 (999) 999-9999');
});
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
function setLang() {
    if(getCookie('lang') == 'ru') {
        ruMenu();
    } else {
        enMenu();
    }
}
function enMenu() {
    document.cookie = "lang=en";
}
function ruMenu() {
    document.cookie = "lang=ru";
}