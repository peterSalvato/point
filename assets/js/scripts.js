point.init(function() {
  $(function() {
    // "use strict";

    point.log.custom("\nDocument is ready\n");
  /////////////////////////////////////////////////////////////////////

        $(".contentBox").each(function() {
          var boxId = $(this).attr("title");
          $("body > aside > nav").append("<a href='#' id='" + boxId + "'>" + boxId + "</a>");
        });

  /////////////////////////////////////////////////////////////////////
  }); // /doc ready
  
});//point.init
