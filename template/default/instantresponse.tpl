    <h2>{msgInstantResponse}</h2>

    <p>{msgDescriptionInstantResponse}</p>

    <form id="instantform" action="?action=instantresponse" method="post">
    <input id="ajaxlanguage" name="ajaxlanguage" type="hidden" value="{ajaxlanguage}" />
    <fieldset>
        <legend>{msgSearchWord}</legend>
        <input class="inputfield" id="instantfield" type="text" name="search" value="{searchString}" />
    </fieldset>
    </form>
    <script type="text/javascript" src="inc/js/suggest.js"></script>

    <div id="instantresponse">
    {printInstantResponse}
    </div>