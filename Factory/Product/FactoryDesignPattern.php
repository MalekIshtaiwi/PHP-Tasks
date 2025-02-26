<?php
interface Product {
    public function getName();
    public function getPrice();
    public function displayProductInfo();
}
class Book implements Product {
    private $name;
    private $price;
    private $author;

    public function __construct($name, $price, $author) {
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function displayProductInfo() {
        echo "Product: " . $this->name . " | Price: " . $this->price . " | Author: " . $this->author . "\n";
    }
}

class Electronics implements Product {
    private $name;
    private $price;
    private $brand;

    public function __construct($name, $price, $brand) {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function displayProductInfo() {
        echo "Product: " . $this->name . " | Price: " . $this->price . " | Brand: " . $this->brand . "\n";
    }
}
class ProductFactory {
    public static function createProduct($type, $name, $price, $extra) {
        switch ($type) {
            case 'Book':
                return new Book($name, $price, $extra);
            case 'Electronics':
                return new Electronics($name, $price, $extra);
            default:
                throw new Exception("Product type not recognized");
        }
    }
}

$book = ProductFactory::createProduct('Book', 'The Great Gatsby', 10.99, 'F. Scott Fitzgerald');
$electronics = ProductFactory::createProduct('Electronics', 'Smartphone', 399.99, 'BrandX');

$book->displayProductInfo();
$electronics->displayProductInfo();

?>