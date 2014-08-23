<?php
namespace Aula\BackendBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @UniqueEntity(fields="email", message="Este email já está sendo utilizado.")
 * @UniqueEntity(fields="username", message="Este usuário já está sendo utilizado.")
 * @ORM\HasLifecycleCallbacks
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
        $this->grade = new ArrayCollection();
        
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

    /**
     * @ORM\Column(type="integer")
     *    
     */
    protected $price;

    /**
     * @ORM\Column(type="text")
     *    
     */
    protected $about;

    /**
     * @ORM\Column(type="text")
     *    
     */
    protected $about_course;

    /**
     * @ORM\Column(type="string", length=30,nullable=true)
     *    
     */
    protected $grade_id;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     *    
     */
    protected $pic;

    /* begin upload file */
    /**
     * @Assert\File(maxSize="4000000")
     */
    private $file;

    private $temp;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        // check if we have an old image path
        if (isset($this->pic)) {
            // store the old name to delete after the update
            $this->temp = $this->pic;
            $this->pic = null;
        } else {
            $this->pic = 'initial';
        }
        //var_dump($this->file, $this->pic);exit;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        //var_dump($this->getFile());exit;
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = "image_" . uniqid();
            $this->pic = $this->getUploadDir() . '/' . $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        //var_dump($this->getFile());exit;
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->pic);
     
        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }


    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }


    public function getAbsolutePath()
    {
        return null === $this->pic
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->pic
            ? null
            : $this->getUploadDir().'/'.$this->pic;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesnt screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads';
    } 

    /* end upload file */


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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return User
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
     * Add grade
     *
     * @param \Aula\BackendBundle\Entity\TeacherGrade $grade
     * @return User
     */
    public function addGrade(\Aula\BackendBundle\Entity\TeacherGrade $grade)
    {
        $this->grade[] = $grade;

        return $this;
    }

    /**
     * Remove grade
     *
     * @param \Aula\BackendBundle\Entity\TeacherGrade $grade
     */
    public function removeGrade(\Aula\BackendBundle\Entity\TeacherGrade $grade)
    {
        $this->grade->removeElement($grade);
    }

    

    /**
     * Get grade_id
     *
     * @return string 
     */
    public function getGradeId()
    {
        return $this->grade_id;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return User
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set grade_id
     *
     * @param string $gradeId
     * @return User
     */
    public function setGradeId($gradeId)
    {
        //var_dump($gradeId->getId());exit;
        $this->grade_id = $gradeId->getId();

        return $this;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return User
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return User
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set about_course
     *
     * @param string $aboutCourse
     * @return User
     */
    public function setAboutCourse($aboutCourse)
    {
        $this->about_course = $aboutCourse;

        return $this;
    }

    /**
     * Get about_course
     *
     * @return string 
     */
    public function getAboutCourse()
    {
        return $this->about_course;
    }
}
