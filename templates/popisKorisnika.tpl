<h1>Popis korisnika</h1>
<br><br>
<form id='forma' name='forma' method='get' action=''>

</form>
<br><br>
<table>
    <caption>Prikaz korisnika</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ime i prezime</th>
            <th>Korisničko ime</th>
            <th>Datum registracije</th>
            <th>E-mail</th>
            <th>Status korisnika</th>
            <th>Uloga</th>
            <th>Blokiraj / odblokiraj</th>
        </tr>
    </thead>
    <tbody id="theBodyIsRound">
    </tbody>

</table>
<div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div>
<h4>Za prikaz blokiranih korisnika kliknite <a href='blokiraniKorisnici.php'>ovdje.</a></h4>
<br><br>

        <form id="sortForm" class="formPriReg" name="form1" method="post" action="">
        <label for="sortiranje">Sortiraj prema: </label>
            <select name="sortiranje" id="sortiranje">
                <option value="imePrezime" selected>Imenu i prezimenu</option>
                <option value="uloga_idUloga">Ulozi</option>
            </select>
        <br><br>
        
        <input id="sortButton" type="button" name='submit' value=" Sortiraj! ">
        </form>

<br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>


