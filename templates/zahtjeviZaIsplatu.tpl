<h1>Zahtjevi za isplatu</h1>
<table>
    <caption>Popis svih zahtjeva</caption>
    <thead>
        <tr>
            <th>ID zahtjev</th>
            <th>Iznos isplate</th>
            <th>Rok isplate</th>
            <th>Isplata potvrđena</th>
            <th>Isplati</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>
    <tfoot>
    <tr>
    <td colspan="5"></td>
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
                <option value="k.datumIsplate" selected>Roku isplate</option>
                <option value="z.iznosIsplate">Iznosu isplate</option>
            </select>
        <br><br>
        
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>

<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>

