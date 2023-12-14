//Background Resizing


var HintergrundBildDatei = document.getElementById("Background_PIC");

if(window.innerWidth >= 1000){
    HintergrundBildDatei.style.backgroundSize="contain";
    HintergrundBildDatei.style.width="100vw";
    
   
}
else{
    HintergrundBildDatei.style.width="10vw";
}
