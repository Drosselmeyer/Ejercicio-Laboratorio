<?php

    include_once('Clases/Herramientas.class.php');

    $herram1 = new Herramientas(1,"Martillo","Stanley",5,10,25,"img1.jpg");
    $herram2 = new Herramientas(2,"Sierra","Black&Decker",35,50,5,"img2.jpg");
    $herram3 = new Herramientas(3,"Pala","CH",12,19,4,"img3.jpg");

    echo $herram1->getTipo()."<br>";
    echo $herram2->getTipo()."<br>";
    echo $herram3->getTipo()."<br>";

    crearArchivo($herram1);

    function crearArchivo(Herramienta $herram){

        $archivo = fopen('herramientas.txt','a+');

        fwrite($archivo,$herram->getId()."\n");
        fwrite($archivo,$herram->getTipo()."\n");
        fwrite($archivo,$herram->getMarca()."\n");
        fwrite($archivo,$herram->getCosto()."\n");
        fwrite($archivo,$herram->getPrecio()."\n");
        fwrite($archivo,$herram->getUnidadesDisp()."\n");
        fwrite($archivo,$herram->getImg()."\n");

        fwrite($archivo,"\n");

        fclose($archivo);

    }

    function leerArchivo(){
        $archivo = fopen('clima.txt','r');

        while(!feof($archivo)){
            echo fgets($archivo)."<br/>";
        }

        fclose($archivo);
    }

?>