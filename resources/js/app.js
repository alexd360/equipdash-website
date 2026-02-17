import './bootstrap';

/*=======================
    Location Carousel (Homepage) - Slick Slider
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    if (typeof jQuery === 'undefined') return;

    jQuery('.location-slider').slick({
        centerMode: true,
        centerPadding: '110px',
        slidesToShow: 4,
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '16px',
                    slidesToShow: 2
                }
            }
        ]
    });

    jQuery('.brand-slider').slick({
        centerMode: true,
        slidesToShow: 6,
        centerPadding: '72px',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '14px',
                    slidesToShow: 2,
                    dots: true,
                }
            }
        ]
    });
});

/*=======================
    Header Scroll
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('header');

    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
});

/*=======================
    Mobile Menu Toggle
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu');
    const mainHeader = document.querySelector('.main-header');

    if (menuToggle && mainHeader) {
        menuToggle.addEventListener('click', function (e) {
            e.preventDefault();
            menuToggle.classList.toggle('active');
            mainHeader.classList.toggle('active');
        });
    }
});

/*=======================
    Mega Menu — Desktop hover + Mobile slide
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    function handleMenuEvents() {
        const menuItems = document.querySelectorAll('.menu-items');
        const backBtns = document.querySelectorAll('.back-menu');

        if (window.innerWidth <= 991) {
            // Mobile: click to slide sub-menu in from right
            menuItems.forEach(function (item) {
                // Remove old listener by cloning
                const newItem = item.cloneNode(true);
                item.parentNode.replaceChild(newItem, item);

                newItem.addEventListener('click', function (e) {
                    const subMenu = this.nextElementSibling;
                    if (!subMenu || !subMenu.classList.contains('sub-menu')) return;
                    e.preventDefault();

                    subMenu.style.display = 'block';
                    subMenu.style.right = '-100%';
                    subMenu.style.left = 'auto';

                    requestAnimationFrame(function () {
                        subMenu.style.transition = 'right 0.3s';
                        subMenu.style.right = '0';
                    });
                });
            });

            backBtns.forEach(function (btn) {
                const newBtn = btn.cloneNode(true);
                btn.parentNode.replaceChild(newBtn, btn);

                newBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const subMenu = this.parentElement;
                    subMenu.style.right = '-100%';

                    setTimeout(function () {
                        subMenu.style.display = 'none';
                        subMenu.style.transition = '';
                    }, 300);
                });
            });
        } else {
            // Desktop: reset any inline styles from mobile
            document.querySelectorAll('.sub-menu').forEach(function (sm) {
                sm.style.right = '';
                sm.style.left = '';
                sm.style.display = '';
                sm.style.transition = '';
            });
        }
    }

    handleMenuEvents();
    window.addEventListener('resize', handleMenuEvents);
});

/*=======================
    Mega Menu — Category tabs hover (desktop)
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    function initCategoryTabs() {
        document.querySelectorAll('.sub-menu').forEach(function (subMenu) {
            const tabs = subMenu.querySelectorAll('.category-tabs');
            if (!tabs.length) return;

            if (window.innerWidth >= 991) {
                // Desktop: hover activation
                tabs[0].classList.add('active');

                tabs.forEach(function (tab) {
                    tab.addEventListener('mouseenter', function () {
                        tabs.forEach(function (t) { t.classList.remove('active'); });
                        this.classList.add('active');
                    });
                });
            } else {
                // Mobile: click toggle for category items
                const categoryItems = subMenu.querySelectorAll('.category-item');
                if (categoryItems.length > 0) {
                    categoryItems[0].classList.add('active');
                    categoryItems[0].style.display = 'block';
                }

                subMenu.querySelectorAll('.click-toggle').forEach(function (toggle) {
                    toggle.addEventListener('click', function (e) {
                        e.preventDefault();
                        const parentTab = this.parentElement;
                        const item = parentTab.querySelector('.category-item');
                        if (!item) return;

                        const currentActive = subMenu.querySelector('.category-item.active');
                        if (currentActive && currentActive !== item) {
                            currentActive.classList.remove('active');
                            currentActive.style.display = 'none';
                        }

                        if (item.classList.contains('active')) {
                            item.classList.remove('active');
                            item.style.display = 'none';
                        } else {
                            item.classList.add('active');
                            item.style.display = 'block';
                        }
                    });
                });
            }
        });
    }

    initCategoryTabs();
});

/*=======================
    FAQ Accordion
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    const faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;

    // Hide all content, show first
    faqItems.forEach(function (item, index) {
        const content = item.querySelector('.faq-content');
        if (!content) return;

        if (index === 0) {
            item.classList.add('active');
            content.style.display = 'block';
        } else {
            content.style.display = 'none';
        }
    });

    document.querySelectorAll('.faq-header').forEach(function (header) {
        header.addEventListener('click', function () {
            const parentItem = this.closest('.faq-item');
            const content = parentItem.querySelector('.faq-content');

            if (parentItem.classList.contains('active')) {
                parentItem.classList.remove('active');
                slideUp(content, 300);
            } else {
                // Close all others
                faqItems.forEach(function (item) {
                    if (item !== parentItem) {
                        item.classList.remove('active');
                        slideUp(item.querySelector('.faq-content'), 300);
                    }
                });

                parentItem.classList.add('active');
                slideDown(content, 300);
            }
        });
    });
});

/*=======================
    Feature Tab Switching (features pages)
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.features_menu').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            const targetId = this.dataset.target;
            if (!targetId) return;

            e.preventDefault();
            document.querySelectorAll('.features_menu').forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');

            document.querySelectorAll('.features_main').forEach(function (m) { m.classList.remove('active'); });
            const target = document.getElementById(targetId);
            if (target) target.classList.add('active');
        });
    });
});

/*=======================
    Pricing Monthly/Annual Toggle
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    const monthlyBtn = document.getElementById('monthly');
    const annuallyBtn = document.getElementById('annually');

    if (monthlyBtn && annuallyBtn) {
        monthlyBtn.addEventListener('click', function () {
            document.querySelectorAll('.price_value.monthly').forEach(function (el) { el.style.display = ''; });
            document.querySelectorAll('.price_value.annually').forEach(function (el) { el.style.display = 'none'; });
            document.querySelectorAll('.price_month').forEach(function (el) { el.textContent = '/ month'; });
            monthlyBtn.classList.add('active');
            annuallyBtn.classList.remove('active');
        });

        annuallyBtn.addEventListener('click', function () {
            document.querySelectorAll('.price_value.monthly').forEach(function (el) { el.style.display = 'none'; });
            document.querySelectorAll('.price_value.annually').forEach(function (el) { el.style.display = ''; });
            document.querySelectorAll('.price_month').forEach(function (el) { el.textContent = '/ month (Billed Annually)'; });
            annuallyBtn.classList.add('active');
            monthlyBtn.classList.remove('active');
        });
    }
});

/*=======================
    Feature Page Sticky Nav
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('.dth-nav');
    const heightFeatures = document.querySelector('.height_features');

    if (!nav || !heightFeatures) return;

    heightFeatures.style.display = 'none';
    const navOffset = nav.offsetTop;

    window.addEventListener('scroll', function () {
        if (window.scrollY >= navOffset) {
            nav.classList.add('sticky');
            heightFeatures.style.display = '';
        } else {
            nav.classList.remove('sticky');
            heightFeatures.style.display = 'none';
        }

        // Highlight active menu item
        document.querySelectorAll('.dth-menu a').forEach(function (link) {
            const href = link.getAttribute('href');
            if (!href || href.charAt(0) !== '#') return;

            const section = document.querySelector(href);
            if (!section) return;

            const top = section.offsetTop;
            if (window.scrollY >= top - 100 && window.scrollY < top + section.offsetHeight) {
                document.querySelectorAll('.dth-menu li').forEach(function (li) { li.classList.remove('active'); });
                link.parentElement.classList.add('active');
            }
        });
    });

    document.querySelectorAll('.dth-menu a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (!target) return;

            document.querySelectorAll('.dth-menu li').forEach(function (li) { li.classList.remove('active'); });
            this.parentElement.classList.add('active');

            window.scrollTo({
                top: target.offsetTop - 50,
                behavior: 'smooth'
            });
        });
    });

    const firstItem = document.querySelector('.dth-menu li');
    if (firstItem) firstItem.classList.add('active');
});

/*=======================
    Footer Features "Show More"
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    var showMoreBtn = document.querySelector('.show-more-features');
    if (!showMoreBtn) return;

    showMoreBtn.addEventListener('click', function (e) {
        e.preventDefault();
        var featuresMenu = this.closest('.features-menu');
        if (!featuresMenu) return;

        var isExpanded = featuresMenu.classList.contains('expanded');
        if (isExpanded) {
            featuresMenu.classList.remove('expanded');
            this.textContent = 'Show More';
        } else {
            featuresMenu.classList.add('expanded');
            this.textContent = 'Show Less';
        }
    });
});

/*=======================
    Slide Up/Down Helpers
=======================*/
function slideUp(el, duration) {
    if (!el) return;
    el.style.overflow = 'hidden';
    el.style.transitionProperty = 'height, padding, margin';
    el.style.transitionDuration = duration + 'ms';
    el.style.height = el.offsetHeight + 'px';
    el.offsetHeight; // force reflow
    el.style.height = '0';
    el.style.paddingTop = '0';
    el.style.paddingBottom = '0';
    el.style.marginTop = '0';
    el.style.marginBottom = '0';

    setTimeout(function () {
        el.style.display = 'none';
        el.style.removeProperty('height');
        el.style.removeProperty('padding-top');
        el.style.removeProperty('padding-bottom');
        el.style.removeProperty('margin-top');
        el.style.removeProperty('margin-bottom');
        el.style.removeProperty('overflow');
        el.style.removeProperty('transition-property');
        el.style.removeProperty('transition-duration');
    }, duration);
}

function slideDown(el, duration) {
    if (!el) return;
    el.style.removeProperty('display');
    var display = window.getComputedStyle(el).display;
    if (display === 'none') display = 'block';
    el.style.display = display;

    var height = el.offsetHeight;
    el.style.overflow = 'hidden';
    el.style.height = '0';
    el.style.paddingTop = '0';
    el.style.paddingBottom = '0';
    el.style.marginTop = '0';
    el.style.marginBottom = '0';
    el.offsetHeight; // force reflow
    el.style.transitionProperty = 'height, padding, margin';
    el.style.transitionDuration = duration + 'ms';
    el.style.height = height + 'px';
    el.style.removeProperty('padding-top');
    el.style.removeProperty('padding-bottom');
    el.style.removeProperty('margin-top');
    el.style.removeProperty('margin-bottom');

    setTimeout(function () {
        el.style.removeProperty('height');
        el.style.removeProperty('overflow');
        el.style.removeProperty('transition-property');
        el.style.removeProperty('transition-duration');
    }, duration);
}
