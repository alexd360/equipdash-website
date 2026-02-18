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
    var header = document.getElementById('header');

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
    Mobile Menu — Helpers
=======================*/
function isMobile() {
    return window.innerWidth <= 991;
}

function closeMobileMenu() {
    var menuToggle = document.getElementById('menu');
    var mainHeader = document.querySelector('.main-header');
    var overlay = document.getElementById('mobile-overlay');

    if (menuToggle) menuToggle.classList.remove('active');
    if (mainHeader) mainHeader.classList.remove('active');
    if (overlay) overlay.classList.remove('active');
    document.body.classList.remove('mobile-menu-open');

    // Also close any open sub-menus
    document.querySelectorAll('.sub-menu').forEach(function (sm) {
        sm.style.right = '-100%';
        sm.style.display = '';
        sm.style.transition = '';
    });
}

function openMobileMenu() {
    var menuToggle = document.getElementById('menu');
    var mainHeader = document.querySelector('.main-header');
    var overlay = document.getElementById('mobile-overlay');

    if (menuToggle) menuToggle.classList.add('active');
    if (mainHeader) mainHeader.classList.add('active');
    if (overlay) overlay.classList.add('active');
    document.body.classList.add('mobile-menu-open');
}

/*=======================
    Mobile Menu Toggle
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    var menuToggle = document.getElementById('menu');
    var mainHeader = document.querySelector('.main-header');
    var overlay = document.getElementById('mobile-overlay');

    if (menuToggle && mainHeader) {
        menuToggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (menuToggle.classList.contains('active')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    // Close mobile menu when clicking the overlay
    if (overlay) {
        overlay.addEventListener('click', function () {
            closeMobileMenu();
        });
    }

    // Close mobile menu when clicking a direct link (non-submenu)
    if (mainHeader) {
        mainHeader.addEventListener('click', function (e) {
            if (!isMobile()) return;

            var target = e.target.closest('a');
            if (!target) return;

            // If the link is a menu-items with a sub-menu sibling, do NOT close
            if (target.classList.contains('menu-items')) {
                var subMenu = target.nextElementSibling;
                if (subMenu && subMenu.classList.contains('sub-menu')) {
                    return; // handled by submenu slide logic
                }
            }

            // If clicked link has a real href (not #), close the mobile menu
            var href = target.getAttribute('href');
            if (href && href !== '#' && href !== '') {
                closeMobileMenu();
            }
        });
    }

    // Close on window resize past mobile breakpoint
    window.addEventListener('resize', function () {
        if (!isMobile()) {
            closeMobileMenu();
        }
    });
});

/*=======================
    Mega Menu — Desktop hover + Mobile slide
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    var menuItemsBound = false;

    function handleMenuEvents() {
        if (isMobile()) {
            // Mobile: click to slide sub-menu in from right
            if (!menuItemsBound) {
                menuItemsBound = true;
                bindMobileMenuEvents();
            }
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

    function bindMobileMenuEvents() {
        // Use event delegation on the nav to handle menu-items clicks
        var navMenu = document.querySelector('.nav-menu');
        if (!navMenu) return;

        navMenu.addEventListener('click', function (e) {
            if (!isMobile()) return;

            var menuItem = e.target.closest('.menu-items');
            if (!menuItem) return;

            var subMenu = menuItem.nextElementSibling;
            if (!subMenu || !subMenu.classList.contains('sub-menu')) return;

            e.preventDefault();
            e.stopPropagation();

            subMenu.style.display = 'block';
            subMenu.style.right = '-100%';
            subMenu.style.left = 'auto';

            requestAnimationFrame(function () {
                subMenu.style.transition = 'right 0.3s ease';
                subMenu.style.right = '0';
            });
        });

        // Back buttons: use event delegation on the header
        var header = document.getElementById('header');
        if (!header) return;

        header.addEventListener('click', function (e) {
            if (!isMobile()) return;

            var backBtn = e.target.closest('.back-menu');
            if (!backBtn) return;

            e.preventDefault();
            e.stopPropagation();

            var subMenu = backBtn.closest('.sub-menu');
            if (!subMenu) return;

            subMenu.style.transition = 'right 0.3s ease';
            subMenu.style.right = '-100%';

            setTimeout(function () {
                subMenu.style.display = 'none';
                subMenu.style.transition = '';
            }, 300);
        });
    }

    handleMenuEvents();
    window.addEventListener('resize', handleMenuEvents);
});

/*=======================
    Mega Menu — Category tabs hover (desktop) + click (mobile)
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    function initCategoryTabs() {
        document.querySelectorAll('.sub-menu').forEach(function (subMenu) {
            var tabs = subMenu.querySelectorAll('.category-tabs');
            if (!tabs.length) return;

            if (!isMobile()) {
                // Desktop: hover activation
                tabs[0].classList.add('active');

                tabs.forEach(function (tab) {
                    tab.addEventListener('mouseenter', function () {
                        tabs.forEach(function (t) { t.classList.remove('active'); });
                        this.classList.add('active');
                    });
                });
            } else {
                // Mobile: first category-item visible, rest hidden
                var categoryItems = subMenu.querySelectorAll('.category-item');
                categoryItems.forEach(function (item, index) {
                    if (index === 0) {
                        item.classList.add('active');
                        item.style.display = 'block';
                    } else {
                        item.classList.remove('active');
                        item.style.display = 'none';
                    }
                });

                // Click toggle for category items
                subMenu.querySelectorAll('.click-toggle').forEach(function (toggle) {
                    toggle.addEventListener('click', function (e) {
                        if (!isMobile()) return;
                        e.preventDefault();
                        e.stopPropagation();

                        var parentTab = this.parentElement;
                        var item = parentTab.querySelector('.category-item');
                        if (!item) return;

                        var currentActive = subMenu.querySelector('.category-item.active');
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
    var faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;

    // Hide all content, show first
    faqItems.forEach(function (item, index) {
        var content = item.querySelector('.faq-content');
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
            var parentItem = this.closest('.faq-item');
            var content = parentItem.querySelector('.faq-content');

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
            var targetId = this.dataset.tab || this.dataset.target;
            if (!targetId) return;

            e.preventDefault();
            document.querySelectorAll('.features_menu').forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');

            document.querySelectorAll('.features_main').forEach(function (m) { m.classList.remove('active'); });
            var target = document.getElementById(targetId);
            if (target) target.classList.add('active');
        });
    });
});

/*=======================
    Pricing Monthly/Annual Toggle
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    var monthlyBtn = document.getElementById('monthly');
    var annuallyBtn = document.getElementById('annually');

    if (monthlyBtn && annuallyBtn) {
        monthlyBtn.addEventListener('click', function () {
            document.querySelectorAll('.plan .monthly').forEach(function (el) { el.style.display = ''; });
            document.querySelectorAll('.plan .annually').forEach(function (el) { el.style.display = 'none'; });
            monthlyBtn.classList.add('active');
            annuallyBtn.classList.remove('active');
        });

        annuallyBtn.addEventListener('click', function () {
            document.querySelectorAll('.plan .monthly').forEach(function (el) { el.style.display = 'none'; });
            document.querySelectorAll('.plan .annually').forEach(function (el) { el.style.display = ''; });
            annuallyBtn.classList.add('active');
            monthlyBtn.classList.remove('active');
        });
    }
});

/*=======================
    Feature Page Sticky Nav
=======================*/
document.addEventListener('DOMContentLoaded', function () {
    var nav = document.querySelector('.dth-nav');
    var heightFeatures = document.querySelector('.height_features');

    if (!nav || !heightFeatures) return;

    heightFeatures.style.display = 'none';
    var navOffset = nav.offsetTop;

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
            var href = link.getAttribute('href');
            if (!href || href.charAt(0) !== '#') return;

            var section = document.querySelector(href);
            if (!section) return;

            var top = section.offsetTop;
            if (window.scrollY >= top - 100 && window.scrollY < top + section.offsetHeight) {
                document.querySelectorAll('.dth-menu li').forEach(function (li) { li.classList.remove('active'); });
                link.parentElement.classList.add('active');
            }
        });
    });

    document.querySelectorAll('.dth-menu a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            var target = document.querySelector(this.getAttribute('href'));
            if (!target) return;

            document.querySelectorAll('.dth-menu li').forEach(function (li) { li.classList.remove('active'); });
            this.parentElement.classList.add('active');

            window.scrollTo({
                top: target.offsetTop - 50,
                behavior: 'smooth'
            });
        });
    });

    var firstItem = document.querySelector('.dth-menu li');
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
