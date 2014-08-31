<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validation
 */
class Validation
{
    /**
     * @var string
     */
    private $isValid;

    /**
     * @var string
     */
    private $acctype;

    /**
     * @var string
     */
    private $keyId;


    /**
     * Set isValid
     *
     * @param string $isValid
     * @return Validation
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;

        return $this;
    }

    /**
     * Get isValid
     *
     * @return string 
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * Set acctype
     *
     * @param string $acctype
     * @return Validation
     */
    public function setAcctype($acctype)
    {
        $this->acctype = $acctype;

        return $this;
    }

    /**
     * Get acctype
     *
     * @return string 
     */
    public function getAcctype()
    {
        return $this->acctype;
    }

    /**
     * Get keyId
     *
     * @return string 
     */
    public function getKeyId()
    {
        return $this->keyId;
    }
}
