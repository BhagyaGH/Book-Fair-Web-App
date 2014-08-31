<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 */
class Book
{
    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $frontCover;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $bookId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bookshop;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bookshop = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Book
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set frontCover
     *
     * @param string $frontCover
     * @return Book
     */
    public function setFrontCover($frontCover)
    {
        $this->frontCover = $frontCover;

        return $this;
    }

    /**
     * Get frontCover
     *
     * @return string 
     */
    public function getFrontCover()
    {
        return $this->frontCover;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Book
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get bookId
     *
     * @return integer 
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Add bookshop
     *
     * @param \BookFair\Bundle\BookshopBundle\Entity\Bookshop $bookshop
     * @return Book
     */
    public function addBookshop(\BookFair\Bundle\BookshopBundle\Entity\Bookshop $bookshop)
    {
        $this->bookshop[] = $bookshop;

        return $this;
    }

    /**
     * Remove bookshop
     *
     * @param \BookFair\Bundle\BookshopBundle\Entity\Bookshop $bookshop
     */
    public function removeBookshop(\BookFair\Bundle\BookshopBundle\Entity\Bookshop $bookshop)
    {
        $this->bookshop->removeElement($bookshop);
    }

    /**
     * Get bookshop
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBookshop()
    {
        return $this->bookshop;
    }
}
