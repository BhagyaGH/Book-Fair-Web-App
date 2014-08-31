<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAdmin
 */
class UserAdmin
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set username
     *
     * @param string $username
     * @return UserAdmin
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return UserAdmin
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
