<section>
    <h1>Pridruži igru lutriji</h1>
    
        <form id="formIgra" class="formPriReg" enctype="multipart/form-data" method="post" name="formIgra" action="">
                    <p>
                        <input type="hidden" value="{$idKor}" id="sakriven">
                       <label id="lutrijaLabela" for="lutrija">Lutrija: </label>
                       <select id="lutrija" name="lutrija" required="">
                        </select><br><br>
                        <label id="igraLabela" for="lutrija">Igra: </label>
                        <select id="igra" name="igra" required="">
                        </select>
                        <br><br><br>           
                        <input type="submit" name="submit" class="buttons" form="formIgra" value="Ažuriraj">
        </form>
      
<br><br>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../javascript/ekrzina_jquery.js"></script>


