$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        items: 1,
        autoplay:true,
        center:true,
        autoplayTimeout:5000,
        smartSpeed: 1500
    });
    
    (function ($, W, D)
    {
        var JQUERY4U = {};

        JQUERY4U.UTIL =
                {
                    setupFormValidation: function ()
                    {
                        //form validation rules
                        $("#contactForm").validate({
                            rules: {
                                first_name: "required",
                                email: {
                                    required: true,
                                    email: true
                                },
                                phone: {
                                    required: true,
                                    number: true,
                                    minlength: 10
                                },
                                message: {
                                    required: true,
                                }
                            },
                            messages: {
                                first_name: "Please enter your firs tname",
                                email: "Please enter a valid email address",
                                phone: {
                                    required: "Please enter a  valid phone number",
                                    number: "Please enter a  valid phone number",
                                    minlength: "Please enter a valid phone number" 
                                },
                                message: "Please enter a message"
                            },
                            submitHandler: function (form) {
                                form.submit();
                            }
                        });
                    }
                }

        //when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

    })(jQuery, window, document);
});

function initMap() {
    var mapDiv = document.getElementById('map');
    var point = {lat: 44.540, lng: -78.546};
    var map = new google.maps.Map(mapDiv, {
        center: point,
        zoom: 8
    });
    
    var marker = new google.maps.Marker({
        position: point,
        map: map,
        title: 'Demo!'
    });
}

