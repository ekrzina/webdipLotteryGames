<h1>Moji listići</h1>

<br>
<table>
    <caption>Podaci o mojim listićima</caption>
    <thead>
        <tr>
            <th>ID listića</th>
            <th>Kontakt telefon</th>
            <th>Email adresa</th>
            <th>Adresa stanovanja</th>
            <th>Odabrani brojevi</th>
            <th>Broj pogođenih brojeva</th>
            <th>Status listića</th>
            <th>Ukupna dobit</th>
            <th>Pošalji zahtjev</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="10" style="font-weight:bold; font-variant-caps: all-small-caps; font-size: 16px; "><p>Kliknite na ID listića za njegovo ažuriranje</p></td>
    </tr>
    </tfoot>
</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br>
<form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="s.status">Statusu listića</option>
                <option value="lis.brojPogodenihBrojeva">Broju pogođenih brojeva</option>
            </select>
        <br><br>
        
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>
<br><br>
<a href="statistikaDobitkaGubitka.php">Prikaži moju statistiku</a>
<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>
