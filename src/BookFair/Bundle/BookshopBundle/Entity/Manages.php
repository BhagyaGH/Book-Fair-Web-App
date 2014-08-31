<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manages
 */
class Manages
{
    /**
     * @var \BookFair\Bundle\BookshopBundle\Entity\Bookshop
     */
    private $bookshop;

    /**
     * @var \BookFair\Bundle\BookshopBundle\Entity\UserBookshop
     */
    private $id;


    /**
     * Set bookshop
     *
     * @param \BookFair\Bundle\BookshopBundle\Entity\Bookshop $bookshop
     * @return Manages
     */
    public function setBookshop(\BookFair\Bundle\BookshopBundle\Entity\Bookshop $bookshop)
    {
        $this->bookshop = $bookshop;

        return $this;
    }

    /**
     * Get bookshop
     *
     * @return \BookFair\Bundle\BookshopBundle\Entity\Bookshop 
     */
    public function getBookshop()
    {
        return $this->bookshop;
    }

    /**
     * Set id
     *
     * @param \BookFair\Bundle\BookshopBundle\Entity\UserBookshop $id
     * @return Manages
     */
    public function setId(\BookFair\Bundle\BookshopBundle\Entity\UserBookshop $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \BookFair\Bundle\BookshopBundle\Entity\UserBookshop 
     */
    public function getId()
    {
        return $this->id;
    }
}
