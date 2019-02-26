<?php
/**
 * Class for Product table
 */
class Product
{
  //Properties
  private $ID = 0;
  private $name = "Default name";
  private $color = "Default color";
  private $description = "Default description";
  private $price = 0;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;

        return $this->ID;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this->color;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this->price;
    }

    public function getFormattedPrice()
  	{
  		$formattedPrice = "$" . number_format($this->price, 2);
  		return $formattedPrice;
  	}

    public function toString()
    {
      return "ID: " . $this->getID() . " Name: ". $this->getName() . " Description: " .
          $this->getDescription() . " Price: " . $this->getFormattedPrice();
    }

}

 ?>
