<?php

namespace BookFair\Bundle\BookshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advertisement
 */
class Advertisement
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $validTill;

    /**
     * @var string
     */
    private $adId;


    /**
     * Set image
     *
     * @param string $image
     * @return Advertisement
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set validTill
     *
     * @param \DateTime $validTill
     * @return Advertisement
     */
    public function setValidTill($validTill)
    {
        $this->validTill = $validTill;

        return $this;
    }

    /**
     * Get validTill
     *
     * @return \DateTime 
     */
    public function getValidTill()
    {
        return $this->validTill;
    }

    /**
     * Get adId
     *
     * @return string 
     */
    public function getAdId()
    {
        return $this->adId;
    }
}
