const button = document.getElementById("botao");

function mudaCor() {
    button.style.backgroundColor = '#b64bff';
    button.style.color = 'white';
    button.style.borderColor = 'white';
    
}
function mudaCor2() {
    button.style.backgroundColor = 'white';
    button.style.color = 'black';
    
}/*function enviado(){
    window.location="http://www.hres.org.br/";

}*/

button.addEventListener('mouseover',mudaCor);
button.addEventListener('mouseout',mudaCor2);

//button.addEventListener('click', enviado);



    



