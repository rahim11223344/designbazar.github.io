<?php
$encodedurl =$_GET['link'];
$decodedurl = rawurldecode($encodedurl);
echo $decodedurl;