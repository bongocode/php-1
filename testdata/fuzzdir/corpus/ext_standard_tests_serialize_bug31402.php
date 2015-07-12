<?php 

class TestX {
  var $i;

  function __construct($i) {
    $this->i = $i;
  }
}

class TestY {
  var $A = array();
  var $B;

  function __construct() {
    $this->A[1] = new TestX(1);
    $obj = new TestX(2);
    $this->A[2] = & $obj;
    $this->A[3] = & $this->A[2];
    $this->B = $this->A[1];
  }
}

$before = new TestY();
$ser = serialize($before);
$after = unserialize($ser);

var_dump($before, $after);

?>
===DONE===
