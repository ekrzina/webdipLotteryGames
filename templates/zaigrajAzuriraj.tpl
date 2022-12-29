<section>
    <h1>Ažuriraj listić</h1>
    
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <label id="telefonLabela" for="telefon">Kontakt telefon: </label>
                        <input id="telefon" name="telefon" type="text" size="25" required="required" value="{$tel}"" /><br>
                        <br>
                        <label id="emailLabela" for="email">Email adresa: </label>
                        <input id="email" name="email" type="text" size="25" required="required" value="{$mail}"" /><br>
                        <br>
                        <label id="adresaLabela" for="adresa">Adresa stanovanja: </label>
                        <input id="adresa" name="adresa" type="text" size="25" required="required" value="{$adresa}" /><br>
                        <br>
                        <label id="brojeviLabela" for="odabraniBrojevi">Odabrani brojevi: </label>
                        <input id="odabraniBrojevi" name="odabraniBrojevi" type="text" size="25" required="required" value="{$brojevi}" /><br>
                        <br>
                        <label id="nazivLabela" for="naziv">Slika ispunjenog listića: </label>
                        <input type="file" id="naziv" name="naziv"><br>
                        <br>
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Ažuriraj">
        </form>
      
<br><br>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>

