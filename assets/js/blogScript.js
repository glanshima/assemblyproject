$(document).ready(function () {
    $('.menu-toggle').on('click', function () {
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
    });

    $('.post-wrapper.blog').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplayspeed: 2000,
        nextArrow: $('carousel.blog .next'),
        prevArrow: $('carousel.blog .prev'),
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 770,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

        ]

    });

});


ClassicEditor.create(document.querySelector('#body'), {
    toolbar: [
        'heading',
        '|',
        'alignment:left',
        'alignment:right',
        'alignment:center',
        'alignment:justify',
        'bold',
        'italic',
        'link',
        'bulletedList',
        'numberedList',
        'blockQuote'
    ],
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'ck-heading_heading1'
            },
            {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
            }
        ]
    }
})
    .catch(error => {
        console.log(error);
    });