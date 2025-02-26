<?php 

class Product {
    protected $name;
    protected $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function displayProductInfo() {
        echo "Product: " . $this->name . " | Price: " . $this->price . "\n";
    }
}
class Book extends Product {
    private $author;

    public function __construct($name, $price, $author) {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    public function displayProductInfo() {
        parent::displayProductInfo();
        echo "Author: " . $this->author . "\n";
    }
}

class Electronics extends Product {
    private $brand;

    public function __construct($name, $price, $brand) {
        parent::__construct($name, $price);
        $this->brand = $brand;
    }

    public function displayProductInfo() {
        parent::displayProductInfo();
        echo "Brand: " . $this->brand . "\n";
    }
}
$book = new Book("The Great Gatsby", 10.99, "F. Scott Fitzgerald");
$electronics = new Electronics("Smartphone", 399.99, "BrandX");

$book->displayProductInfo();
$electronics->displayProductInfo();

?>