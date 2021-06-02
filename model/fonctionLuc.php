<?php

include("product.php");


function prixTTC($prixHT){
       $prixTTC = $prixHT * 1.20;

       return $prixTTC;

       
};

