<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserBookshop
 */
class UserBookshop
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
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set username
     *
     * @param string $username
     * @return UserBookshop
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
     * @return UserBookshop
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
     * Set email
     *
     * @param string $email
     * @return UserBookshop
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
