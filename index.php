<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
        var xhttp;

        if(window.XMLHttpRequest){
            xhttp = new XMLHttpRequest();
        }
        else
        {
           xhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        function ellenoriz(felhasznalo){
            var date=new Date().getTime();
            xhttp.abort();
            xhttp.open("GET","ellenoriz.php?nev="+felhasznalo+"&ido="+date,true);

            xhttp.onreadystatechange = function() {
                //ha az állapota az objektumnak megváltozott
                if (this.readyState == 4) {
                    //ha sikerül a beolvasás
                    document.getElementById("terulet").innerHTML=this.responseText;
                    //válaszsszöveget megkapjuk
                    console.log("3");
                }
            };

            xhttp.send(null);
        }

    </script>
    <form>
        <input type="text" onkeyup="ellenoriz(this.value)">
        <span id="terulet"></span>
    </form>
</body>
</html>