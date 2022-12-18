<?php

class Chef
{
    function makeChicken()
    {
        echo "The chef makes chicken <br>";
    }
    function makeSalad()
    {
        echo "The chef makes salad <br>";
    }
    function makeSpecialDish()
    {
        echo "The chef makes bbq ribs <br>";
    }
}

class ItalianChef extends Chef
{
    function makePasta()
    {
        echo "The chef makes pasta <br>";
    }

    //overriding the function
    function makeSpecialDish()
    {
        echo "The chef makes chicken parm <br>";
    }
}

$chef = new Chef();
$chef->makeChicken(); //The chef makes chicken

$italianChef = new ItalianChef();
$italianChef->makeChicken(); ////The chef makes chicken
//even tho italianChef hasn't anything written in class we can still print function cause he has the all function a Chef has. 

$italianChef->makePasta(); //The chef makes pasta
// $chef->makePasta(); // ----THROWS AN ERROR cause he doesn't have a makePasta method


$chef->makeSpecialDish(); // The chef makes bbq ribs
$italianChef->makeSpecialDish(); // The chef makes chicken parm
//both of them gonna do the different dishes