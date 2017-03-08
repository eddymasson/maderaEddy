<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 */
class Livraison
{
    /**
     * @var \DateTime
     */
    private $datelivraison;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var string
     */
    private $transporteur;

    /**
     * @var integer
     */
    private $idlivraison;


    /**
     * Set datelivraison
     *
     * @param \DateTime $datelivraison
     *
     * @return Livraison
     */
    public function setDatelivraison($datelivraison)
    {
        $this->datelivraison = $datelivraison;

        return $this;
    }

    /**
     * Get datelivraison
     *
     * @return \DateTime
     */
    public function getDatelivraison()
    {
        return $this->datelivraison;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Livraison
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set transporteur
     *
     * @param string $transporteur
     *
     * @return Livraison
     */
    public function setTransporteur($transporteur)
    {
        $this->transporteur = $transporteur;

        return $this;
    }

    /**
     * Get transporteur
     *
     * @return string
     */
    public function getTransporteur()
    {
        return $this->transporteur;
    }

    /**
     * Get idlivraison
     *
     * @return integer
     */
    public function getIdlivraison()
    {
        return $this->idlivraison;
    }
}

