<?php

namespace Universidad\miBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante")
 * @ORM\Entity(repositoryClass="Universidad\miBundle\Repository\EstudianteRepository")
 */
class Estudiante
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
     * @var string
     *
     * @ORM\Column(name="Cedula", type="string", length=255)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="Periodo_Academico", type="string", length=255)
     */
    private $periodoAcademico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Nacimiento_at", type="datetime")
     */
    private $fechaNacimientoAt;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="string", length=255)
     */
    private $foto;

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
     * @return Estudiante
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
     * @return Estudiante
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
     * Set cedula
     *
     * @param string $cedula
     * @return Estudiante
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set periodoAcademico
     *
     * @param string $periodoAcademico
     * @return Estudiante
     */
    public function setPeriodoAcademico($periodoAcademico)
    {
        $this->periodoAcademico = $periodoAcademico;

        return $this;
    }

    /**
     * Get periodoAcademico
     *
     * @return string
     */
    public function getPeriodoAcademico()
    {
        return $this->periodoAcademico;
    }

    /**
     * Set fechaNacimientoAt
     *
     * @param \DateTime $fechaNacimientoAt
     * @return Estudiante
     */
    public function setFechaNacimientoAt($fechaNacimientoAt)
    {
        $this->fechaNacimientoAt = $fechaNacimientoAt;

        return $this;
    }

    /**
     * Get fechaNacimientoAt
     *
     * @return \DateTime
     */
    public function getFechaNacimientoAt()
    {
        return $this->fechaNacimientoAt;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Estudiante
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set carrera
     *
     * @param \Universidad\miBundle\Entity\Carrera $carrera
     * @return Estudiante
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
