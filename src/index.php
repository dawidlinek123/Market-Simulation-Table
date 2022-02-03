<?php 
require_once __DIR__.'/classes/Simulation.php';

//Here you create your simulations, as second parametr you can add properties(optional)
$simulations=[
    new Simulation("Name1",['Expected return'=>'120%']),
    new Simulation("Name2"),
];

//Even afrer you create simulations array, you can still add properies
$simulations[1]->addProperty("Strategy value",'1000eur');
$simulations[1]->addProperty("Created at",'10.12.2021');

//Ten you can edit every ptoperty
$simulations[1]->properties['Strategy value']='1200eur';

//Every simulation has tableData property, there you can add data wich will be displayed in table
//In first row are headers.
$simulations[0]->tableData=[
    ['ID','Name','Value'],
    ['1','APPL','100eur'],
    ['2','GOOGL','1200eur'],
];

//Or you can add data throught addToTable method
$simulations[0]->addToTable(['3','ALV','23eur']);


echo Simulation::generateHtml($simulations);