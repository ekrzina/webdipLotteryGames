
        <section>

            <h1>Obrazac</h1>

            <div id="poruke" class="prikazPoruka"></div>
            <div id="timer" class="timerClass"></div>


            <label for="prikaz">Prikaz elemenata obrasca: </label>
            <select name="prikaz" id="prikaz" form='obrazacform'>
                <option value="odaberi" selected>Odaberi</option>
                <option value="vodoravno">Vodoravno</option>
                <option value="okomito">Okomito</option>
            </select>


            <form novalidate id="obrazacform" class="formPriReg" enctype="multipart/form-data" method="post" name="form1" action="">

                <fieldset>
                    <legend>Osnovni podaci</legend>
                    <p>

                        <label for="idOznaka">ID: </label>
                        <input type="number" id="idOznaka" name="idOznaka" required="required" value="1" disabled="">

                        <label id="nazivLabela" for="naziv">Naziv: </label>
                        <input type="file" id="naziv" name="naziv">

                        <label id="dvLabela" for="datumIVrijeme">Datum i vrijeme: </label>
                        <input type="text" id="datumIVrijeme" name="datumIVrijeme" required="required">


                        <label id="labelaKategorija" for="kategorija">Kategorija: </label>

                        <select id="kategorija" name="kategorija[]" multiple="multiple" size="3" required="required">
                            <option value="0">Grafički dizajn</option>
                            <option value="1">Interijerni dizajn</option>
                            <option value="2">Vrtlarstvo</option>
                            <option value="3">Izrada namještaja</option>
                            <option value="4">Rukotvorine</option>
                            <option value="5">Proizvodnja hrane</option>
                            <option value="6">Ostalo</option>
                        </select><br>

                        <label id="opisLabela" for="opis">Opis:</label>
                        <textarea id="opis" name="opis" rows="5" cols="65" required="required" placeholder="Unesite opis..."></textarea>                    

                        <input type="hidden" name="sakrivenSamNeVidisMe" value="1000000">


                </fieldset>

                <fieldset>
                    <legend>Pojedinosti</legend>
                    <p>

                        <label for="boja">Boja proizvoda: </label>
                        <input id="boja" name="boja" type="color"/>

                        <label for="cijena">Cijena proizvoda (5-500 kn): </label>
                        <input id="cijena" name="cijena" type="range" min="5" max="1000" /> 

                        <label id="telefonLabela" for="telefon">Kontakt telefon: </label>
                        <input id="telefon" name="telefon" type="tel" placeholder="+385-xx-xxx-xxx" required="required" />

                        <label id="urlLabela" for="urlProizvod">URL adresa proizvoda: </label>
                        <input id="urlProizvod" name="urlProizvod" type="url" placeholder="https://www.foi.unizg.hr" required="required" />

                    </p>
                </fieldset>

            </form>
            <input id="buttonObrazac" type="submit" name='submit' form="obrazacform" value=" Pošalji ">

        </section>
        
<br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>