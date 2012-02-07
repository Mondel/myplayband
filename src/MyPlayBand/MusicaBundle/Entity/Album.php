<?php

namespace MyPlayBand\MusicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlayBand\MusicaBundle\Entity\Album
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Album
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    /**
     * @var integer $anio
     *
     * @ORM\Column(name="anio", type="integer")
     */
    protected $anio;

    /**
     * @var string $caratula
     *
     * @ORM\Column(name="caratula", type="string", length=255)
     */
    protected $caratula;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    protected $descripcion;

    /**
     * @var integer $precio
     *
     * @ORM\Column(name="precio", type="integer")
     */
    protected $precio;

    /**
     * @var datetime $fecha_creacion
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    protected $fecha_creacion;

    /**
     * @var string $archivo
     *
     * @ORM\Column(name="archivo", type="string", length=255)
     */
    protected $archivo;

    /**
     * @ORM\ManyToOne(targetEntity="MyPlayBand\ArtistaBundle\Entity\Artista", inversedBy="albumes")
     * @ORM\JoinColumn(name="id_artista", referencedColumnName="id")
     */
    protected $artista;

    /**
     * @ORM\PrePersist()     
     */
    public function fechaCreacionIniciar()
    {
        $this->fecha_creacion = new \DateTime();
    }
    

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
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set anio
     *
     * @param integer $anio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    /**
     * Get anio
     *
     * @return integer 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set caratula
     *
     * @param string $caratula
     */
    public function setCaratula($caratula)
    {
        $this->caratula = $caratula;
    }

    /**
     * Get caratula
     *
     * @return string 
     */
    public function getCaratula()
    {
        return $this->caratula;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set fecha_creacion
     *
     * @param datetime $fechaCreacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fecha_creacion = $fechaCreacion;
    }

    /**
     * Get fecha_creacion
     *
     * @return datetime 
     */
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set archivo
     *
     * @param string $archivo
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    }

    /**
     * Get archivo
     *
     * @return string 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set artista
     *
     * @param MyPlayBand\ArtistaBundle\Entity\Artista $artista
     */
    public function setArtista(\MyPlayBand\ArtistaBundle\Entity\Artista $artista)
    {
        $this->artista = $artista;
    }

    /**
     * Get artista
     *
     * @return MyPlayBand\ArtistaBundle\Entity\Artista 
     */
    public function getArtista()
    {
        return $this->artista;
    }
}