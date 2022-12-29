<h1>Igre na sreću</h1>
<table>
    <caption>Prikaz igara</caption>
    <thead>
        <tr>
            <th>ID igre</th>
            <th>Naziv</th>
            <th>Broj izvlačenja</th>
            <th>Fond po pogođenom broju</th>
            <th>Cijena listića</th>
            <th>Datum i vrijeme početka</th>
            <th>Datum i vrijeme završetka</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="7" style="font-weight:bold; font-variant-caps: all-small-caps; font-size: 16px; "><p>Kliknite na ID igre za njezino ažuriranje</p></td>
    </tr>
    </tfoot>
</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br>
<h4>Za dodavanje igre kliknite<a href="dodajIgruM.php"> ovdje.</a><h4>
<h4>Za pridruživanje igre Vašoj lutriji kliknite<a href="pridruziIgruM.php"> ovdje.</a><h4>
        

        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="i.nazivIgre" selected>Nazivu igre</option>
                <option value="i.fondPoPogodenomBroju">Fondu po broju</option>
            </select>
        <input type="hidden" id="sakriven" value="{$moderator}">
        <br><br>
        
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>

<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>

