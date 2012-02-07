<?php

namespace MyPlayBand\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface,
    Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MyPlayBand\UsuarioBundle\Entity\Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Usuario implements AdvancedUserInterface
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
     * @Assert\MinLength(3)
     * @Assert\MaxLength(100)
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    protected $nombre;

    /**
     * @var string $apellido
     *
     * @Assert\MinLength(3)
     * @Assert\MaxLength(100)
     * @ORM\Column(name="apellido", type="string", length=100)
     */
    protected $apellido;

    /**
     * @var string $contrasenia
     *
     * @Assert\MinLength(3)
     * @Assert\MaxLength(100)
     * @ORM\Column(name="contrasenia", type="string", length=255)
     */
    protected $contrasenia;

    /**
     * @ORM\Column(name="salt", type="string", length=255)
     */
    protected $salt;

    /**
     * @var string $email
     * 
     * @Assert\Email()
     * @Assert\MinLength(3)
     * @Assert\MaxLength(100)
     * @Assert\NotBlank()
     * @ORM\Column(name="email", type="string", length=100)
     */
    protected $email;

    /**
     * @var string $email_paypal
     *
     * @Assert\Email()
     * @Assert\MinLength(3)
     * @Assert\MaxLength(100)
     * @Assert\NotBlank()
     * @ORM\Column(name="email_paypal", type="string", length=100)
     */
    protected $email_paypal;

    /**
     * @var string $sexo
     *
     * @Assert\Choice({"m", "f", "i"})
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    protected $sexo;

    /**
     * @var datetime $fecha_creacion
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    protected $fecha_creacion;

    /**
     * @var datetime $fecha_nacimiento
     *
     * @Assert\Date()
     * @ORM\Column(name="fecha_nacimiento", type="datetime")
     */
    protected $fecha_nacimiento;

    /**
     * @var boolean $admin
     *
     * @ORM\Column(name="admin", type="boolean")
     */
    protected $admin;

    /**
     * @var boolean $activo
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    protected $activo;

    /*
     * Implements AdvancedUserInterface
     */
    public function equals(UserInterface $user)
    {
        return md5($user->getUsername()) == md5($this->getUsername());
    }

    public function eraseCredentials()
    {

    }

    public function getPassword()
    {
        return $this->getContrasenia();
    }

    public function getRoles()
    {
        if ($this->admin)
            return array('ROLE_ADMIN');
        else
            return array('ROLE_USER');
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getUsername()
    {
        return $this->getEmail();
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->activo;
    }
    /*
     * End Implements AdvancedUserInterface
     */

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
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email_paypal
     *
     * @param string $emailPaypal
     */
    public function setEmailPaypal($emailPaypal)
    {
        $this->email_paypal = $emailPaypal;
    }

    /**
     * Get email_paypal
     *
     * @return string 
     */
    public function getEmailPaypal()
    {
        return $this->email_paypal;
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
     * Set contrasenia
     *
     * @param string $contrasenia
     */
    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
    }

    /**
     * Get contrasenia
     *
     * @return string 
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fecha_nacimiento
     *
     * @param datetime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;
    }

    /**
     * Get fecha_nacimiento
     *
     * @return datetime 
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}