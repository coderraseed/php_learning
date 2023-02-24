<?php
/* Inheritance - Examples rectangle,triangle */

class Shape {
    protected $name;
    protected $area;
    public function __construct( $name ) {
        $this->name = $name;
        $this->calculateArea();
    }
    public function calculateArea() {

    }
    public function getArea() {
        echo "This {$this->name}'s area is {$this->area}\n";
    }
}

class Triangle extends Shape {
    private $a, $b, $c;
    public function __construct( $a, $b, $c ) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct( "Triangle" );
    }
    public function calculateArea() {
        $perimeter = ( $this->a + $this->b + $this->c ) / 2;
        $this->area = sqrt(  ( $perimeter * ( $perimeter - $this->a ) ) * ( $perimeter * ( $perimeter - $this->b ) ) * ( $perimeter * ( $perimeter - $this->c ) ) );
    }

}

class Rectangle extends Shape {
    private $a, $b;
    public function __construct( $a, $b ) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct( "Rectangle" );
    }
    public function calculateArea() {
        $this->area = $this->a * $this->b;
    }

}

//Rectangle area get
$rectangle = new Rectangle( 3, 4 );
$rectangle->getArea();

//Triangle area get
$triangle = new Triangle( 3, 4, 5 );
$triangle->getArea();