<?php

namespace Aula\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeacherGrade
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TeacherGrade
{
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
     * @ORM\Column(name="grade_id", type="integer", nullable=true)
     */
    private $gradeId;

    /**
     * @ORM\ManyToOne(targetEntity="Grade", inversedBy="grades")
     * @ORM\JoinColumn(name="grade_id", referencedColumnName="id")
     */
    protected $grade;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="grade")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;


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
     * Set gradeId
     *
     * @param integer $gradeId
     * @return TeacherGrade
     */
    public function setGradeId($gradeId)
    {
        $this->gradeId = $gradeId;

        return $this;
    }

    /**
     * Get gradeId
     *
     * @return integer 
     */
    public function getGradeId()
    {
        return $this->gradeId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return TeacherGrade
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set grade
     *
     * @param \Aula\BackendBundle\Entity\Grade $grade
     * @return TeacherGrade
     */
    public function setGrade(\Aula\BackendBundle\Entity\Grade $grade = null)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return \Aula\BackendBundle\Entity\Grade 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set user
     *
     * @param \Aula\BackendBundle\Entity\User $user
     * @return TeacherGrade
     */
    public function setUser(\Aula\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Aula\BackendBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
