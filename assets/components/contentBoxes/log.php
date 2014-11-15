<section id="log" class="contentBox" title="log" >

	<h2>point.log(console log)</h2>
    <button id="logInputToggle">></button>
    <input id="logInput" type="text" placeholder="text to be logged in console" />
    <button id="logButton" class="button">log</button>
    <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
    dolor in hendrerit in vulputate velit esse molestie consequat,
    vel illum dolore eu feugiat nulla facilisis at vero eros et
    accumsan et iusto odio dignissim qui blandit praesent luptatum
    zzril delenit augue duis dolore te feugait nulla facilisi.
    Nam liber tempor cum soluta nobis eleifend option congue
    nihil imperdiet doming id quod mazim placerat facer possim
    assum. Typi non habent claritatem insitam; est usus legentis
    in iis qui facit eorum claritatem. Investigationes
    demonstraverunt lectores legere me lius quod ii legunt saepius.
    Claritas est etiam processus dynamicus, qui sequitur mutationem
    consuetudium lectorum. Mirum est notare quam littera gothica,
    quam nunc putamus parum claram, anteposuerit litterarum formas
    humanitatis per seacula quarta decima et quinta decima. Eodem
    modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
    in futurum.</p>
    
    <script>
        $("#logInputToggle").click(function() {
          $("#logInput").stop().animate({
            width: "toggle"
          }, point.config.slideTime, point.config.easing, function() {
              return true;
          });
        });

        $("#logInput").keyup(function () { 
            var inputText = $("#logInput").val();
            point.log.custom(inputText);
            $("#logOutputBox").text(inputText);
          });

          $("#logButton").click(function() {
              point.log.custom($("#logInput").val());
            });        
    </script>

</section>
