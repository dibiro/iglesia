
//Nos aseguramos que estén definidas
//algunas funciones básicas
window.URL = window.URL || window.webkitURL;
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia ||
function() {
    alert('Su navegador no soporta navigator.getUserMedia().');
};

//Este objeto guardará algunos datos sobre la cámara
window.datosVideo = {
    'StreamVideo': null,
    'url': null
}



    //Pedimos al navegador que nos da acceso a 
    //algún dispositivo de video (la webcam)
    navigator.getUserMedia({
        'audio': false,
        'video': true
    }, function(streamVideo) {
        datosVideo.StreamVideo = streamVideo;
        datosVideo.url = window.URL.createObjectURL(streamVideo);
        jQuery('#camara').attr('src', datosVideo.url);

    }, function() {
        alert('No fue posible obtener acceso a la cámara.');
    });
    




function oculta(id){
     var elDiv = document.getElementById(id); //se define la variable "elDiv" igual a nuestro div
     elDiv.style.display='none'; //damos un atributo display:none que oculta el div     
    };
function muestra(id){
    var elDiv = document.getElementById(id); //se define la variable "elDiv" igual a nuestro div
   elDiv.style.display='block';//damos un atributo display:block que  el div     
    };