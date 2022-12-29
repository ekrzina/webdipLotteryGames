/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

$(document).ready(function () {
    //nadi prema naslovu za odvajanje sadrzaja jquery prema stranicama, dohvacamo samo naslov prema text
    naslov = $(document).find("title").text();
    console.log(naslov);

    switch (naslov) {

        case "Konfiguracija":

            $("#resetUvjeta").click(function () {
                location.replace("resetirajUvjete.php");
            });

            $("#preuzmiVV").click(function () {
                location.replace("preuzmiVrijeme.php");
            });

            break;

        case "Dnevnik":

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var inHTML = '';

            $.ajax({
                url: '../xml/dnevnikPodaci.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound
                    var inHTML = '';

                    $(xml).find("dnevnik").each(function () {
                        dno = {
                            id: $(this).find('id').text(),
                            datumVrijeme: $(this).find('datumVrijeme').text(),
                            radnja: $(this).find('radnja').text(),
                            upit: $(this).find('upit').text(),
                            idKorisnik: $(this).find('idKorisnik').text(),
                            tipRadnje: $(this).find('tipRadnje').text()
                        };
                        poljePodataka.push(dno);

                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                                '<td>' + poljePodataka[i].radnja + '</td>' +
                                '<td>' + poljePodataka[i].upit + '</td>' +
                                '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                                '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                    }

                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });

            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {
                    inHTML += '<tr>';
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                            '<td>' + poljePodataka[i].radnja + '</td>' +
                            '<td>' + poljePodataka[i].upit + '</td>' +
                            '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                            '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                                '<td>' + poljePodataka[i].radnja + '</td>' +
                                '<td>' + poljePodataka[i].upit + '</td>' +
                                '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                                '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                                '<td>' + poljePodataka[i].radnja + '</td>' +
                                '<td>' + poljePodataka[i].upit + '</td>' +
                                '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                                '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                                '<td>' + poljePodataka[i].radnja + '</td>' +
                                '<td>' + poljePodataka[i].upit + '</td>' +
                                '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                                '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                                '<td>' + poljePodataka[i].radnja + '</td>' +
                                '<td>' + poljePodataka[i].upit + '</td>' +
                                '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                                '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {
                    inHTML += '<tr>';
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].datumVrijeme + '</td>' +
                            '<td>' + poljePodataka[i].radnja + '</td>' +
                            '<td>' + poljePodataka[i].upit + '</td>' +
                            '<td>' + poljePodataka[i].idKorisnik + '</td>' +
                            '<td>' + poljePodataka[i].tipRadnje + '</td></tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            })

            break;

        case "Lutrije":
            //postavljanje tablice stranice

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var brojStranica = 0;
            var inHTML = '';

            $.ajax({
                url: '../xml/popisLutrijaXml.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound
                    var inHTML = '';

                    $(xml).find("lutrija").each(function () {
                        lutrija = {
                            id: $(this).find('id').text(),
                            naziv: $(this).find('naziv').text(),
                            telefon: $(this).find('telefon').text(),
                            mail: $(this).find('mail').text(),
                            web: $(this).find('web').text()
                        };
                        poljePodataka.push(lutrija);

                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].mail + '</td>' +
                                '<td>' + poljePodataka[i].web + '</td>' +
                                '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                    }

                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });

            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {
                    inHTML += '<tr>';
                    inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                            '<td>' + poljePodataka[i].naziv + '</td>' +
                            '<td>' + poljePodataka[i].telefon + '</td>' +
                            '<td>' + poljePodataka[i].mail + '</td>' +
                            '<td>' + poljePodataka[i].web + '</td>' +
                            '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].mail + '</td>' +
                                '<td>' + poljePodataka[i].web + '</td>' +
                                '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].mail + '</td>' +
                                '<td>' + poljePodataka[i].web + '</td>' +
                                '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].mail + '</td>' +
                                '<td>' + poljePodataka[i].web + '</td>' +
                                '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].mail + '</td>' +
                                '<td>' + poljePodataka[i].web + '</td>' +
                                '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                            '<td>' + poljePodataka[i].naziv + '</td>' +
                            '<td>' + poljePodataka[i].telefon + '</td>' +
                            '<td>' + poljePodataka[i].mail + '</td>' +
                            '<td>' + poljePodataka[i].web + '</td>' +
                            '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sortiranje
            $("#sortButton").click(function (event) {
                poljePodataka = [];
                $.ajax({
                    url: '../xml/popisLutrijaXml.php',
                    type: 'GET',
                    dataType: 'xml',
                    async: false,
                    data: {
                        value: $("select[name='sortiranje']").val()
                    },
                    success: function (xml) {
                        //potrebno unijeti podatke u tablicu theBodyIsRound
                        var inHTML = '';

                        $(xml).find("lutrija").each(function () {
                            lutrija = {
                                id: $(this).find('id').text(),
                                naziv: $(this).find('naziv').text(),
                                telefon: $(this).find('telefon').text(),
                                mail: $(this).find('mail').text(),
                                web: $(this).find('web').text()
                            };
                            poljePodataka.push(lutrija);

                        });
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }
                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<tr>';
                            inHTML += '<td><a href="azurirajLutriju.php?idLutrija=' + poljePodataka[i].id + '">' + poljePodataka[i].id + '</a></td>' +
                                    '<td>' + poljePodataka[i].naziv + '</td>' +
                                    '<td>' + poljePodataka[i].telefon + '</td>' +
                                    '<td>' + poljePodataka[i].mail + '</td>' +
                                    '<td>' + poljePodataka[i].web + '</td>' +
                                    '<td><a href="dodjelaModeratora.php?idLutrije=' + poljePodataka[i].id + '">Dodijeli moderatora</a></td></tr>';
                        }

                        $('#theBodyIsRound')[0].innerHTML = inHTML;
                    }
                });

            });

            break;

        case "Dodaj kolo":
            //ucitaj popis lutrija moderatora
            poljeGresaka = "";

            $.ajax({
                url: '../json/idNazivIgre.php',
                type: 'POST',
                dataType: 'json',
                async: false,
                success: function (json) {

                    inPretrazivac = '';
                    $.each(json, function (kljuc, vrijednost) {

                        var ig = vrijednost.split("%");
                        inPretrazivac += '<option value = "' + ig[0] + '">' + ig[1] + '</option>';
                    });

                    $('#ime')[0].innerHTML = inPretrazivac;
                }
            }, false);

            $("#formIgra").submit(function (event) {

                var isplata = $("#datumIsplate").val();
                var rege = new RegExp(/^(\d{4})-([0-1][0-9])-([0-3][0-9]) ([0|1][0-9]:[0-5][0-9]:[0-5][0-9])$/);

                var okie = rege.test(isplata);
                if (!okie) {
                    poljeGresaka += "Datum i vrijeme isplate se ne poklapa s predloškom.\n";
                    $("#datumIsplateLabela").attr("style", "color:crimson");
                } else {
                    $("#datumIsplateLabela").attr("style", "color:black");
                }

                if (poljeGresaka !== "") {
                    event.preventDefault();
                    alert(poljeGresaka);
                    poljeGresaka = "";
                }

            });

        case "Azur kolo":
            //ucitaj popis lutrija moderatora
            poljeGresaka = "";

            $.ajax({
                url: '../json/idNazivIgre.php',
                type: 'POST',
                dataType: 'json',
                async: false,
                success: function (json) {

                    inPretrazivac = '';
                    $.each(json, function (kljuc, vrijednost) {

                        var ig = vrijednost.split("%");
                        inPretrazivac += '<option value = "' + ig[0] + '">' + ig[1] + '</option>';
                    });

                    $('#ime')[0].innerHTML = inPretrazivac;
                }
            }, false);

            $("#formIgra").submit(function (event) {

                var isplata = $("#datumIsplate").val();
                var rege = new RegExp(/^(\d{4})-([0-1][0-9])-([0-3][0-9]) ([0|1][0-9]:[0-5][0-9]:[0-5][0-9])$/);

                var okie = rege.test(isplata);
                if (!okie) {
                    poljeGresaka += "Datum i vrijeme isplate se ne poklapa s predloškom.\n";
                    $("#datumIsplateLabela").attr("style", "color:crimson");
                } else {
                    $("#datumIsplateLabela").attr("style", "color:black");
                }

                if (poljeGresaka !== "") {
                    event.preventDefault();
                    alert(poljeGresaka);
                    poljeGresaka = "";
                }

            });



        case "GeneratorBr":

            //generiranje brojeva
            $("#randomBroj").submit(function (event) {
                stringVr = "";
                $.ajax({
                    url: 'json/generatorSlucajnihBrojeva.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        brojOd: $("#brojOd").val(),
                        brojDo: $("#brojDo").val(),
                        brojBrojeva: $("#brojBrojeva").val()
                    },
                    async: false,
                    success: function (json) {
                        $.each(json, function (kljuc, vrijednost) {
                            //napravi vrijednost
                            stringVr += vrijednost + " ";
                        });
                    }

                }, false);

                document.cookie = "genBroj=" + stringVr;

            });

            break;

        case "Zahtjevi":
            //postavljanje tablice stranice

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var brojStranica = 0;
            var inHTML = '';

            $.ajax({
                url: '../xml/sviZahtjevi.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound
                    var inHTML = '';
                    var poljeZahtjeva = [];

                    $(xml).find("zahtjev").each(function () {
                        //kreirati objekt koji ce se spremati u polje
                        zahtjev = {
                            id: $(this).find('idZahtjevZaIsplatom').text(),
                            iznosIsplate: $(this).find('iznosIsplate').text(),
                            datumIsplate: $(this).find('datumIsplate').text(),
                            potvrdeno: $(this).find('potvrdeno').text(),
                            idListic: $(this).find('idListic').text(),
                            nazivKolo: $(this).find('nazivKolo').text(),
                            status: $(this).find('status').text()
                        };
                        poljePodataka.push(zahtjev);
                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';

                        if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                        }

                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                                '<td>' + poljePodataka[i].potvrdeno + '</td>';

                        //ako je listić dobitan i ako nije prošao rok isplate
                        if (poljePodataka[i].status === "1") {
                            //rok
                            var d = poljePodataka[i].datumIsplate;
                            var rok = new Date(d);
                            //danasnji dan
                            var danas = new Date();
                            if (danas < rok) {
                                inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                            } else {
                                inHTML += '<td>Rok isplate je prošao.</td>';
                            }
                        } else {
                            inHTML += '<td>Isplata nije moguća</td>';
                        }
                        inHTML += '</tr>';
                    }

                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });

            $("#sortButton").click(function (event) {
                poljePodataka = [];
                $.ajax({
                    url: '../xml/sviZahtjevi.php',
                    type: 'GET',
                    dataType: 'xml',
                    async: false,
                    data: {
                        value: $("select[name='sortiranje']").val()
                    },
                    success: function (xml) {
                        //potrebno unijeti podatke u tablicu theBodyIsRound
                        var inHTML = '';
                        var poljeZahtjeva = [];

                        $(xml).find("zahtjev").each(function () {
                            //kreirati objekt koji ce se spremati u polje
                            zahtjev = {
                                id: $(this).find('idZahtjevZaIsplatom').text(),
                                iznosIsplate: $(this).find('iznosIsplate').text(),
                                datumIsplate: $(this).find('datumIsplate').text(),
                                potvrdeno: $(this).find('potvrdeno').text(),
                                idListic: $(this).find('idListic').text(),
                                nazivKolo: $(this).find('nazivKolo').text(),
                                status: $(this).find('status').text()
                            };
                            poljePodataka.push(zahtjev);
                        });
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }
                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<tr>';

                            if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                                inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                                poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                            }

                            //moderator azurira/kreira samo dijelove igre!!
                            //cijena listica, datum pocetka, datum zavrsetka
                            inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                    '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                                    '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                                    '<td>' + poljePodataka[i].potvrdeno + '</td>';

                            //ako je listić dobitan i ako nije prošao rok isplate
                            if (poljePodataka[i].status === "1") {
                                //rok
                                var d = poljePodataka[i].datumIsplate;
                                var rok = new Date(d);
                                //danasnji dan
                                var danas = new Date();

                                if (danas < rok) {
                                    inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                                } else {
                                    inHTML += '<td>Rok isplate je prošao.</td>';
                                }
                            } else {
                                inHTML += '<td>Isplata nije moguća</td>';
                            }
                            inHTML += '</tr>';
                        }

                        $('#theBodyIsRound')[0].innerHTML = inHTML;
                    }
                });
            });

            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                var poljeZahtjeva = [];
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';

                    if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                        inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                        poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                    }

                    //moderator azurira/kreira samo dijelove igre!!
                    //cijena listica, datum pocetka, datum zavrsetka
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                            '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                            '<td>' + poljePodataka[i].potvrdeno + '</td>';

                    //ako je listić dobitan i ako nije prošao rok isplate
                    if (poljePodataka[i].status === "1") {
                        //rok
                        var d = poljePodataka[i].datumIsplate;
                        var rok = new Date(d);
                        //danasnji dan
                        var danas = new Date();

                        if (danas < rok) {
                            inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                        } else {
                            inHTML += '<td>Rok isplate je prošao.</td>';
                        }
                    } else {
                        inHTML += '<td>Isplata nije moguća</td>';
                    }
                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;
                var poljeZahtjeva = [];
                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {

                        inHTML += '<tr>';

                        if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                        }

                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                                '<td>' + poljePodataka[i].potvrdeno + '</td>';

                        //ako je listić dobitan i ako nije prošao rok isplate
                        if (poljePodataka[i].status === "1") {
                            //rok
                            var d = poljePodataka[i].datumIsplate;
                            var rok = new Date(d);
                            //danasnji dan
                            var danas = new Date();

                            if (danas < rok) {
                                inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                            } else {
                                inHTML += '<td>Rok isplate je prošao.</td>';
                            }
                        } else {
                            inHTML += '<td>Isplata nije moguća</td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';

                        if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                        }

                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                                '<td>' + poljePodataka[i].potvrdeno + '</td>';

                        //ako je listić dobitan i ako nije prošao rok isplate
                        if (poljePodataka[i].status === "1") {
                            //rok
                            var d = poljePodataka[i].datumIsplate;
                            var rok = new Date(d);
                            //danasnji dan
                            var danas = new Date();

                            if (danas < rok) {
                                inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                            } else {
                                inHTML += '<td>Rok isplate je prošao.</td>';
                            }
                        } else {
                            inHTML += '<td>Isplata nije moguća</td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {
                var poljeZahtjeva = [];
                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {

                        inHTML += '<tr>';

                        if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                        }

                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                                '<td>' + poljePodataka[i].potvrdeno + '</td>';

                        //ako je listić dobitan i ako nije prošao rok isplate
                        if (poljePodataka[i].status === "1") {
                            //rok
                            var d = poljePodataka[i].datumIsplate;
                            var rok = new Date(d);
                            //danasnji dan
                            var danas = new Date();

                            if (danas < rok) {
                                inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                            } else {
                                inHTML += '<td>Rok isplate je prošao.</td>';
                            }
                        } else {
                            inHTML += '<td>Isplata nije moguća</td>';
                        }
                        inHTML += '</tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';

                        if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                        }

                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                                '<td>' + poljePodataka[i].potvrdeno + '</td>';

                        //ako je listić dobitan i ako nije prošao rok isplate
                        if (poljePodataka[i].status === "1") {
                            //rok
                            var d = poljePodataka[i].datumIsplate;
                            var rok = new Date(d);
                            //danasnji dan
                            var danas = new Date();

                            if (danas < rok) {
                                inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                            } else {
                                inHTML += '<td>Rok isplate je prošao.</td>';
                            }
                        } else {
                            inHTML += '<td>Isplata nije moguća</td>';
                        }
                        inHTML += '</tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;
                var poljeZahtjeva = [];

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';

                    if (!poljeZahtjeva.includes(poljePodataka[i].nazivKolo)) {
                        inHTML += '<td colspan=5> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                        poljeZahtjeva.push(poljePodataka[i].nazivKolo);
                    }

                    //moderator azurira/kreira samo dijelove igre!!
                    //cijena listica, datum pocetka, datum zavrsetka
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].iznosIsplate + '</td>' +
                            '<td>' + poljePodataka[i].datumIsplate + '</td>' +
                            '<td>' + poljePodataka[i].potvrdeno + '</td>';

                    //ako je listić dobitan i ako nije prošao rok isplate
                    if (poljePodataka[i].status === "1") {
                        //rok
                        var d = poljePodataka[i].datumIsplate;
                        var rok = new Date(d);
                        //danasnji dan
                        var danas = new Date();

                        if (danas < rok) {
                            inHTML += '<td><a href="isplataZahtjevaM.php?idZahtjev=' + poljePodataka[i].id + '&idListic=' + poljePodataka[i].idListic + '">Isplati iznos!</a></td>';

                        } else {
                            inHTML += '<td>Rok isplate je prošao.</td>';
                        }
                    } else {
                        inHTML += '<td>Isplata nije moguća</td>';
                    }
                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });


            break;


        case "Blokirani":

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var brojStranica = 0;
            var inHTML = '';

            //ajax za dohvacanje pocetka podataka
            $.ajax({
                url: '../xml/blokiraniKorisnici.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound

                    inHTML = '';
                    $(xml).find("korisnik").each(function () {
                        //kreirati objekt koji ce se spremati u polje
                        korisnik = {
                            id: $(this).find('id').text(),
                            imePrezime: $(this).find('imePrezime').text(),
                            korime: $(this).find('korisnickoIme').text(),
                            datumRegistracije: $(this).find('datumRegistracije').text(),
                            email: $(this).find('email').text(),
                            status: $(this).find('statusKorisnika').text(),
                            uloga: $(this).find('uloga_idUloga').text()
                        };
                        poljePodataka.push(korisnik);
                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });

            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].imePrezime + '</td>' +
                            '<td>' + poljePodataka[i].korime + '</td>' +
                            '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                            '<td>' + poljePodataka[i].email + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].uloga + '</td>';

                    //ako je korisnik blokiran
                    if (poljePodataka[i].status === "0") {
                        inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                    } else {
                        inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                    }
                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].imePrezime + '</td>' +
                            '<td>' + poljePodataka[i].korime + '</td>' +
                            '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                            '<td>' + poljePodataka[i].email + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].uloga + '</td>';

                    //ako je korisnik blokiran
                    if (poljePodataka[i].status === "0") {
                        inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                    } else {
                        inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                    }
                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });




            break;


        case "Korisnici":
            //postavljanje tablice stranice
            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var brojStranica = 0;
            var inHTML = '';

            //ajax za dohvacanje pocetka podataka
            $.ajax({
                url: '../xml/korisniciPodaci.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound

                    inHTML = '';
                    $(xml).find("korisnik").each(function () {
                        //kreirati objekt koji ce se spremati u polje
                        korisnik = {
                            id: $(this).find('id').text(),
                            imePrezime: $(this).find('imePrezime').text(),
                            korime: $(this).find('korisnickoIme').text(),
                            datumRegistracije: $(this).find('datumRegistracije').text(),
                            email: $(this).find('email').text(),
                            status: $(this).find('statusKorisnika').text(),
                            uloga: $(this).find('uloga_idUloga').text()
                        };
                        poljePodataka.push(korisnik);
                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });

            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].imePrezime + '</td>' +
                            '<td>' + poljePodataka[i].korime + '</td>' +
                            '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                            '<td>' + poljePodataka[i].email + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].uloga + '</td>';

                    //ako je korisnik blokiran
                    if (poljePodataka[i].status === "0") {
                        inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                    } else {
                        inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                    }
                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                '<td>' + poljePodataka[i].korime + '</td>' +
                                '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].uloga + '</td>';

                        //ako je korisnik blokiran
                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                        } else {
                            inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                        }
                        inHTML += '</tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].imePrezime + '</td>' +
                            '<td>' + poljePodataka[i].korime + '</td>' +
                            '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                            '<td>' + poljePodataka[i].email + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].uloga + '</td>';

                    //ako je korisnik blokiran
                    if (poljePodataka[i].status === "0") {
                        inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                    } else {
                        inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                    }
                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });


            //sort
            $("#sortButton").click(function (event) {
                poljePodataka = [];
                inHTML = '';
                $('#theBodyIsRound')[0].innerHTML = inHTML;
                $.ajax({
                    url: '../xml/korisniciPodaci.php',
                    type: 'GET',
                    dataType: 'xml',
                    data: {
                        value: $("select[name='sortiranje']").val()
                    },
                    async: false,
                    success: function (xml) {
                        //potrebno unijeti podatke u tablicu theBodyIsRound

                        $(xml).find("korisnik").each(function () {
                            //kreirati objekt koji ce se spremati u polje
                            korisnik = {
                                id: $(this).find('id').text(),
                                imePrezime: $(this).find('imePrezime').text(),
                                korime: $(this).find('korisnickoIme').text(),
                                datumRegistracije: $(this).find('datumRegistracije').text(),
                                email: $(this).find('email').text(),
                                status: $(this).find('statusKorisnika').text(),
                                uloga: $(this).find('uloga_idUloga').text()
                            };
                            poljePodataka.push(korisnik);
                        });
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }
                        for (i = podaciPocetak; i < podaciKraj; i++) {

                            inHTML += '<tr>';
                            inHTML += '<td>' + poljePodataka[i].id + '</td>' +
                                    '<td>' + poljePodataka[i].imePrezime + '</td>' +
                                    '<td>' + poljePodataka[i].korime + '</td>' +
                                    '<td>' + poljePodataka[i].datumRegistracije + '</td>' +
                                    '<td>' + poljePodataka[i].email + '</td>' +
                                    '<td>' + poljePodataka[i].status + '</td>' +
                                    '<td>' + poljePodataka[i].uloga + '</td>';

                            //ako je korisnik blokiran
                            if (poljePodataka[i].status === "0") {
                                inHTML += '<td><a href="blokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Blokiraj</a></td>';
                            } else {
                                inHTML += '<td style="font-weight:bold"><a href="odblokiraj.php?idKorisnik=' + poljePodataka[i].id + '">Odblokiraj</a></td>';
                            }
                            inHTML += '</tr>';
                        }
                        $('#theBodyIsRound')[0].innerHTML = inHTML;
                    }
                });

            });

            break;


        case "Kolo":
            //postavljanje tablice stranice

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var brojStranica = 0;
            var inHTML = '';

            $.ajax({
                url: '../xml/popisKolaXml.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound
                    var inHTML = '';

                    $(xml).find("kolo").each(function () {
                        kolo = {
                            id: $(this).find('id').text(),
                            idIgra: $(this).find('idIgreNaSrecu').text(),
                            datumIsplate: $(this).find('datumIsplate').text(),
                            naziv: $(this).find('naziv').text(),
                            status: $(this).find('status').text(),
                            generiraniBrojevi: $(this).find('generiraniBrojevi').text(),
                            brojIzvlacenja: $(this).find('brojIzvlacenja').text()
                        };
                        poljePodataka.push(kolo);
                    });

                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }

                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>';

                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                        } else {
                            inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                        }

                        inHTML += '</tr>';
                    }

                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });

            //sortiranje
            $("#sortButton").click(function (event) {
                poljePodataka = [];
                $.ajax({
                    url: '../xml/popisKolaXml.php',
                    type: 'GET',
                    dataType: 'xml',
                    async: false,
                    data: {
                        value: $("select[name='sortiranje']").val()
                    },
                    success: function (xml) {
                        //potrebno unijeti podatke u tablicu theBodyIsRound
                        var inHTML = '';

                        $(xml).find("kolo").each(function () {
                            kolo = {
                                id: $(this).find('id').text(),
                                idIgra: $(this).find('idIgreNaSrecu').text(),
                                datumIsplate: $(this).find('datumIsplate').text(),
                                naziv: $(this).find('naziv').text(),
                                status: $(this).find('status').text(),
                                generiraniBrojevi: $(this).find('generiraniBrojevi').text(),
                                brojIzvlacenja: $(this).find('brojIzvlacenja').text()
                            };
                            poljePodataka.push(kolo);
                        });
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }
                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<tr>';
                            //moderator azurira/kreira samo dijelove igre!!
                            //cijena listica, datum pocetka, datum zavrsetka
                            inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                                    '<td>' + poljePodataka[i].naziv + '</td>' +
                                    '<td>' + poljePodataka[i].status + '</td>' +
                                    '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                                    '<td>' + poljePodataka[i].datumIsplate + '</td>';

                            if (poljePodataka[i].status === "0") {
                                inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                            } else {
                                inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                            }

                            inHTML += '</tr>';
                        }

                        $('#theBodyIsRound')[0].innerHTML = inHTML;
                    }
                });

            });

            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    //moderator azurira/kreira samo dijelove igre!!
                    //cijena listica, datum pocetka, datum zavrsetka
                    inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                            '<td>' + poljePodataka[i].naziv + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                            '<td>' + poljePodataka[i].datumIsplate + '</td>';

                    if (poljePodataka[i].status === "0") {
                        inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                    } else {
                        inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                    }

                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>';

                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                        } else {
                            inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                        }

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>';

                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                        } else {
                            inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                        }

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>';

                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                        } else {
                            inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                        }

                        inHTML += '</tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].datumIsplate + '</td>';

                        if (poljePodataka[i].status === "0") {
                            inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                        } else {
                            inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                        }

                        inHTML += '</tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    //moderator azurira/kreira samo dijelove igre!!
                    //cijena listica, datum pocetka, datum zavrsetka
                    inHTML += '<td><a href="azurirajKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '&datumIsplate=' + poljePodataka[i].datumIsplate + '">' + poljePodataka[i].id + '</a></td>' +
                            '<td>' + poljePodataka[i].naziv + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].generiraniBrojevi + '</td>' +
                            '<td>' + poljePodataka[i].datumIsplate + '</td>';

                    if (poljePodataka[i].status === "0") {
                        inHTML += '<td><a href=otvoriKolo.php?idKolo=' + poljePodataka[i].id + '&idIgra=' + poljePodataka[i].idIgra + '>Otvori kolo</a></td>';
                    } else {
                        inHTML += '<td><a href="zatvoriKolo.php?idKolo=' + poljePodataka[i].id + '&brojBrojeva=' + poljePodataka[i].brojIzvlacenja + '">Zatvori kolo</a></td>';
                    }

                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });



            break;

        case "Igre moderator":
            //postavljanje tablice stranice

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var inHTML = '';
            var kori = $("#sakriven").val();

            $.ajax({
                url: '../xml/igreNaSrecuPopisXml.php',
                type: 'GET',
                dataType: 'xml',
                data: {
                    idKor: kori
                },
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound
                    var inHTML = '';
                    $(xml).find("igra").each(function () {
                        igra = {
                            id: $(this).find('id').text(),
                            naziv: $(this).find('naziv').text(),
                            brojIzvlacenja: $(this).find('brojIzvlacenja').text(),
                            fondPoBroju: $(this).find('fondPoPogodenomBroju').text(),
                            cijena: $(this).find('cijenaListica').text(),
                            dVPocetka: $(this).find('datumVrijemePocetka').text(),
                            dVZavrsetka: $(this).find('datumVrijemeZavrsetka').text()
                        };
                        poljePodataka.push(igra);
                    });

                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }

                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                                "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                                "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                                '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                                '<td>' + poljePodataka[i].cijena + '</td>' +
                                '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                                '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                        inHTML += '</tr>';
                    }

                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });


            //sort
            $("#sortButton").click(function (event) {
                poljePodataka = [];
                var kori = $("#sakriven").val();
                $.ajax({
                    url: '../xml/igreNaSrecuPopisXml.php',
                    type: 'GET',
                    dataType: 'xml',
                    async: false,
                    data: {
                        value: $("select[name='sortiranje']").val(),
                        idKor: kori
                    },
                    success: function (xml) {
                        //potrebno unijeti podatke u tablicu theBodyIsRound
                        var inHTML = '';
                        $(xml).find("igra").each(function () {
                            igra = {
                                id: $(this).find('id').text(),
                                naziv: $(this).find('naziv').text(),
                                brojIzvlacenja: $(this).find('brojIzvlacenja').text(),
                                fondPoBroju: $(this).find('fondPoPogodenomBroju').text(),
                                cijena: $(this).find('cijenaListica').text(),
                                dVPocetka: $(this).find('datumVrijemePocetka').text(),
                                dVZavrsetka: $(this).find('datumVrijemeZavrsetka').text()
                            };
                            poljePodataka.push(igra);
                        });

                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }

                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<tr>';
                            //moderator azurira/kreira samo dijelove igre!!
                            //cijena listica, datum pocetka, datum zavrsetka
                            var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                                    "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                                    "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                            inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                    '<td>' + poljePodataka[i].naziv + '</td>' +
                                    '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                                    '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                                    '<td>' + poljePodataka[i].cijena + '</td>' +
                                    '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                                    '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                            inHTML += '</tr>';
                        }


                        $('#theBodyIsRound')[0].innerHTML = inHTML;
                    }
                });

            });


            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    //moderator azurira/kreira samo dijelove igre!!
                    //cijena listica, datum pocetka, datum zavrsetka
                    var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                            "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                            "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                    inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].naziv + '</td>' +
                            '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                            '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                            '<td>' + poljePodataka[i].cijena + '</td>' +
                            '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                            '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                                "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                                "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                                '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                                '<td>' + poljePodataka[i].cijena + '</td>' +
                                '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                                '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                                "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                                "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                                '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                                '<td>' + poljePodataka[i].cijena + '</td>' +
                                '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                                '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                                "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                                "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                                '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                                '<td>' + poljePodataka[i].cijena + '</td>' +
                                '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                                '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                        inHTML += '</tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        //moderator azurira/kreira samo dijelove igre!!
                        //cijena listica, datum pocetka, datum zavrsetka
                        var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                                "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                                "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].naziv + '</td>' +
                                '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                                '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                                '<td>' + poljePodataka[i].cijena + '</td>' +
                                '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                                '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                        inHTML += '</tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });


            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    //moderator azurira/kreira samo dijelove igre!!
                    //cijena listica, datum pocetka, datum zavrsetka
                    var veza = "azurirajIgru.php?cijenaListica=" + poljePodataka[i].cijena + "&datumVrijemePocetka=" + poljePodataka[i].dVPocetka +
                            "&datumVrijemeZavrsetka=" + poljePodataka[i].dVZavrsetka + "&id=" + poljePodataka[i].id + "&naziv=" + poljePodataka[i].naziv +
                            "&fond=" + poljePodataka[i].fondPoBroju + "&brojIzvlacenja=" + poljePodataka[i].brojIzvlacenja;

                    inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].naziv + '</td>' +
                            '<td>' + poljePodataka[i].brojIzvlacenja + '</td>' +
                            '<td>' + poljePodataka[i].fondPoBroju + '</td>' +
                            '<td>' + poljePodataka[i].cijena + '</td>' +
                            '<td>' + poljePodataka[i].dVPocetka + '</td>' +
                            '<td>' + poljePodataka[i].dVZavrsetka + '</td></tr>';

                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });




            break;


        case "Vlastita statistika":
            var pronaden = false;
            $("#vlastitaStatistika").load(function (event) {
                $.ajax({
                    url: '../xml/statistikaPobjeda.php',
                    type: 'POST',
                    dataType: 'xml',
                    async: false,
                    success: function (xml) {


                    }
                });
            });

            break;

            //aktivacija racuna
        case "Aktivacija":
            var pronaden = false;
            $("#aktivacijaRacuna").submit(function (event) {
                $.ajax({
                    url: '../xml/korisniciPodaci.php',
                    type: 'POST',
                    dataType: 'xml',
                    async: false,
                    success: function (xml) {
                        //funkcija provjerava postoji li poslani aktivacijski kod
                        //u bazi podataka kodova
                        $(xml).find("korisnik").each(function () {
                            if ($(this).find('aktivacijskiKod').text() === $("#aktivacijskiKod").val()) {
                                pronaden = true;
                            }
                        });
                        if (pronaden === true) {
                            alert("Točan aktivacijski kod!");
                        } else {
                            alert("Pogrešan aktivacijski kod!");
                            event.preventDefault();
                        }
                    }
                });
            });

            break;


        case "Početna stranica":
            //generiranje rang liste

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var inHTML = '';

            $.ajax({
                url: 'xml/rangListaKorisnika.php',
                type: 'POST',
                dataType: 'xml',
                data: {
                    datumOd: $("#datumOd").val(),
                    datumDo: $("#datumDo").val()
                },
                async: false,
                success: function (xml) {
                    var brojac = 1;
                    var inHTML = '';
                    $(xml).find("korisnik").each(function () {
                        const korisnik = {
                            korime: $(this).find('korisnickoIme').text(),
                            iznos: $(this).find('osvojeniIznos').text(),
                            rang: brojac
                        };
                        poljePodataka.push(korisnik);
                        brojac++;
                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                    }

                    $('#pUnos')[0].innerHTML = inHTML;

                }
            });
            //filtriranje rang liste
            $("#filter").click(function (event) {
                poljePodataka = [];
                $.ajax({
                    url: 'xml/rangListaKorisnika.php',
                    type: 'POST',
                    dataType: 'xml',
                    data: {
                        datumOd: $("#datumOd").val(),
                        datumDo: $("#datumDo").val()
                    },
                    async: false,
                    success: function (xml) {
                        var brojac = 1;
                        var inHTML = '';
                        $(xml).find("korisnik").each(function () {
                            korisnik = {
                                korime: $(this).find('korisnickoIme').text(),
                                iznos: $(this).find('osvojeniIznos').text(),
                                rang: brojac
                            };
                            poljePodataka.push(korisnik);
                            brojac++;
                        });
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }
                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                        }

                        $('#pUnos')[0].innerHTML = inHTML;

                    }
                });

            });


            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {
                    inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';

                }
                $('#pUnos')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {
                        inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                    }
                    $('#pUnos')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                    }
                    $('#pUnos')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {
                        inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                    }

                }
                $('#pUnos')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<h3>' + poljePodataka[i].rang + '. ' + poljePodataka[i].korime + '</h3><p>' + ' ' + poljePodataka[i].iznos + ' kn</p>';
                }
                $('#pUnos')[0].innerHTML = inHTML;
            });






            break;

        case "DodjelaM":

            //na pocetku, generirati popis lutrija

            $.ajax({
                url: '../xml/korisniciPodaci.php',
                type: 'POST',
                dataType: 'xml',
                async: false,
                success: function (xml) {

                    inPretrazivac = '';
                    var i = 1;
                    $(xml).find("korisnik").each(function () {
                        //uzima nazive svih kola koji imaju otvorene igre
                        inPretrazivac += '<option value = "' + $(this).find('id').text() + '">' + $(this).find('korisnickoIme').text() + '</option>';
                        i++;
                    });

                    $('#moderator')[0].innerHTML = inPretrazivac;
                }
            }, false);

        case "Zaigraj":

            //na pocetku, generirati popis lutrija

            $.ajax({
                url: '../json/popisLutrija.php',
                type: 'POST',
                dataType: 'json',
                async: false,
                success: function (json) {

                    inPretrazivac = '';
                    var i = 1;
                    $.each(json, function (kljuc, vrijednost) {

                        //uzima nazive svih kola koji imaju otvorene igre
                        inPretrazivac += '<option value = "' + vrijednost + '">' + vrijednost + '</option>';
                        i++;
                    });

                    $('#lutrija')[0].innerHTML = inPretrazivac;
                }
            }, false);
            //na click lutrije ispisuju se igre određene lutrije
            $("#lutrija").click(function (event) {

                $.ajax({
                    url: '../json/igreLutrije.php',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        lutrija: $("#lutrija").val()
                    },
                    async: false,

                    success: function (json) {
                        inHTML = '';
                        $.each(json, function (kljuc, vrijednost) {
                            naziv = vrijednost.split("%");
                            //napravi vrijednost
                            inHTML += '<option value = "' + naziv[0] + '">' + naziv[1] + '</option>';
                        })
                        $('#igraSrece')[0].innerHTML = inHTML;
                    }

                }, false);


            });

            //igre on submit
            //kopirati kod za submit ažuriranja
            $("#zaigraj").submit(function (event) {

                //regexp provjera telefona

                poljeGresaka = "";
                stringPutanja = "listici/" + $("#naziv")[0].files[0].name;

                $.ajax({
                    url: '../json/generatorJson.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        naziv: $("#naziv")[0].files[0].name
                    },
                    async: false,
                    success: function (json) {
                        $.each(json, function (kljuc, vrijednost) {
                            if (stringPutanja === vrijednost) {
                                poljeGresaka += "Potrebno je promijeniti naziv datoteke.\n";
                                $("#nazivLabela").attr("style", "color:crimson");
                            } else {
                                $("#nazivLabela").attr("style", "color:black");
                            }
                        });
                    }

                }, false);

                var re = new RegExp(/^(\+385) (\d{2})-(\d{3})-(\d{4})$/);
                telefon = $("#telefon").val();
                var ok = re.test(telefon);
                if (!ok) {
                    poljeGresaka += "Telefon se ne poklapa s predloškom.\n";
                    $("#telefonLabela").attr("style", "color:crimson");
                } else {
                    $("#telefonLabela").attr("style", "color:black");
                }

                //je li select jedan element

                if ($("#igraSrece").val() === null) {
                    poljeGresaka += "Potrebno je odabrati igru sreće.\n";
                    $("#igraSreceLabela").attr("style", "color:crimson");
                } else {
                    $("#igraSreceLabela").attr("style", "color:black");
                }

                if (poljeGresaka !== "") {
                    alert(poljeGresaka);
                    poljeGresaka = "";
                    event.preventDefault();
                }


            });

            break;


        case "Obrazac":

            var greska = false;

            $("#obrazacform").submit(function (event) {

                $.ajax({
                    url: '../json/generatorJson.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        naziv: $("#naziv")[0].files[0].name
                    },
                    async: false,
                    success: function (json) {
                        alert("u fju");
                        $.each(json, function (kljuc, vrijednost) {
                            alert("PODACI");
                            if ($("#naziv")[0].files[0].name === vrijednost) {
                                alert("Potrebno je promijeniti naziv datoteke.");
                                greska = true;

                                event.preventDefault();
                            }
                        })
                    }

                }, false);
            });

            break;

        case "Prijava":
            //zaboravljena lozinka location replace
            $("#zaboravih").click(function (event) {
                if ($("#korime").val() === "") {
                    alert("Potrebno je upisati korisničko ime.");
                } else {
                    stringLokacija = "zaboravljenaLozinka.php?korisnickoIme=" + $("#korime").val();
                    location.replace(stringLokacija);
                }
            });

            //provjera korisnickog imena u bazi
            $("#korime").blur(function (event) {
                $.ajax({
                    url: '../xml/generatorXml.php',
                    type: 'POST',
                    dataType: 'xml',
                    data: {
                        korime: $("#korime").val()
                    },
                    async: false,
                    success: function (xml) {
                        korisnikPronaden = false;
                        $(xml).find("korisnik").each(function () {
                            if ($(this).find('korisnickoIme').text() === $("#korime").val()) {
                                korisnikPronaden = true;
                            }
                        });
                        if (!korisnikPronaden) {
                            $("#korimeLabela").attr("style", "color:crimson");
                        } else {
                            $("#korimeLabela").attr("style", "color:black");
                        }
                    }
                }, false);
            });

            //provjeri ispravnost lozinke
            $("#formPrijava").submit(function (event) {
                var pogreska = false;
                $.ajax({
                    url: '../xml/generatorXml.php',
                    type: 'POST',
                    dataType: 'xml',
                    data: {
                        korime: $("#korime").val()
                    },
                    async: false,
                    success: function (xml) {

                        $(xml).find("korisnik").each(function () {
                            if ($(this).find('korisnickoIme').text() === $("#korime").val()) {
                                var broj = $(this).find('brojNeuspjesnihPrijava').text();
                                pretvorenBroj = parseInt(broj);
                                if ($(this).find('lozinka').text() !== $("#lozinka").val()) {
                                    pogreska = true;
                                    if (pretvorenBroj < 2) {
                                        alert("Lozinka nije ispravna. Pokušajte ponovo! Broj preostalih pokušaja je " + (2 - pretvorenBroj));
                                    } else {
                                        //blokiraj korisnika
                                        alert("Blokirani ste. Molim Vas, pokušajte kasnije.");
                                    }
                                }

                            }
                        });

                    }

                }, false);
                if (pogreska === true) {
                    $("#lozinkaLabela").attr("style", "color:crimson");
                } else {
                    $("#lozinkaLabela").attr("style", "color:black");
                }
            });

            break;

        case "Moj list":
            //postavljanje tablice stranice
            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var inHTML = '';

            $.ajax({
                url: '../xml/xmlMojiListici.php',
                type: 'GET',
                dataType: 'xml',
                async: false,
                success: function (xml) {
                    //potrebno unijeti podatke u tablicu theBodyIsRound
                    var inHTML = '';
                    var isplata = '';

                    var poljeIgara = [];

                    $(xml).find("list").each(function () {
                        lis = {
                            id: $(this).find('idListic').text(),
                            telefon: $(this).find('telefon').text(),
                            email: $(this).find('email').text(),
                            adresa: $(this).find('adresa').text(),
                            odabraniBrojevi: $(this).find('odabraniBrojevi').text(),
                            nazivKolo: $(this).find('nazivKolo').text(),
                            brojPogodenihBrojeva: $(this).find('brojPogodenihBrojeva').text(),
                            status: $(this).find('status').text(),
                            osvojeniIznos: $(this).find('osvojeniIznos').text(),
                            idKor: $(this).find('idKorisnik').text()
                        };
                        poljePodataka.push(lis);
                    });

                    //kontrolna linija za podatke kolicine manje od 5
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }

                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<tr>';
                        var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                                "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                        //grupiranje po kolu/igri na srecu
                        if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeIgara.push(poljePodataka[i].nazivKolo);
                        }
                        //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].adresa + '</td>' +
                                '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                        if (poljePodataka[i].status === "dobitan") {
                            isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].osvojeniIznos + "&idKorisnik=" + poljePodataka[i].idKor +
                                    "&idListic=" + poljePodataka[i].id;
                            inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                        } else {
                            inHTML += '<td>Isplata nije moguća.</td>';
                        }

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }
            });


            //sort
            $("#sortButton").click(function () {
                poljePodataka = [];
                $.ajax({
                    url: '../xml/xmlMojiListici.php',
                    type: 'GET',
                    dataType: 'xml',
                    data: {
                        value: $("select[name='sortiranje']").val()
                    },
                    async: false,
                    success: function (xml) {
                        //potrebno unijeti podatke u tablicu theBodyIsRound
                        var inHTML = '';
                        var isplata = '';

                        var poljeIgara = [];

                        $(xml).find("list").each(function () {
                            lis = {
                                id: $(this).find('idListic').text(),
                                telefon: $(this).find('telefon').text(),
                                email: $(this).find('email').text(),
                                adresa: $(this).find('adresa').text(),
                                odabraniBrojevi: $(this).find('odabraniBrojevi').text(),
                                nazivKolo: $(this).find('nazivKolo').text(),
                                brojPogodenihBrojeva: $(this).find('brojPogodenihBrojeva').text(),
                                status: $(this).find('status').text(),
                                osvojeniIznos: $(this).find('osvojeniIznos').text(),
                                idKor: $(this).find('idKorisnik').text()
                            };
                            poljePodataka.push(lis);
                        });

                        //kontrolna linija za podatke kolicine manje od 5
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }

                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<tr>';
                            var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                                    "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                            //grupiranje po kolu/igri na srecu
                            if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                                inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                                poljeIgara.push(poljePodataka[i].nazivKolo);
                            }
                            //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                            inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                    '<td>' + poljePodataka[i].telefon + '</td>' +
                                    '<td>' + poljePodataka[i].email + '</td>' +
                                    '<td>' + poljePodataka[i].adresa + '</td>' +
                                    '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                                    '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                                    '<td>' + poljePodataka[i].status + '</td>' +
                                    '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                            if (poljePodataka[i].status === "dobitan") {
                                isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].osvojeniIznos + "&idKorisnik=" + poljePodataka[i].idKor +
                                        "&idListic=" + poljePodataka[i].id;
                                inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                            } else {
                                inHTML += '<td>Isplata nije moguća.</td>';
                            }

                            inHTML += '</tr>';
                        }
                        $('#theBodyIsRound')[0].innerHTML = inHTML;
                    }
                });


            });


            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                var poljeIgara = [];
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                            "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                    //grupiranje po kolu/igri na srecu
                    if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                        inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                        poljeIgara.push(poljePodataka[i].nazivKolo);
                    }
                    //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                    inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].telefon + '</td>' +
                            '<td>' + poljePodataka[i].email + '</td>' +
                            '<td>' + poljePodataka[i].adresa + '</td>' +
                            '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                            '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                    if (poljePodataka[i].status === "dobitan") {
                        isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].status + "&idKorisnik=" + poljePodataka[i].idKor +
                                "&idListic=" + poljePodataka[i].id;
                        inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                    } else {
                        inHTML += '<td>Isplata nije moguća.</td>';
                    }

                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //sljedeca

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;
                var poljeIgara = [];
                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                                "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                        //grupiranje po kolu/igri na srecu
                        if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeIgara.push(poljePodataka[i].nazivKolo);
                        }
                        //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].adresa + '</td>' +
                                '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                        if (poljePodataka[i].status === "dobitan") {
                            isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].status + "&idKorisnik=" + poljePodataka[i].idKor +
                                    "&idListic=" + poljePodataka[i].id;
                            inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                        } else {
                            inHTML += '<td>Isplata nije moguća.</td>';
                        }

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                                "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                        //grupiranje po kolu/igri na srecu
                        if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeIgara.push(poljePodataka[i].nazivKolo);
                        }
                        //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].adresa + '</td>' +
                                '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                        if (poljePodataka[i].status === "dobitan") {
                            isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].status + "&idKorisnik=" + poljePodataka[i].idKor +
                                    "&idListic=" + poljePodataka[i].id;
                            inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                        } else {
                            inHTML += '<td>Isplata nije moguća.</td>';
                        }

                        inHTML += '</tr>';
                    }
                    $('#theBodyIsRound')[0].innerHTML = inHTML;
                }



            });

            //prethodna

            $("#sljedeca").click(function (event) {
                var poljeIgara = [];
                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {

                        inHTML += '<tr>';
                        var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                                "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                        //grupiranje po kolu/igri na srecu
                        if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeIgara.push(poljePodataka[i].nazivKolo);
                        }
                        //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].adresa + '</td>' +
                                '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                        if (poljePodataka[i].status === "dobitan") {
                            isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].status + "&idKorisnik=" + poljePodataka[i].idKor +
                                    "&idListic=" + poljePodataka[i].id;
                            inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                        } else {
                            inHTML += '<td>Isplata nije moguća.</td>';
                        }

                        inHTML += '</tr>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {

                        inHTML += '<tr>';
                        var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                                "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                        //grupiranje po kolu/igri na srecu
                        if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                            inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                            poljeIgara.push(poljePodataka[i].nazivKolo);
                        }
                        //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                        inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                                '<td>' + poljePodataka[i].telefon + '</td>' +
                                '<td>' + poljePodataka[i].email + '</td>' +
                                '<td>' + poljePodataka[i].adresa + '</td>' +
                                '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                                '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                                '<td>' + poljePodataka[i].status + '</td>' +
                                '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                        if (poljePodataka[i].status === "dobitan") {
                            isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].status + "&idKorisnik=" + poljePodataka[i].idKor +
                                    "&idListic=" + poljePodataka[i].id;
                            inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                        } else {
                            inHTML += '<td>Isplata nije moguća.</td>';
                        }

                        inHTML += '</tr>';
                    }

                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                var poljeIgara = [];
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<tr>';
                    var veza = "zaigrajAzuriraj.php?telefon=" + poljePodataka[i].telefon + "&email=" + poljePodataka[i].email +
                            "&adresa=" + poljePodataka[i].adresa + "&odabraniBrojevi=" + poljePodataka[i].odabraniBrojevi + "&idListic=" + poljePodataka[i].id;
                    //grupiranje po kolu/igri na srecu
                    if (!poljeIgara.includes(poljePodataka[i].nazivKolo)) {
                        inHTML += '<td colspan=9> Kolo: ' + poljePodataka[i].nazivKolo + '</td></tr><tr>';
                        poljeIgara.push(poljePodataka[i].nazivKolo);
                    }
                    //dodaj brojPogodenihBrojeva i osvojeniIznos - u čekanju zapis
                    inHTML += '<td> <a href="' + veza + '">' + poljePodataka[i].id + '</td>' +
                            '<td>' + poljePodataka[i].telefon + '</td>' +
                            '<td>' + poljePodataka[i].email + '</td>' +
                            '<td>' + poljePodataka[i].adresa + '</td>' +
                            '<td>' + poljePodataka[i].odabraniBrojevi + '</td>' +
                            '<td>' + poljePodataka[i].brojPogodenihBrojeva + '</td>' +
                            '<td>' + poljePodataka[i].status + '</td>' +
                            '<td>' + poljePodataka[i].osvojeniIznos + '</td>';

                    if (poljePodataka[i].status === "dobitan") {
                        isplata = "../obrasci/isplata.php?iznosIsplate=" + poljePodataka[i].status + "&idKorisnik=" + poljePodataka[i].idKor +
                                "&idListic=" + poljePodataka[i].id;
                        inHTML += '<td><a href=' + isplata + '>Moguća isplata!</a></td>';
                    } else {
                        inHTML += '<td>Isplata nije moguća.</td>';
                    }

                    inHTML += '</tr>';
                }
                $('#theBodyIsRound')[0].innerHTML = inHTML;
            });


            break;

        case "Isplata":

            //izlazi iz stranice i prebacuje se na moj list
            $("#izlazi").click(function () {
                location.replace("../korisnik_dodatno/mojiListici.php");
            });

            break;

        case "Galerija":

            //dinamički kreirati prikaz listica

            poljePodataka = [];
            var podaciPocetak = 0;
            var podaciKraj = 5;
            var inHTML = '';

            $.ajax({
                url: 'json/jsonListici.php',
                type: 'POST',
                dataType: 'json',
                async: false,
                success: function (json) {
                    inHTML = '';

                    $.each(json, function (kljuc, vrijednost) {
                        //pročitaj svaki naziv
                        var slikar = vrijednost.split("%");
                        var slikaVri = slikar[0].split("/");
                        const image = {
                            slika: slikar[0],
                            kolo: slikar[3]
                        };
                        poljePodataka.push(image);

                    });
                    if (poljePodataka.length < 5) {
                        podaciKraj = poljePodataka.length;
                    }
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                                '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                    }
                    $('#insertGalerije')[0].innerHTML = inHTML;
                }
            }, false);

            //za pretrazivac

            $.ajax({
                url: 'json/naziviKola.php',
                type: 'POST',
                dataType: 'json',
                async: false,
                success: function (json) {

                    inPretrazivac = '';
                    inPretrazivac += '<option value = "">Prikaži sve</option>';
                    var i = 1;
                    $.each(json, function (kljuc, vrijednost) {
                        //pročitaj svaki naziv

                        //uzima nazive svih kola koji imaju otvorene igre
                        inPretrazivac += '<option value = "' + vrijednost + '">' + vrijednost + '</option>';
                        i++;
                    });

                    $('#pretrazivac')[0].innerHTML = inPretrazivac;
                }
            }, false);

            //sortform
            //sortiranje po fondu uplaćenih listića ili kolu

            $("#sortButton").click(function (event) {
                poljePodataka = [];
                $.ajax({
                    url: 'json/jsonListici.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        value: $("select[name='sortiranje']").val()
                    },
                    async: false,
                    success: function (json) {
                        inHTML = '';

                        $.each(json, function (kljuc, vrijednost) {
                            //pročitaj svaki naziv
                            var slikar = vrijednost.split("%");
                            const image = {
                                slika: slikar[0],
                                kolo: slikar[3]
                            };
                            poljePodataka.push(image);

                        });
                        if (poljePodataka.length < 5) {
                            podaciKraj = poljePodataka.length;
                        }
                        for (i = podaciPocetak; i < podaciKraj; i++) {
                            inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                                    '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                        }
                        $('#insertGalerije')[0].innerHTML = inHTML;
                    }
                }, false);


            });


            //prva stranica

            $("#prva").click(function (event) {
                podaciPocetak = 0;
                podaciKraj = 5;
                inHTML = '';
                for (i = podaciPocetak; i < podaciKraj; i++) {

                    inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                            '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                }
                $('#insertGalerije')[0].innerHTML = inHTML;
            });

            $("#prethodna").click(function (event) {
                podaciPocetak -= 5;
                podaciKraj -= 5;

                if ((podaciPocetak) < 0) {
                    var inHTML = '';
                    for (i = 0; i < podaciKraj; i++) {
                        inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                                '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                    }
                    $('#insertGalerije')[0].innerHTML = inHTML;
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                                '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                    }
                    $('#insertGalerije')[0].innerHTML = inHTML;
                }



            });


            $("#sljedeca").click(function (event) {

                podaciPocetak += 5;
                podaciKraj += 5;

                if ((podaciPocetak + 5) > poljePodataka.length) {
                    var inHTML = '';
                    for (i = podaciPocetak; i < poljePodataka.length; i++) {
                        inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                                '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                    }
                } else {
                    var inHTML = '';
                    for (i = podaciPocetak; i < podaciKraj; i++) {
                        inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                                '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                    }

                }
                $('#insertGalerije')[0].innerHTML = inHTML;
            });

            //zadnja

            $("#zadnja").click(function (event) {
                inHTML = '';
                podaciPocetak = poljePodataka.length - 5;
                podaciKraj = poljePodataka.length;

                for (i = podaciPocetak; i < podaciKraj; i++) {
                    inHTML += '<div class="video1Grid"> <figure class="podaci"><h3 class="videoNazivResponzivno">' + poljePodataka[i].kolo + '</h3>' +
                            '<img style="height:40%; width:40%;" src=' + poljePodataka[i].slika + '></figure></div>';
                }
                $('#insertGalerije')[0].innerHTML = inHTML;
            });



            //filtriranje po lutriji
            //prikazi/sakrij
            //radi
            $("#gumbPretraga").click(function () {
                //mijenanje po show, hide
                $(".podaci")
                        .hide()
                        //treba lower case prepoznavati
                        .filter("figure:contains('" + $("select[name='pretrazivac']").val() + "')")

                        .show();

                if ($(".podaci:visible").length === 0) {
                    $("#prazno").text("Nema podataka");
                } else {
                    $("#prazno").empty();
                }

            });

            break;

        case "Registracija":


            $("#demo-form").submit(function (token) {
                this.submit();
            });

            var poljeGresaka = "";

            $("#form1").submit(function (event) {

                //provjere

                var testDuljinePrezime = false;

                var testDuljineIme = false;

                var specijalniZnakovi = ["!", "#", "$", "%", "&", "(", ")", "*", "-", ";", ":", "<", ">", "=", "@"];
                var sadrzi = false;

                var korime = $("#korime").val();
                //korime ne smije imati specijalne znakove
                for (i = 0; i < korime.length; i++) {
                    if (specijalniZnakovi.includes(korime[i])) {
                        if (!poljeGresaka.includes("Korisničko ime ne smije sadržavati znakove:")) {
                            poljeGresaka += "Korisničko ime ne smije sadržavati znakove: " + specijalniZnakovi.toString() + ".\n";
                            sadrzi = true;
                        }
                    }
                }
                
                //lozinka1 == lozinka2

                var loz1 = $("#lozinka1").val();
                var loz2 = $("#lozinka2").val();

                if (loz1 !== loz2) {
                    $("#lozinka2Labela").attr("style", "color:crimson");
                    $("#lozinka1Labela").attr("style", "color:crimson");
                    poljeGresaka += "Lozinke se ne podudaraju.\n";
                } else {
                    $("#lozinka1Labela").attr("style", "color:black");
                    $("#lozinka2Labela").attr("style", "color:black");
                }

                //je li ime dovoljno dugacko
                var imeKor = $("#ime").val();

                if ((imeKor.length < 3) || (imeKor.length > 20)) {
                    poljeGresaka += "Ime nema točan broj znakova.\n";
                    testDuljineIme = true;
                }
                if (testDuljineIme) {
                    $("#imeLabela").attr("style", "color:crimson");
                } else {
                    $("#imeLabela").attr("style", "color:black");
                }

                //prezime duljina

                var prezimeKor = $("#prezime").val();

                //max 20 znakova
                if (prezimeKor.length > 15) {
                    poljeGresaka += "Prezime treba imati maksimalno 15 znakova.\n";
                    testDuljinePrezime = true;
                }
                if (testDuljinePrezime) {
                    $("#prezimeLabela").attr("style", "color:crimson");
                } else {
                    $("#prezimeLabela").attr("style", "color:black");
                }

                //email regexp

                var email = $("#email").val();
                var rege = new RegExp(/^([\w.-]+)@(\w+)\.(\w{2,3})$/);

                var okie = rege.test(email);
                if (!okie) {
                    poljeGresaka += "Email se ne poklapa s predloškom.\n";
                    $("#emailLabela").attr("style", "color:crimson");
                } else {
                    $("#emailLabela").attr("style", "color:black");
                }

                //datum regexp

                var datum = $("#datumRod").val();
                var regx = new RegExp(/^(\d{4})-([0-1][0-9])-([0-3][0-9])$/);

                var yes = regx.test(datum);
                if (!yes) {
                    poljeGresaka += "Datum se ne poklapa s predloškom.\n";
                    $("#datumLabela").attr("style", "color:crimson");
                } else {
                    $("#datumLabela").attr("style", "color:black");
                }

                var god = datum.split("-");
                var godina = god[0];
                var trenutnoVrijeme = new Date().getFullYear();

                if ((trenutnoVrijeme - godina) < 18) {
                    poljeGresaka += "Za pristup stranici trebate imati minimalno 18 godina.\n";
                    $("#datumLabela").attr("style", "color:crimson");
                } else {
                    $("#datumLabela").attr("style", "color:black");
                }

                korisnikPronaden = false;
                //postoji li korime vec
                $.ajax({
                    //provjera korisničkog imena
                    url: '../xml/provjeraKorimenaRegistracija.php',
                    type: 'POST',
                    dataType: 'xml',
                    async: false,
                    success: function (xml) {
                        $(xml).find("korisnik").each(function () {

                            if ($(this).find('korisnickoIme').text() === $("#korime").val()) {
                                korisnikPronaden = true;
                                poljeGresaka += "Korisničko ime već postoji.\n";
                            }
                        });

                    }

                }, false);

                if ((korisnikPronaden===true) || (sadrzi===true)) {
                    $("#korimeLabela").attr("style", "color:crimson");
                } else {
                    $("#korimeLabela").attr("style", "color:black");
                }
                
                if (poljeGresaka !== "") {
                    event.preventDefault();
                    alert(poljeGresaka);
                    poljeGresaka = "";
                }

            });

            break;


        case "AzurirajM":

            poljeGresaka = "";

            $("#formIgra").submit(function (event) {

                //provjere
                var poc = $("#dVPocetak").val();
                var kraj = $("#dVKraj").val();
                var rege = new RegExp(/^(\d{4})-([0-1][0-9])-([0-3][0-9]) ([0|1][0-9]:[0-5][0-9]:[0-5][0-9])$/);

                var okie = rege.test(poc);
                if (!okie) {
                    poljeGresaka += "Datum početka se ne poklapa s predloškom.\n";
                    $("#labelaPocetak").attr("style", "color:crimson");
                } else {
                    $("#labelaPocetak").attr("style", "color:black");
                }
                var ok = rege.test(kraj);
                if (!ok) {
                    poljeGresaka += "Datum završetka se ne poklapa s predloškom.\n";
                    $("#labelaKraj").attr("style", "color:crimson");
                } else {
                    $("#labelaKraj").attr("style", "color:black");
                }

                if (poljeGresaka !== "") {
                    event.preventDefault();
                    alert(poljeGresaka);
                    poljeGresaka = "";
                }

            });

            break;


        case "Dodaj igruM":
            //ucitaj popis lutrija moderatora
            $.ajax({
                url: '../json/lutrijeModeratora.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    idKor: $("#sakriven").val()
                },
                async: false,
                success: function (json) {
                    inPretrazivac = '';
                    $.each(json, function (kljuc, vrijednost) {
                        var lut = vrijednost.split("%");
                        inPretrazivac += '<option value = "' + lut[0] + '">' + lut[1] + '</option>';

                    });

                    $('#lutrija')[0].innerHTML = inPretrazivac;
                }
            }, false);


            poljeGresaka = "";

            $("#formIgra").submit(function (event) {

                //provjere
                if ($('#lutrija').val() === null) {
                    $("#lutrijaLabela").attr("style", "color:crimson");
                    poljeGresaka += "Potrebno je odabrati lutriju.\n";
                } else {
                    $("#lutrijaLabela").attr("style", "color:black");
                }

                var poc = $("#dVPocetak").val();
                var kraj = $("#dVKraj").val();
                var rege = new RegExp(/^(\d{4})-([0-1][0-9])-([0-3][0-9]) ([0|1][0-9]:[0-5][0-9]:[0-5][0-9])$/);

                var okie = rege.test(poc);
                if (!okie) {
                    poljeGresaka += "Datum početka se ne poklapa s predloškom.\n";
                    $("#labelaPocetak").attr("style", "color:crimson");
                } else {
                    $("#labelaPocetak").attr("style", "color:black");
                }
                var ok = rege.test(kraj);
                if (!ok) {
                    poljeGresaka += "Datum završetka se ne poklapa s predloškom.\n";
                    $("#labelaKraj").attr("style", "color:crimson");
                } else {
                    $("#labelaKraj").attr("style", "color:black");
                }

                if (poljeGresaka !== "") {
                    event.preventDefault();
                    alert(poljeGresaka);
                    poljeGresaka = "";
                }

            });

            break;


        case "PridruziM":
            //ucitaj popis lutrija moderatora

            $.ajax({
                url: '../json/lutrijeModeratora.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    idKor: $("#sakriven").val()
                },
                async: false,
                success: function (json) {

                    inPretrazivac = '';
                    $.each(json, function (kljuc, vrijednost) {

                        var lut = vrijednost.split("%");
                        inPretrazivac += '<option value = "' + lut[0] + '">' + lut[1] + '</option>';

                    });

                    $('#lutrija')[0].innerHTML = inPretrazivac;
                }
            }, false);

            //ucitaj sve igre


            $.ajax({
                url: '../json/neIgreLutrije.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    lutrija: $("#lutrija").val()
                },
                async: false,

                success: function (json) {
                    inHTML = '';
                    $.each(json, function (kljuc, vrijednost) {
                        naziv = vrijednost.split("%");
                        //napravi vrijednost
                        inHTML += '<option value = "' + naziv[0] + '">' + naziv[1] + '</option>';
                    })
                    $('#igra')[0].innerHTML = inHTML;
                }

            }, false);





            break;


        case "Azur list":

            $("#formIgra").submit(function (event) {

                poljeGresaka = "";
                stringPutanja = "listici/" + $("#naziv")[0].files[0].name;

                $.ajax({
                    url: '../json/generatorJson.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        naziv: $("#naziv")[0].files[0].name
                    },
                    async: false,
                    success: function (json) {
                        $.each(json, function (kljuc, vrijednost) {
                            if (stringPutanja === vrijednost) {
                                poljeGresaka += "Potrebno je promijeniti naziv datoteke.\n";
                                $("#nazivLabela").attr("style", "color:crimson");
                            } else {
                                $("#nazivLabela").attr("style", "color:black");
                            }
                        });
                    }

                }, false);

                if (poljeGresaka !== "") {
                    alert(poljeGresaka);
                    poljeGresaka = "";
                    event.preventDefault();
                }

            });

            break;

        default:
            break;
    }
});
