<?php

class Product {
    private int $id;
    private string $name;
    private float $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    function getFormattedPrice() {
        return (string) number_format($this->price, 2);
    }

    function showDetails() {
        printf("Product Details:\n- ID: %d\n- Name: %s\n- Price: \$%s", $this->id, $this->name, $this->getFormattedPrice());
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();