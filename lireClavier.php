<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lecture au clavier</title>
</head>
<body>
<h1>Lecture au clavier</h1>
<script>
function lireClavier() {
    let str = prompt("Entrez une ligne et validez avec Entrée:");
    return str;
}

window.onload = function() {
    let buffer = lireClavier();
    alert("Vous avez écrit : '" + buffer + "'");
};
</script>
</body>
</html>