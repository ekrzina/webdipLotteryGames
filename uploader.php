<?php

//direktorij prijenosa treba imati prava chmod 777 (citaj, pisi, izvrsavaj)

$userfile = $_FILES['naziv']['tmp_name'];
$userfile_name = $_FILES['naziv']['name'];
$userfile_size = $_FILES['naziv']['size'];
$userfile_type = $_FILES['naziv']['type'];
$userfile_error = $_FILES['naziv']['error'];
if ($userfile_error > 0) {
    echo 'Problem: ';
    switch ($userfile_error) {
        case 1: echo 'Veličina veća od ' . ini_get('upload_max_filesize');
            break;
        case 2: echo 'Veličina veća od ' . $_POST["MAX_FILE_SIZE"] . 'B';
            break;
        case 3: echo 'Datoteka djelomično prenesena';
            break;
        case 4: echo 'Datoteka nije prenesena';
            break;
    }
    exit;
}

$upfile = 'listici/' . $userfile_name; //odrediste za prijenos relativno u odnosu na trenutnu skriptu uploader ili kopirani kod

if (is_uploaded_file($userfile)) {
    if (!move_uploaded_file($userfile, $upfile)) {
        echo 'Problem: nije moguće prenijeti datoteku na odredište';
        exit;
    }
} else {
    echo 'Problem: mogući napad prijenosom. Datoteka: ' . $userfile_name;
    exit;
}

echo '<p>Datoteka uspješno prenesena</p><br /><br />';
                    
