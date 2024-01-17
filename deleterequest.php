<?php
include("data_class.php");

$deleterequestid=$_GET['deleterequestid'];


$obj=new data();
$obj->setconnection();
$obj->deleterequest($deleterequestid);