<?php
/* Smarty version 4.0.0, created on 2022-05-30 21:26:58
  from '/var/www/html/ekrzina/templates/multimedija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62951a82578f76_62334507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634d92eb6cca88a2fadb35a0bf588b56cb8eaf0a' => 
    array (
      0 => '/var/www/html/ekrzina/templates/multimedija.tpl',
      1 => 1653406170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62951a82578f76_62334507 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="prazno" class="nemaPodataka"></div>
        <section class="gridIma">

            <!--klasa pod elementom... za sad-->

            <div class="formaGrid">
                <h1>Audio i video</h1>
                <form id="multiForm" class="formPriReg" method="get" name="multiForm" action="http://barka.foi.hr/WebDiP/2021/materijali/zadace/ispis_forme.php">
                    <p><label for="pretrazivac">Unesite pojam: </label>
                        <input type="search" id="pretrazivac" name="pretrazivac" required="required">
                        <input type="button" id="gumbPretraga" class= "buttonMulti" form="multiForm" value=" Pretraži ">  
                </form>
            </div>


            <div class="formaGrid">
                <figure class="podaci">
                    <h1 class="videoNazivResponzivno">Tutorial | Papirnati ždral</h1>
                    <iframe class="glavniVideo" height='650' style="border: dashed #181818 4px;" src="https://www.youtube.com/embed/Gyh3kcLuqrc?autoplay=1&mute=1"></iframe>
                </figure>
            </div>

            <div class="video1Grid">
                <figure class="podaci">
                    <h1 class="videoNazivResponzivno">Rezanje kolačića</h1>
                    <video controls class="videoLook">
                        <source src="materijali/pexels-roman-odintsov-6090694.mp4" type="video/mp4">
                    </video>   
                    <p>Video možete pronaći na: <a href="https://www.pexels.com">https://www.pexels.com</a></p>
                </figure>
            </div>

            <div class="video2Grid">
                <figure class="podaci">
                    <h1 class="videoNazivResponzivno">Tutorial | Origami dinosaur</h1>
                    <iframe class="videoLook" src="https://www.youtube.com/embed/KZmxdYxKGow"></iframe>
                    <p>Video možete pronaći na: <a href="https://www.youtube.com/watch?v=KZmxdYxKGow">https://www.youtube.com/watch?v=KZmxdYxKGow</a></p>
                </figure>
            </div>

            <div class="video1Grid">
                <figure class="podaci">
                    <h1 class="videoNazivResponzivno">Listovi knjiga</h1> 
                    <video controls class="videoLook">
                        <source src="materijali/pexels-melike-b-8994820.mp4" type="video/mp4">
                    </video>
                    <p>Video možete pronaći na: <a href="https://www.pexels.com">https://www.pexels.com</a></p>
                </figure>
            </div>


            <div class="video2Grid">
                <figure class="podaci">
                    <h1 class="videoNazivResponzivno">Ljubičasta boja</h1>   
                    <video controls class="videoLook">
                        <source src="materijali/pexels-free-creative-stuff-5649206.mp4" type="video/mp4">
                    </video>
                    <p>Video možete pronaći na: <a href="https://www.pexels.com">https://www.pexels.com</a></p>
                </figure>
            </div>

            <br><br>

            <div class="audioGrid">
                <figure class="podaci">
                    <h1 class="multimedijskiNaslov">Benjamin Tissot | Better Days</h1>

                    <audio controls>
                        <source src="https://www.bensound.com/bensound-music/bensound-betterdays.mp3">
                    </audio>
                    <p>Preuzeto s: <a href="www.bensound.com">www.bensound.com</a></p>
                </figure>

                <figure class="podaci">
                    <h1 class="multimedijskiNaslov">Benjamin Tissot | Acoustic Breeze</h1>

                    <audio controls>
                        <source src="https://www.bensound.com/bensound-music/bensound-acousticbreeze.mp3">
                    </audio>
                    <p>Preuzeto s: <a href="www.bensound.com">www.bensound.com</a></p>
                </figure>

                <figure class="podaci">
                    <h1 class="multimedijskiNaslov">Benjamin Tissot | Hip Jazz</h1>

                    <audio controls>
                        <source src="https://www.bensound.com/bensound-music/bensound-hipjazz.mp3">
                    </audio>
                    <p>Preuzeto s: <a href="www.bensound.com">www.bensound.com</a></p>
                </figure>

                <figure class="podaci">
                    <h1 class="multimedijskiNaslov">Benjamin Tissot | Jazzy Frenchy</h1>

                    <audio controls>
                        <source src="https://www.bensound.com/bensound-music/bensound-jazzyfrenchy.mp3">
                    </audio>
                    <p>Preuzeto s: <a href="www.bensound.com">www.bensound.com</a></p>
                </figure>
            </div>
        </section>
        <br><br>

<?php }
}
