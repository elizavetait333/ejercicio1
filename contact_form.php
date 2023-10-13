<?php
//http://localhost/ejercicioGit/contacts-app-23-24-elizavetait333/contact_form.php
//In this script do the self-validated form

$contacts = require_once __DIR__.'/data.php';
?>

<!--Es el cuadrado negro-->
<form action="">
    <label for="ID"> ID </label>
    <!--El "value="0" lo que hace es que aparezca un 0 por defecto-->
    <input type="text" readonly name="ID" value="0">
    <br>
    <br>
    <label for="TITLE"> Title </label>
    <input type="radio" name="TITLE" id="Mr" value="Mr" selected >
    <label for="Mr">Mr.</label>
    <input type="radio" name="TITLE" id="Mrs" value="Mrs">
    <label for="Mrs">Mrs</label>
    <input type="radio" name="TITLE" id="Miss" value="Miss">
    <label for="Miss">Miss</label>
    <br>
    <br>
    <label for="Name"> First name </label>
    <input type="text" name="Name">
    <label for="Surname"> Surname </label>
    <input type="text" name="Surname">
    <br>
    <br>
    <label for="Birthday"> Birth date </label>
    <input type="date" name="Birthday" id="Birthday">
    <br>
    <br>
    <label for="Phone"> Phone </label>
    <input type="text"  name="Phone">
    <br>
    <br>
    <label for="E-mail"> E-mail </label>
    <input type="text"  name="E-mail">
    <br>
    <br>
    <label for=""> Type </label>
    <input type="checkbox" name="Favourite" id="Favourite">
    <label for="Favourite"> Favourite </label>
    <input type="checkbox" name="Important" id="Important">
    <label for="Important"> Important </label>
    <input type="checkbox" name="Archieved" id="Archieved">
    <label for="Archieved"> Archieved </label>
    <br>
    <br>
    <input type="button" value="Save">
    <input type="button" value="Update">
    <input type="button" value="Delete">
</form>
<!--Ahí acaba el cuadrado negro-->