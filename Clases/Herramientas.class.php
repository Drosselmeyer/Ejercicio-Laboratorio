<?php
    class Herramientas{
        //Propiedades\
        private $id;
        private $tipo;
        private $marca;
        private $costo;
        private $precio;
        private $unidades_disp;
        private $imagen;

        //Constructor
        function __construct($var1,$var2,$var3,$var4,$var5,$var6,$var7){
            $this->id=$var1;
            $this->tipo = $var2;
            $this->marca = $var3;
            $this->costo = $var4;
            $this->precio = $var5;
            $this->unidades_disp = $var6;
            $this->imagen = $var7;
        }

        //Setter y getter
        function setId($var){
            $this->id = $var;
        }

        function getId(){
            return $this->id;
        }

        function setTipo($var){
            $this->tipo = $var;
        }

        function getTipo(){
            return $this->tipo;
        }

        function setMarca($var){
            $this->marca = $var;
        }

        function getMarca(){
            return $this->marca;
        }

        function setCosto($var){
            $this->costo = $var;
        }

        function getCosto(){
            return $this->costo;
        }

        function setPrecio($var){
            $this->precio = $var;
        }

        function getPrecio(){
            return $this->precio;
        }

        function setUnidadesDisp($var){
            $this->tipo = $var;
        }

        function getUnidadesDisp(){
            return $this->unidades_disp;
        }

        function setImg($var){
            $this->imagen = $var;
        }


        function getImg(){
            return $this->imagen;
        }

        //Metodos
        function agregarProducto($producto){
        }

        function eliminarProducto(){
            $producto_eliminado=0;
            return $producto_eliminado;
        }

        function modificarCostos(){
        }

        function actualizarImagen($path_imagen){
        }

    }


?>