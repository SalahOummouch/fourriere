(function (jQuery) {
    "use strict";
    // data-mode="click" for using event
    // data-dark="false" for property
    // icon class // la-sun // la-moon
    const storageDark = localStorage.getItem('dark')
    if (storageDark !== 'null') {
        changeMode(storageDark)
    }
    jQuery(document).on("change", '.change-mode input[type="checkbox"]' ,function (e) {
        const dark = $(this).attr('data-active');
        if (dark === 'true') {
            $(this).attr('data-active','false')
        } else {
            $(this).attr('data-active','true')
        }
        changeMode(dark)
    })
    function changeMode (dark) {
        const html = jQuery('html')
        if (dark === 'true') {
            $('#dark-mode').prop('checked', true).attr('data-active', 'false')
            $('.darkmode-logo').removeClass('d-none')
            $('.light-logo').addClass('d-none')
            html.attr('data-bs-theme', 'dark');
        } else {
            $('#dark-mode').prop('checked', false).attr('data-active', 'true');
            $('.light-logo').removeClass('d-none')
            $('.darkmode-logo').addClass('d-none')
            html.attr('data-bs-theme', 'light');
        }
        updateLocalStorage(dark)
        const event = new CustomEvent("ChangeColorMode", {detail: {dark: dark} });
        document.dispatchEvent(event);
    }
    function updateLocalStorage(dark) {
        localStorage.setItem('dark', dark)
    }
    
})(jQuery)
