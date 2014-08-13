<?php
namespace Aula\BackendBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @UniqueEntity(fields="email", message="Este email já está sendo utilizado.")
 * @UniqueEntity(fields="username", message="Este usuário já está sendo utilizado.")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="É necessário preencher o seu nome")
     * @Assert\Length(
     *     min=3,
     *     max="30",
     *     minMessage="Nome muito pequeno",
     *     maxMessage="Nome muito longo"
     *     
     * )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Caracteres inválidos"
     * )
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=30,nullable=true)
     *    
     */
    protected $type;
}