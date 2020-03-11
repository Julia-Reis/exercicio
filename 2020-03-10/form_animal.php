<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar Animal</title>
</head>
<body>
<form action="tipo_animal.php" method="GET">
    <fieldset>
        <legend>Cadastrar Animal</legend>
        <input type="radio" class="radio" name="tipo" value="ave" /> Ave
        <input type="radio" class="radio" name="tipo" value="anfibio" /> Anfíbio
        <input type="radio" class="radio" name="tipo" value="mamifero" /> Mamífero
        <input type="radio" class="radio" name="tipo" value="peixe" /> Peixe
        <input type="radio" class="radio" name="tipo" value="reptil" /> Réptil
        <br />
        <input type="submit" value="Proximo" />
    </fieldset>
    
    
</form>
</body>
</html>