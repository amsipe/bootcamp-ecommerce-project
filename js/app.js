
$(document).ready(function(){
    $(".carousel").slick({
        arrows: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        asNavFor: '.carousel-nav',
        fade: true
    });
    $(".carousel-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.carousel',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 10000,
        centerPadding: '10px'
    })

    $("#contact-form").validate({
        rules: {
            firstName: "required",
            lastName: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minLength: 10
            },
            comment: {
                required: true,
                minLength: 2
            }
        },
        messages: {
            firstName: "First and last name are required.",
            lastName: "First and last name are required.",
            email: {
                required: "A valid email address is required.",
                email: "Email must be a valid format. Ex. hello@yahoo.com"
              },
            phone: {
                required: "Telephone number is required",
                minLength: "Phone number must be 10 digits including area code. Ex 123-456-7890"
            },
            comment: {
                required: "Please provide feedback."
            }
        }
    })

    $(".cat-selector").on('click', function(){
        var innerText = $(this).text().toLowerCase();
        $('*[data-category]').show();
        if(innerText !== "all"){
            $('*[data-category]').not('*[data-category="'+innerText+'"]').hide();
        }
    })
})


