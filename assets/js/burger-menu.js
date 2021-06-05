jQuery(document).ready(function () {
  jQuery(".header__burger-menu").click(function (event) {
    jQuery(".header__burger-menu, .header__mobile-menu").toggleClass("active");
    jQuery(".attached-post__description, .footer__social-icon").toggleClass("display-none");
    jQuery("body").toggleClass("lockscroll"); //block scroll when menu is open
  });
});

