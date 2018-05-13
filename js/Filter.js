/**
 * Created by Eleazar on 13/05/2018.
 */

document.getElementById("BioBio").addEventListener("click",MuestraBio);
document.getElementById("Valdivia").addEventListener("click",MuestraValdivia);
document.getElementById("Valparaiso").addEventListener("click",MuestraValparaiso);
document.getElementById("LosLagos").addEventListener("click",MuestraLosLagos);
document.getElementById("Todos").addEventListener("click",OcultaBotones);

function MuestraBio() {
//#72C05B
    $('#BioBio').css("background-color","#72C05B");
    $('#BioBio').css("color","white");

    $('#Valdivia').css("background-color","#e5e5e5");
    $('#Valdivia').css("color","#64686d");

    $('#Valparaiso').css("background-color","#e5e5e5");
    $('#Valparaiso').css("color","#64686d");

    $('#LosLagos').css("background-color","#e5e5e5");
    $('#LosLagos').css("color","#64686d");

    $('#BioBio2').css("display","inline-block");
    $('#Valdivia2').css("display","none");
    $('#Valparaiso2').css("display","none");
    $('#LosLagos2').css("display","none");
}
function MuestraValdivia() {

    $('#BioBio').css("background-color","#e5e5e5");
    $('#BioBio').css("color","#64686d");

    $('#Valdivia').css("background-color","#72C05B");
    $('#Valdivia').css("color","white");

    $('#Valparaiso').css("background-color","#e5e5e5");
    $('#Valparaiso').css("color","#64686d");

    $('#LosLagos').css("background-color","#e5e5e5");
    $('#LosLagos').css("color","#64686d");

    $('#BioBio2').css("display","none");
    $('#Valdivia2').css("display","inline-block");
    $('#Valparaiso2').css("display","none");
    $('#LosLagos2').css("display","none");
}
function MuestraValparaiso() {

    $('#BioBio').css("background-color","#e5e5e5");
    $('#BioBio').css("color","#64686d");

    $('#Valdivia').css("background-color","#e5e5e5");
    $('#Valdivia').css("color","#64686d");

    $('#Valparaiso').css("background-color","#72C05B");
    $('#Valparaiso').css("color","white");

    $('#LosLagos').css("background-color","#e5e5e5");
    $('#LosLagos').css("color","#64686d");

    $('#BioBio2').css("display","none");
    $('#Valdivia2').css("display","none");
    $('#Valparaiso2').css("display","inline-block");
    $('#LosLagos2').css("display","none");
}
function MuestraLosLagos() {

    $('#BioBio').css("background-color","#e5e5e5");
    $('#BioBio').css("color","#64686d");

    $('#Valdivia').css("background-color","#e5e5e5");
    $('#Valdivia').css("color","#64686d");

    $('#Valparaiso').css("background-color","#e5e5e5");
    $('#Valparaiso').css("color","#64686d");

    $('#LosLagos').css("background-color","#72C05B");
    $('#LosLagos').css("color","white");

    $('#BioBio2').css("display","none");
    $('#Valdivia2').css("display","none");
    $('#Valparaiso2').css("display","none");
    $('#LosLagos2').css("display","inline-block");
}
function OcultaBotones() {

    $('#BioBio').css("background-color","#e5e5e5");
    $('#BioBio').css("color","#64686d");

    $('#Valdivia').css("background-color","#e5e5e5");
    $('#Valdivia').css("color","#64686d");

    $('#Valparaiso').css("background-color","#e5e5e5");
    $('#Valparaiso').css("color","#64686d");

    $('#LosLagos').css("background-color","#e5e5e5");
    $('#LosLagos').css("color","#64686d");

    $('#BioBio2').css("display","none");
    $('#Valdivia2').css("display","none");
    $('#Valparaiso2').css("display","none");
    $('#LosLagos2').css("display","none");
}

