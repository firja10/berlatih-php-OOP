<?php
class Animal {

public $legs = 4;
public $cold_blooded = "false"; 

function __construct($name)
{ $this->name = $name; }


function setLegs($legs) 
{ $this->legs = $legs; }


function getName()
{ return $this->name; }

function getLegs()
{ return $this->legs; }

function getBlood()
{ return $this->cold_blooded;} } 






?>