/*!
* Start Bootstrap - Creative v7.0.6 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

});

$(document).ready(function() {
    $("#kontakPesan").submit(function(event) {
        event.preventDefault(); // Mencegah form dari submit secara default
        var form = $(this);

        $.ajax({
            url: form.attr("action"),
            method: form.attr("method"),
            data: form.serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status == 200) {
                    $("#SuccessMessage").removeClass("d-none");
                    $("#submitErrorMessage").addClass("d-none");
                    $("#successMessageText").text(response.message);
                    form.trigger("reset");
                } else {
                    $("#SuccessMessage").addClass("d-none");
                    $("#submitErrorMessage").removeClass("d-none");
                    $("#errorMessageText").text(response.message);
                }
            },
            error: function() {
                $("#SuccessMessage").addClass("d-none");
                $("#submitErrorMessage").removeClass("d-none");
                $("#errorMessageText").text("Error sending message!");
            }
        });
    });
});
