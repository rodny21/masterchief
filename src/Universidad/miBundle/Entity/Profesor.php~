<?php

namespace Universidad\miBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity(repositoryClass="Universidad\miBundle\Repository\ProfesorRepository")
 */
class Profesor
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=255)
     */
    private $apellido;
    /**
     * @var \Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrera_id", referencedColumnName="id")
     * })
     */
    private $carrera;

    /**
     * @var string
     *
     * @ORM\Column(name="UnidaCurricular", type="string", length=255)
     */
    private $unidadCurricular;

    /**
     * @var string
     *
     * @ORM\Column(name="Grado_Instruccion", type="string", length=255)
     */
    private $gradoInstruccion;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Profesor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Profesor
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set gradoInstruccion
     *
     * @param string $gradoInstruccion
     * @return Profesor
     */
    public function setGradoInstruccion($gradoInstruccion)
    {
        $this->gradoInstruccion = $gradoInstruccion;

        return $this;
    }

    /**
     * Get gradoInstruccion
     *
     * @return string 
     */
    public function getGradoInstruccion()
    {
        return $this->gradoInstruccion;
    }

    /**
     * Set unidadCurricular
     *
     * @param string $unidadCurricular
     * @return Profesor
     */
    public function setUnidadCurricular($unidadCurricular)
    {
        $this->unidadCurricular = $unidadCurricular;

        return $this;
    }

    /**
     * Get unidadCurricular
     *
     * @return string 
     */
    public function getUnidadCurricular()
    {
        return $this->unidadCurricular;
    }

    /**
     * Set carrera
     *
     * @param \Universidad\miBundle\Entity\Carrera $carrera
     * @return Profesor
     */
    public function setCarrera(\Universidad\miBundle\Entity\Carrera $carrera = null)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return \Universidad\miBundle\Entity\Carrera 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }
}
