<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bookshop
 */
class Bookshop
{
    /**
     * @var string
     */
    private $bookshopName;

    /**
     * @var string
     */
    private $stallNo;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $bookshopId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $book;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->book = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set bookshopName
     *
     * @param string $bookshopName
     * @return Bookshop
     */
    public function setBookshopName($bookshopName)
    {
        $this->bookshopName = $bookshopName;

        return $this;
    }

    /**
     * Get bookshopName
     *
     * @return string 
     */
    public function getBookshopName()
    {
        return $this->bookshopName;
    }

    /**
     * Set stallNo
     *
     * @param string $stallNo
     * @return Bookshop
     */
    public function setStallNo($stallNo)
    {
        $this->stallNo = $stallNo;

        return $this;
    }

    /**
     * Get stallNo
     *
     * @return string 
     */
    public function getStallNo()
    {
        return $this->stallNo;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Bookshop
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Bookshop
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Get bookshopId
     *
     * @return integer 
     */
    public function getBookshopId()
    {
        return $this->bookshopId;
    }

    /**
     * Add book
     *
     * @param \BookFair\Bundle\BookshopBundle\Entity\Book $book
     * @return Bookshop
     */
    public function addBook(\BookFair\Bundle\BookshopBundle\Entity\Book $book)
    {
        $this->book[] = $book;

        return $this;
    }

    /**
     * Remove book
     *
     * @param \BookFair\Bundle\BookshopBundle\Entity\Book $book
     */
    public function removeBook(\BookFair\Bundle\BookshopBundle\Entity\Book $book)
    {
        $this->book->removeElement($book);
    }

    /**
     * Get book
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBook()
    {
        return $this->book;
    }
}
