<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeutilisateur
 */
class Typeutilisateur
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $idtypeutilisateur;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Typeutilisateur
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get idtypeutilisateur
     *
     * @return integer
     */
    public function getIdtypeutilisateur()
    {
        return $this->idtypeutilisateur;
    }
}

