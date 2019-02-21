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


    /**
     * Get the value of This is the Customer
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of This is the Customer
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
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of First Name
     *
     * @param mixed firstName
     *
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this->firstName;
    }

    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of Last Name
     *
     * @param mixed lastName
     *
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this->lastName;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed email
     *
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this->email;
    }

    /**
     * Get the value of Phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of Phone
     *
     * @param mixed phone
     *
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this->phone;
    }

  public function toString()
  {
    return "ID: " . getID() . " Name: " . getFirstName() . " " .
        getLastName() . " Email: " . getEmail() . " Phone: " . getPhone();
  }

}

 ?>
