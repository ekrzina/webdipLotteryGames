<section>
    <h1>Ažuriraj igru</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <label for="idIgra">ID igre: </label>
                        <input id="idIgra" name="idIgra" type="text" size="25" required="required" disabled="" value="{$id}" /><br>
                        <br>
                        {if $smarty.session.uloga > 3}
                            <label for="naziv">Naziv igre: </label>
                            <input id="naziv" name="naziv" type="text" size="25" required="required" value="{$naziv}" /><br>
                            <br>
                        {else}
                            <label for="naziv">Naziv igre: </label>
                            <input id="naziv" name="naziv" type="text" size="25" required="required" value="{$naziv}" disabled="" /><br>
                            <br>
                        {/if}
                        {if $smarty.session.uloga > 3}
                            <label for="brojIzvlacenja">Broj izvlačenja: </label>
                            <input id="brojIzvlacenja" name="brojIzvlacenja" type="text" size="25" required="required" value="{$brojIzvlacenja}" /><br>
                            <br>
                        {else}
                            <label for="brojIzvlacenja">Broj izvlačenja: </label>
                            <input id="brojIzvlacenja" name="brojIzvlacenja" type="text" size="25" required="required" value="{$brojIzvlacenja}" disabled="" /><br>
                        <br>
                        {/if}
                        {if $smarty.session.uloga > 3}
                            <label for="fondPoBroju">Fond po pogođenom broju: </label>
                            <input id="fondPoBroju" name="fondPoBroju" type="text" size="25" required="required" value="{$fond}" /><br>
                            <br>
                        {else}
                            <label for="fondPoBroju">Fond po pogođenom broju: </label>
                            <input id="fondPoBroju" name="fondPoBroju" type="text" size="25" required="required" value="{$fond}" disabled="" /><br>
                            <br>
                        {/if}
                        <label for="cijena">Cijena listića: </label>
                        <input id="cijena" name="cijena" type="text" size="25" required="required" value="{$cijena}" /><br>
                        <br>
                        <label id="labelaPocetak" for="dVPocetak">Datum i vrijeme početka igre: </label>
                        <input id="dVPocetak" name="dVPocetak" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" value="{$dVPocetak}" /><br>
                        <br>
                        <label id="labelaKraj" for="dVKraj">Datum i vrijeme kraja igre: </label>
                        <input id="dVKraj" name="dVKraj" type="text" size="25" required="required" placeholder="YYYY-mm-dd HH:ii:ss" value="{$dVKraj}" /><br>
                        <br>                  
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Ažuriraj">
        </form>
      
<br><br>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>


