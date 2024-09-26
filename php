<?php
  // Defining a class
  class Car {
    public $color;
    public $model;

    // Constructor function
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }

    // Method to describe the car
    public function getDescription() {
      return "This car is a $this->color $this->model.";
    }
  }

  // Creating an object of the Car class
  $myCar = new Car("red", "Toyota");

  // Using the method
  echo $myCar->getDescription();
?>

