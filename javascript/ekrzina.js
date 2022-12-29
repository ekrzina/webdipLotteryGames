//javascript za cookieje za uvjete korištenja

window.addEventListener("load", kreirajDogadaje);

function kreirajDogadaje() {
    if (!confirm("Pritiskom na 'OK' prihvaćam uvjete korištenja za kolačiće.")) {
        location.reload();
    }
}