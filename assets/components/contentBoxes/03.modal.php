<section id="modal" class="contentBox" title="modal">
	<h2>point.modal(modal overlays)</h2>
    <button id="alertButton" class="alert button">Alert</button>
    <button id="confirmButton" class="confirm button">Confirm</button>
    <button id="promptButton" class="prompt button">Prompt</button>
    <button id="yesNoButton" class="yesNo button">yes/no</button>
    <p class="description">This is the text to describe the prompt.modal class.</p>
    
    <script>
    
            $("#alertButton").click(function () {
                point.modal.alert("Alert Headline", "alert message");
            });
            
            $("#confirmButton").click(function () {
                point.modal.confirm("confirm headline", "confirm message text", function () {
                    point.modal.alert("Alert Headline", "alert message");
                });
            });
            
            $("#promptButton").click(function () {
                point.modal.prompt("newPromptVariable", "prompt headline", "prompt message goes here...", function () {
                    point.modal.alert("Alert Headline", point.newPromptVariable);
                });
            });
            
            
            $("#yesNoButton").click(function () {
                point.modal.yesNo("yesNo headline", "yesNo message text", function () {
                    switch (point.modalReturn) {
                        case -1:
                            point.modal.alert("Alert Headline", "you clicked no");
                            break;
                        case 0:
                            point.log.custom("action cancelled");
                            break;
                        case 1:
                            point.modal.alert("Alert Headline", "you clicked yes");
                            break;
                    }
                });
            });

    </script>

</section>
