<?php

namespace MyPlayBand\ArtistaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MyPlayBand\ArtistaBundle\Entity\Artista
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Artista
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
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    protected $nombre;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    protected $descripcion;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    protected $activo;

    /**
     * @ORM\ManyToOne(targetEntity="TipoArtista", inversedBy="artistas")
     * @ORM\JoinColumn(name="id_tipo_artista", referencedColumnName="id")
     */
    protected $tipo_artista;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="artistas")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     */
    protected $usuario;

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
     * Set tipo_artista
     *
     * @param MyPlayBand\ArtistaBundle\Entity\TipoArtista $tipoArtista
     */
    public function setTipoArtista(\MyPlayBand\ArtistaBundle\Entity\TipoArtista $tipoArtista)
    {
        $this->tipo_artista = $tipoArtista;
    }

    /**
     * Get tipo_artista
     *
     * @return MyPlayBand\ArtistaBundle\Entity\TipoArtista 
     */
    public function getTipoArtista()
    {
        return $this->tipo_artista;
    }

    /**
     * Set usuario
     *
     * @param MyPlayBand\ArtistaBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\MyPlayBand\ArtistaBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return MyPlayBand\ArtistaBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}