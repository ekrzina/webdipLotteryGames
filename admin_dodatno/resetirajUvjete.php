<?php

setcookie("uvjetiKoristenja", "", time() - 3600);

header("Location:konfiguracija.php");
exit();