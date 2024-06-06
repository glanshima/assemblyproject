(function () {

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        let org_Name = document.querySelector(".organization-name ");
        var sticky = header_navbar.offsetTop;

        if (window.scrollY > sticky) {
            header_navbar.classList.add("sticky");
            org_Name.classList.add("reveal");
        } else {
            header_navbar.classList.remove("sticky");
            org_Name.classList.remove("reveal");
        }

        const navBarColl = document.querySelector('.navbar-collapse.sub-menu-bar.collapse');


        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };

    // section menu active
    function onScroll(event) {
        let sections = document.querySelectorAll('.page-scroll');
        let scrollPos = window.scrollY || document.documentElement.scrollTop || document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {

            let currLink = sections[i];
            let val = currLink.getAttribute('href');
            let refElement = document.querySelector(val);
            let scrollTopMinus = scrollPos + 100;
            if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
                document.querySelector('.page-scroll').classList.remove('active');
                currLink.classList.add('active');

            } else {
                currLink.classList.remove('active');
            }
        }
    };

    window.document.addEventListener('scroll', onScroll);

    // for menu scroll 
    var pageLink = document.querySelectorAll('.page-scroll');

    pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
            e.preventDefault();

            document.querySelector(elem.getAttribute('href')).scrollIntoView(

                {
                    behavior: 'smooth',
                    offsetTop: 1 - 60,
                });

            /* closeNavBarNine(); */
        });
    });

    "use strict";

})();


/* create observer for scrolling */

let options = {
    root: document.querySelector("#scrollArea"),
    rootMargin: "-500px",
    threshold: 1,
};

const commissioners = document.querySelectorAll('.main-content_posts .post');
const postWraps = document.querySelectorAll('.main-content_posts .post-wrap');

const observer = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.toggle('show')

                if (entry.isIntersecting) observer.unobserve(entry.target)

            }

        })
    }, {
    threshold: 0.5,

}
)

postWraps.forEach(commissioner => {
    observer.observe(commissioner)

})

const pageTitles = document.querySelectorAll('.main-section-title')

const observeTitle = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.toggle('goRight');

            if (entry.isIntersecting) observeTitle.unobserve(entry.target)
        }
    });
}, {
    threshold: 1,
})

pageTitles.forEach(title => {

    observeTitle.observe(title)
})


const carousel = document.querySelector('.carousel')


const ObservCarosel = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.toggle('show')
            if (entry.isIntersecting) ObservCarosel.unobserve(entry.target)
        }
    })
}, {
    threshold: .5,
}
)
ObservCarosel.observe(carousel)


/* mouse over movements */

const footerLogo_Text = document.querySelector('.logo-text')
const footerLogoTextObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('showing')

        } if (!entry.isIntersecting) {
            entry.target.classList.remove('showing')
        }
    })
})

footerLogoTextObserver.observe(footerLogo_Text)

const pageLinks = document.querySelectorAll('.page-change')


function showActivePage() {
    pageLinks.forEach(pLink => {
        pLink.addEventListener('click', () => {
            console.log(pLink)
        })
    })
}

/* showActivePage() */

const Nav9 = document.querySelector('.sub-menu-bar')
Nav9.addEventListener('click', () => {
    if (Nav9.classList.contains('show')) {
        Nav9.classList.remove('show');
        navbarTogglerNine.classList.toggle('active')

    }

}
)

window.addEventListener('resize', () => {
    if (window.innerWidth >= 992) {
        Nav9.classList.remove('show');
        navbarTogglerNine.classList.remove('active')
    }
})
const navBavNineLinks = document.querySelectorAll('.navbar-nav .nav-item')
function closeNavBarNine() {
    const subMenuBar = document.querySelector('sub-menu-bar')

    navBavNineLinks.forEach(link => {
        link.addEventListener('click', () => {


        })
    })


}


