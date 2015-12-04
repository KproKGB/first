function show() {
    document.getElementById('popup').style.display='block';
    document.getElementById('front').style.display='block';
}
function hide() {
    document.getElementById('popup').style.display='none';
    document.getElementById('front').style.display='none';
}
jQuery(function($) {
    $('#phone').mask('+38 (999) 999-9999');
});