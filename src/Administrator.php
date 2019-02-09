<?php

namespace Webdimension\Administrator;
use pdo;
class Administrator
{
 /**
	* @var pdo
	*/
 private $con;

 /**
	* @var string
	*/
 private $table;

 /**
	* @param mysqli $con
	* @param string $table
	*/
 public function __construct($con, $table = 'administratojr')
 {
	$this->con = $con;
	$this->table = $table;
 }

 /**
	* Close the session
	* @return bool
	*/
}
