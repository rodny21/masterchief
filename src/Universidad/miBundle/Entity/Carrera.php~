<?php

namespace Universidad\miBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera")
 * @ORM\Entity(repositoryClass="Universidad\miBundle\Repository\CarreraRepository")
 */
class Carrera
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Carrera", type="string", length=255)
     */
    private $carrera;

    /**
     * @var string
     *
     * @ORM\Column(name="Duracion", type="string", length=255)
     */
    private $duracion;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Por favor inserta tu Pensul")
     * @Assert\File(mimeTypes={"application/pdf"})
     */
    private $pensul;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     * @return Carrera
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     * @return Carrera
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set pensul
     *
     * @param string $pensul
     * @return Carrera
     */
    public function setPensul($pensul)
    {
        $this->pensul = $pensul;

        return $this;
    }

    /**
     * Get pensul
     *
     * @return string 
     */
    public function getPensul()
    {
        return $this->pensul;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getCarrera();
    }
}
