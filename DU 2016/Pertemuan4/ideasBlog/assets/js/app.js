var main = function() {
  $(".ideas-blog_menu-btn a").click(function() {
    $('.side-menu').toggle();
  });
};

$(document).ready(main);