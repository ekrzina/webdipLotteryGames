<section>
        <h2>Popularne igre:</h2>
        <div class="banner">
            <div class="insideBanner">
                <a href="index.php"><img src="materijali/eurojackpot.jpg" alt="eurojackpot"></a>
                <a href="index.php"><img src="materijali/o_10715335_1280.jpg" alt="loto7"></a>
               <a href="index.php"> <img src="materijali/360_F_60431529_oABBtthZiQlxyPn4LiGWWA42vevaKBTy.jpg" alt="bingo"></a>
                <a href="index.php"><img src="materijali/keno.png" alt="keno"></a>

            </div>            
        </div>
        
        <div class="igraGalerija">
            <div><a href="obrasci/zaigraj.php">Zaigraj</a></div>
        </div>
        
        <br><br>
        <h1 style="font-size:32px;">Rang lista korisnika po osvojenim dobitcima</h1>
            <div class="art" id="rangLista">
                <div id="pUnos">
                </div><br><br>
                <div id='gumb'>
    <button type='button' id='prva' class='buttons'>Prva</button>
    <button type='button' id='prethodna' class='buttons'>Prethodna</button>
    <button type='button' id='sljedeca' class='buttons'>Sljedeća</button>
    <button type='button' id='zadnja' class='buttons'>Zadnja</button>
</div><br>
            </div>
        <br>
        <form id="formRang" class="formPriReg" method="post" name="formRang" action="">
                    <p><label for="datumOd">Datum od: </label>
                       
                        <input type="date" id="datumOd" name="datumOd"><br>
                        <label for="datumDo">Datum do: </label>
                        <input type="date" id="datumDo" name="datumDo"><br>
                        
                        <br>
                        <!--ideja!! neka ne bude submit, nego button-->
                        <input type="button" name="filter" id="filter" class="buttons" form="formRang" value="Filtriraj listu">
        </form>
        
        </section>
<section>
    <h2>Informacije</h2>
    <ul>
        <li><a href="informacije/o_autoru.html">O autoru</a></li>
        <li><a href="informacije/dokumentacija.html">Dokumentacija</a></li>
        </ul>
</section>
        <br><br>
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="javascript/ekrzina_jquery.js"></script>