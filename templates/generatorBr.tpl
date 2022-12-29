 <h3>Generator slučajnih brojeva</h3>

        <form id="randomBroj" style="background-color: #282A35; color: white; padding: 24px;" method="get" name="randomBroj" action="">
                    <br><br><p><label for="brojOd">Početni broj: </label>
                        <input type="number" id="brojOd" name="brojOd"><br>
                        <br>
                        <label for="brojDo">Završni broj: </label>
                        <input type="number" id="brojDo" name="brojDo"><br>                 
                        <br>
                        <label for="brojBrojeva">Broj brojeva: </label>
                        <input type="number" id="brojBrojeva" name="brojBrojeva"><br>
                        <br>
                        <input type="submit" name="generiraj" class="buttons" form="randomBroj" value="Generiraj"><br>
        </form>
    
    <br><br>
    {if isset($smarty.cookies.genBroj)}
    <h4>Rezultat: {$smarty.cookies.genBroj}<h4>
    {/if}
    <br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="javascript/ekrzina_jquery.js"></script>
