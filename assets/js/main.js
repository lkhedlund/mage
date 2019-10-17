(function($) {

    function toggleEl(el, classname = 'open') {
        if (el.hasClass(classname)) {
            el.removeClass(classname);
        } else {
            el.addClass(classname);
        }
    }

    $('.button-menu').click(function(e) {
        e.preventDefault();
        const el = $(this),
            id = el.attr('data-target'),
            drawer = $(`#${ id }`);

        toggleEl(drawer);
        toggleEl(el, 'is-active');
    });

    $(document).on('click', function(event) {
        var target = $(event.target);
        var drawer = target.closest('.drawer').length;
        var menu = target.closest('#menu').length;
        if ( !drawer  && !menu ) {
            toggleEl(drawer);
            toggleEl(menu, 'is-active');
        }
    });
    // END
})(jQuery);
