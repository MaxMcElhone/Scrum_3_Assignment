<?php
/**
 * class for the orders table.
 */
class Order
{
  //Properties
  private $ID = 0;
  private $shippingAddress = "Default street";
  private $orderDate = "Default Date";
  private $expectedArivalDate = "Default Date";
  private $price = 0;

    /**
     * Get the value of id for the orders table.
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of id for the orders table.
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
     * Get the value of Shipping Address
     *
     * @return mixed
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set the value of Shipping Address
     *
     * @param mixed shippingAddress
     *
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this->shippingAddress;
    }

    /**
     * Get the value of Order Date
     *
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set the value of Order Date
     *
     * @param mixed orderDate
     *
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this->orderDate;
    }

    /**
     * Get the value of Expected Arival Date
     *
     * @return mixed
     */
    public function getExpectedArivalDate()
    {
        return $this->expectedArivalDate;
    }

    /**
     * Set the value of Expected Arival Date
     *
     * @param mixed expectedArivalDate
     *
     */
    public function setExpectedArivalDate($expectedArivalDate)
    {
        $this->expectedArivalDate = $expectedArivalDate;

        return $this->expectedArivalDate;
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

    public function getFormattedPrice()
  	{
  		$formattedPrice = "$" . number_format($this->price, 2);
  		return $formattedPrice;
  	}

    public function toString()
    {
      return "ID: " . $this->getID() . " Address: " . $this->getShippingAddress() .
          " Ordered: " . $this->getOrderDate() . " Expected Arrival: " .
          $this->getExpectedArivalDate() . " Price: " . $this->getFormattedPrice();
    }
}

 ?>
