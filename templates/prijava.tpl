<section>
    <h1>Prijavi se</h1>
    <form id="formPrijava" class="formPriReg" method="post" name="formPrijava" action="">
                    <p><label for="korime" id="korimeLabela">Korisničko ime: </label>
                        {if isset($smarty.cookies.korisnikPrijava)}
                            <input type="text" id="korime" name="korime" size="30" maxlength="30" autofocus="autofocus" value="{$smarty.cookies.korisnikPrijava}"><br>
                        {/if}
                        {if !isset($smarty.cookies.korisnikPrijava)}
                            <input type="text" id="korime" name="korime" size="30" maxlength="30" autofocus="autofocus" value=""><br>
                        {/if}
                        <br>
                        <label for="lozinka" id="lozinkaLabela">Lozinka: </label>
                        <input type="password" id="lozinka" name="lozinka" size="30" maxlength="30"><br>
                        <br>
                        <a id="zaboravih">Zaboravljena lozinka</a>
                        <br><br>
                        <label>Zapamti me:</label>
                        <br>
                        <input id="da" name="zapamti" type="radio" value="DA"/>
                        <label for="da">DA</label><br>
                        <input id="ne" name="zapamti" type="radio" value="NE" checked/>
                        <label for="ne">NE</label><br>
                        <br>
                        <input type="submit" name="submit" class="buttons" form="formPrijava" value="Prijavi se">
        </form>

<br><br>

<br><br>
</section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../javascript/ekrzina_jquery.js"></script>
        