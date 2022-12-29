<section>
    <h1>Dodaj igru</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <input type="hidden" id="sakriven" value="{$id}">
                       <label id="lutrijaLabela" for="lutrija">Lutrija: </label>
                        <select id="lutrija" name="lutrija">
                        </select><br><br>
                        <label for="imeLabela">Naziv igre na sreću: </label>
                        <input id="ime" name="ime" type="text" size="25" required="required" /><br>
                        <br>
                        <label for="cijena">Cijena listića: </label>
                        <input id="cijena" name="cijena" type="text" size="25" required="required" /><br>
                        <br>
                        <label id="labelaPocetak" for="dVPocetak">Datum i vrijeme početka igre: </label>
                        <input id="dVPocetak" name="dVPocetak" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" /><br>
                        <br>
                        <label id="labelaKraj" for="dVKraj">Datum i vrijeme kraja igre: </label>
                        <input id="dVKraj" name="dVKraj" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" /><br>
                        <br>
                        {if $smarty.session.uloga > 3}
                        <label id="labelaBr" for="brojIzvlacenja">Broj izvlačenja: </label>
                        <input id="brojIzvlacenja" name="brojIzvlacenja" type="number" size="25" required="required"/><br>
                        <br>
                        <label id="labelaFond" for="fond">Fond po pogođenom broju: </label>
                        <input id="fond" name="fond" type="text" size="25" required="required"/><br>
                        <br> 
                        {/if}
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Dodaj igru">
        </form>
      
<br><br>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>


