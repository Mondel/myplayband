<?php

namespace MyPlayBand\MusicaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlayBand\MusicaBundle\Entity\Cancion
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks 
 */
class Cancion
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
     * @var integer $duracion
     *
     * @ORM\Column(name="duracion", type="integer")
     */
    protected $duracion;

    /**
     * @var datetime $fecha_creacion
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    protected $fecha_creacion;

    /**
     * @var integer $anio
     *
     * @ORM\Column(name="anio", type="integer")
     */
    protected $anio;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    protected $activo;

    /**
     * @ORM\ManyToOne(targetEntity="MyPlayBand\ArtistaBundle\Entity\Artista", inversedBy="canciones")
     * @ORM\JoinColumn(name="id_artista", referencedColumnName="id")
     */
    protected $artista;

    /**
     * @ORM\ManyToOne(targetEntity="Album", inversedBy="canciones")
     * @ORM\JoinColumn(name="id_album", referencedColumnName="id")
     */
    protected $album;

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
     * Set duracion
     *
     * @param integer $duracion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
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
     * Set activo
     *
     * @param boolean $activo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
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

    /**
     * Set album
     *
     * @param MyPlayBand\MusicaBundle\Entity\Album $album
     */
    public function setAlbum(\MyPlayBand\MusicaBundle\Entity\Album $album)
    {
        $this->album = $album;
    }

    /**
     * Get album
     *
     * @return MyPlayBand\MusicaBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}