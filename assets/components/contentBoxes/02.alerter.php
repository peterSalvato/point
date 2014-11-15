<section id="alerter" class="contentBox" title="alerter">
	<h2>point.alerter(browser alert)</h2>
    <input id="alerterInput" type="text" placeholder="text to be logged in console" />
    <button id="alerterButton" class="alert button">Alert</button>
    <p class="description">
        <code>point.alerter()</code> is used primarily for debugging purposes. This will launch a browser alert which, when called, will stop all processes until alert is addressed. 
    </p>
    
    <script>
        $("#alerterButton").click(function() {
              point.alerter($("#alerterInput").val());
        });
    </script>

</section>
