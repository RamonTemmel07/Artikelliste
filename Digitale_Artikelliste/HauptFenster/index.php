<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="/Digitale_Artikelliste/HauptFenster/style.css">
</head>
<body>



    <!--Hintergrundbild--><img id="Background_PIC" src="/Digitale_Artikelliste/SRC_Pictures/INoBAckgroundHeighter.jpg">
    
    

    <!--Kontainer um Die Elemente zu sortieren-->
    <div id="Struktur_DIVHomepage">



        <!--Navigations_Element--><div id="Div_Navigation">
                <!-- Hier werden die Buttons etc für die NAvigationsleiste (links) platziert-->
                
                
                
                


                <form action="/Digitale_Artikelliste/LogInFenster/index.php" method="post">
                <div id="NaviElement_Div_Eins">
                    <button id="NAvigationButtonLogIn"></button>
                </div></form>



                <form action="/Digitale_Artikelliste/BearbeitungsFenster/index.php" method="post">
                <div id="NaviElement_Div_Zwei">
                <button id="NAvigationButtonHinzufügen"></button>
                </div></form>



                <form action="/Digitale_Artikelliste/TabelleFenster/index.php" method="post">
                <div id="NaviElement_Div_Drei">
                <button id="NAvigationButtonTabelle"></button>
                </div></form>



        </div>



        <!--Content_Element--><div id="Div_Content">

       

            <!--Kontainer für Suchfeld Element--><div id="SuchfeldKontainer">



                <!--Suchfeld--><input type="text" id="Suchfeld" placeholder=" Suche">
                



            </div>



            <!--Kontainer wo Medikamente Angezeigt werden--><div id="ErgebnisKontainer">



                <!--Head bereich für Anzeige des Contents--><div id="Header_ErgebnisKontainer">
                    <!--Text Für ErgbnisLeiste Header--><p id="Text_ErgbnisLEisteÜberschrift">Ergebnisleiste</p>
                </div>



                <!--Inhalt/Gesuchte Elemente Anzeigen Kontainer--><div id="Center_ErgebnisKontainerMedikamente">

                </div>



            </div> 




        </div>



        


    </div>


    



    <button id="MehrAnzeigenButton">Mehr Anzeigen</button>



    






<script src="/Digitale_Artikelliste/HauptFenster/js.js"></script>







</body>
</html>