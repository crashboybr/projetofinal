<?php

namespace Aula\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Schedule
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class Schedule
{
    public function __construct()
    {
        parent::__construct();
        $this->schedules_rating = new ArrayCollection();
       
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacher_id", type="integer")
     */
    private $teacherId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="teachers")
     * @ORM\JoinColumn(name="teacher_id", referencedColumnName="id")
     */
    protected $teacher;

    /**
     * @var integer
     *
     * @ORM\Column(name="student_id", type="integer")
     */
    private $studentId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="students")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     */
    protected $student;

    /**
     * @ORM\OneToMany(targetEntity="Rating", mappedBy="schedule")
     */
    protected $schedules_rating;


    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="class_at", type="datetime")
     */
    private $classAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


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
     * Set teacherId
     *
     * @param integer $teacherId
     * @return Schedule
     */
    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;

        return $this;
    }

    /**
     * Get teacherId
     *
     * @return integer 
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * Set studentId
     *
     * @param integer $studentId
     * @return Schedule
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get studentId
     *
     * @return integer 
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Schedule
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set classAt
     *
     * @param \DateTime $classAt
     * @return Schedule
     */
    public function setClassAt($classAt)
    {
        $this->classAt = $classAt;

        return $this;
    }

    /**
     * Get classAt
     *
     * @return \DateTime 
     */
    public function getClassAt()
    {
        return $this->classAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Schedule
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Schedule
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

     /**
     * Now we tell doctrine that before we persist or update we call the updatedTimestamps() function.
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
        $this->setUpdatedAt(new \DateTime(date('Y-m-d H:i:s')));

        if($this->getCreatedAt() == null)
        {
            $this->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        }
    }


    /**
     * Set teacher
     *
     * @param \Aula\BackendBundle\Entity\User $teacher
     * @return Schedule
     */
    public function setTeacher(\Aula\BackendBundle\Entity\User $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \Aula\BackendBundle\Entity\User 
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * Set student
     *
     * @param \Aula\BackendBundle\Entity\User $student
     * @return Schedule
     */
    public function setStudent(\Aula\BackendBundle\Entity\User $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \Aula\BackendBundle\Entity\User 
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Add schedules_rating
     *
     * @param \Aula\BackendBundle\Entity\Rating $schedulesRating
     * @return Schedule
     */
    public function addSchedulesRating(\Aula\BackendBundle\Entity\Rating $schedulesRating)
    {
        $this->schedules_rating[] = $schedulesRating;

        return $this;
    }

    /**
     * Remove schedules_rating
     *
     * @param \Aula\BackendBundle\Entity\Rating $schedulesRating
     */
    public function removeSchedulesRating(\Aula\BackendBundle\Entity\Rating $schedulesRating)
    {
        $this->schedules_rating->removeElement($schedulesRating);
    }

    /**
     * Get schedules_rating
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSchedulesRating()
    {
        return $this->schedules_rating;
    }
}
