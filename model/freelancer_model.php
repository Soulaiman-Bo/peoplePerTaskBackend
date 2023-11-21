<?php 

function dbConnect()
{
    return new PDO('mysql:dbname=peoplepertask;host=localhost', 'root', '');
}

function create(){
    $pod = dbConnect();
    
};
function getAll(){};
function delete(){};
function update(){};

