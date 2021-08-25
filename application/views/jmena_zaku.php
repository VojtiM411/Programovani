<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <title>Seznam kurzů</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET","kurz_zaka.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <form>
            <select name="users" onchange="showUser(this.value)">
            <option value="">Jméno Žáka:</option>
            <option value="1">Michaela Kopecká</option>
            <option value="2">Tomáš Jurečka</option>
            <option value="3">Jan Francouz</option>
            <option value="4">Daniela Černá</option>
            </select>
        </form>
        <hr>
        <div id="txtHint"><strong>Kurz žáka:</strong></div>
    </div>
</body>