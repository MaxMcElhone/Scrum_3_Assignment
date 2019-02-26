<?php
/**
 * This is the Customer
  */
 class Customer
 {
   private $ID = 0;
   private $firstName = "first";
   private $lastName = "lastName";
   private $email = "Default@email.com";
   private $phone = "000-000-0000";

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;

        return $this->ID;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this->phone;
    }

  public function toString()
  {
    return "ID: " . $this->getID() . " Name: " . $this->getFirstName() . " " .
        $this->getLastName() . " Email: " . $this->getEmail() . " Phone: " . $this->getPhone();
  }

}

 ?>
