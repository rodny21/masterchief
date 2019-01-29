<?php

namespace Universidad\miBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * UnidadCurricular
 *
 * @ORM\Table(name="unidad_curricular")
 * @ORM\Entity(repositoryClass="Universidad\miBundle\Repository\UnidadCurricularRepository")
 */
class UnidadCurricular
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
     * @ORM\Column(name="Unidad_Curricular", type="string", length=255)
     */
    private $unidadCurricular;
    /**
     * @var string
     *
     * @ORM\Column(name="Semestre", type="string", length=255)
     */
    private $semestre;
    /**
     * @var string
     *
     * @ORM\Column(name="Puntos", type="string", length=255)
     */
    private $puntos;
    /**
     * @var \Victimas
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Carrera_id", referencedColumnName="id")
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
     * Set unidadCurricular
     *
     * @param string $unidadCurricular
     * @return UnidadCurricular
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
     * @return UnidadCurricular
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
    public function __toString(){
      return $this->getUnidadCurricular();
    }

    /**
     * Set semestre
     *
     * @param string $semestre
     * @return UnidadCurricular
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set puntos
     *
     * @param string $puntos
     * @return UnidadCurricular
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get puntos
     *
     * @return string
     */
    public function getPuntos()
    {
        return $this->puntos;
    }
}
