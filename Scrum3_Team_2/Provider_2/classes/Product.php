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

    /**
     * Get the ID of Class for Product table
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of Class for Product table
     *
     * @param mixed ID
     *
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this->ID;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this->name;
    }

    /**
     * Get the value of Color
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of Color
     *
     * @param mixed color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this->color;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this->description;
    }

    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of Price
     *
     * @param mixed price
     *
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this->price;
    }


    public function toString()
    {
      return "ID: " . getID() . " Name: ". getName() . " Description: " .
          getDescription() . " Price: " . getPrice();
    }

}

 ?>
