var element = document.getElementById('phone');
var maskOptions = {
  mask: '+{7} 000 000 00-00'
};
var mask = IMask(element, maskOptions);

document.getElementById("open").addEventListener('click', function () {
  document.getElementById("Serkan").style.pointerEvents = 'all';
  document.getElementById("Serkan").style.cursor = 'pointer';
});

var audio = new Audio("serkan.mp3");
document.getElementById("Serkan").addEventListener('click', function () {
        // document.getElementById("text2").style.display = 'none';
        // document.getElementById("text1").style.display = 'block';
        audio.play();
});