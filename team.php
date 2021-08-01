<?php
    class Team
    {
        private $name,$country; 
        function __construct($name)
        {
            $this->name = $name;
           
        }        
        function setCountry($country)
        {
            $this->country = $country;
            return $this;
        } 
        function __toString()
        {
        if ($this->country !== NULL)
            {
                return $this->name . ' (' . $this->country . ')';
            }
        else 
            {
                return $this->name;
            }
        }        
    }

?>