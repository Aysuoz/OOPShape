<?php

class shape {

    public $perimeter;
    public $area;

}

class rectangle extends shape {

    public function perimeter(){
        return (($this->uzunkenar + $this-> kisakenar)* 2);
    }

    public function area(){
        return $this->uzunkenar * $this->kisakenar;
    }
}

class triangle extends shape{

    public function perimerter(){
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }

    public function area(){
        return $this->taban * $this->yükseklik;
    }
}

class square extends shape{

    public function perimerter(){
        return $this->kenar1 + $this->kenar2;
    }

    public function area(){
        return $this->kenar1 * $this->kenar2;
    }
}
    
$rectangle = new rectangle();
$triangle = new triangle();
$square = new square();

$rectangle->uzunkenar = 10;
$rectangle->kisakenar = 5;

$triangle->kenar1 = 12;
$triangle->kenar2 = 13;
$triangle->kenar3 = 5;
$triangle->taban = 5;
$triangle->yukseklik = 12;

$square->kenar1 = 10;
$square->kenar2 = 10;

echo 'Rectangle Perimerter:'.$rectangle->perimeter().'<br>';
echo 'Rectangle Area:'.$rectangle->area().'<br>';

echo 'Triangle Perimerter:'.$triangle->perimerter().'<br>';
echo 'Triangle Area:'.$triangle->area().'<br>';

echo 'Square Perimerter:'.$square->perimerter().'<br>';
echo 'Square Area:'.$square->area().'<br>';

?>