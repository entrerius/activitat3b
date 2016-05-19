<!DOCTPYE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registre usuaris</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<!--
<form action="index.php" method="POST">
    <input type="text" name="nom" max="15" placeholder="Escriu el teu nom">
    <input type="text" name="cognom" max="20" placeholder="Escriu el teu cognom">
    <input type="submit" value="Enviar formulari">
    <input type="reset" value="Esborrar">
    <label>Sexe
        <select>
        <option>Masculí</option>
        <option>Femení</option>
        </select>
    </label>
</form>-->
<?php /*
$nom=$_POST["nom"];
$cognom=$_POST["cognom"];
echo $nom," ",$cognom;
//----------------------------------------------------------------------------------
 */?>
<h3>Formulari de Registre</h3>
<form class="col-lg-offset-4 col-lg-4" action="mostrar.php" method="post" enctype="multipart/form-data">
    <input class="form-group form-control" type="text" name="nom" placeholder="Escriu el nom">
    <input class="form-group form-control" type="text" name="cognom" placeholder="Escriu el cognom">
    <!--Telefon-->
    <div class="input-group form-group"> <!--obrim un div per cada input que volem fer (form-control deixa espai) -->
        <div class="input-group-addon"> <!--Afegim la part gris al input per poder posar un icone -->
            <span class="glyphicon glyphicon-phone-alt"></span><!--mirem al bootstrap el codi de glyphicon que ens interessi -->
        </div>
        <input class=" form-control" type="tel" name="telefon" placeholder="Escriu el telefon">
    </div>
    <!-- fi telefon -->
    <!--email-->
    <div class="input-group form-group"> <!--obrim un div per cada input que volem fer -->
        <div class="input-group-addon"> <!--Afegim la part gris al input per poder posar un icone -->
            <span class="glyphicon glyphicon-envelope"></span><!--mirem al bootstrap el codi de glyphicon que ens interessi -->
        </div>
    <input class=" form-control" type="email" name="email" placeholder="Escriu el teu e-mail">
    </div>
    <!-- fi email-->
    <div class="form-group">
    <label class="radio-inline"><input type="radio" name="sexe" value="Home">Masculí</label>
    <label class="radio-inline"><input type="radio" name="sexe" value="Dona">Femeni</label>
    </div>
    <input class="form-group form-control" type="text" name="user" placeholder="Escriu el nom d'usuari">
    <input class="form-group form-control" type="password" name="password" placeholder="Escriu el nom password">
    <input class="form-group form-control" type="file" name="arxiu"> <!-- per pujar un arxiu -->
    <input class="btn btn-success form-group " type="submit" value="Enviar formulari">
    <input class="btn btn-danger form-group " type="reset" value="Esborrar">
</form>


</body>


</html>