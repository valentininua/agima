<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *@ORM\Column(type="integer", options={"default" : 0}, nullable=true)
     */
    protected $referralLink;


    /**
     *@ORM\Column(type="string", options={"default" : 0}, nullable=true)
     */
    protected $bankcard;


    /**
     * @ORM\Column(type="integer", options={"default" : 0}, nullable=true)
     */
    protected $isresident;


    /**
     * @ORM\Column(type="integer", options={"default" : 0}, nullable=true)
     */
    protected $isadmin;


    /**
     * @ORM\Column(type="integer", options={"default" : 0}, nullable=true)
     */
    protected $isverify;

    /**
     *@ORM\Column(type="string", nullable=true)
     */
    protected $surname;

    /**
     *@ORM\Column(type="string", nullable=true)
     */
    protected $middlename;

    /**
     *@ORM\Column(type="string", nullable=true)
     */
    protected $name;




    /**
     * @var \DateTime
     *@ORM\Column(name="date_of_birth", type="datetime", nullable=true)
     */
    protected $dateofbirth;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getReferralLink()
    {
        return $this->referralLink;
    }

    /**
     * @param $referralLink
     */
    public function setReferralLink($referralLink): void
    {
        $this->referralLink = $referralLink;
    }

    /**
     * @return mixed
     */
    public function getDateofbirth()
    {
        return $this->dateofbirth;
    }

    /**
     * @param mixed $dateofbirth
     */
    public function setDateofbirth($dateofbirth): void
    {
        $this->dateofbirth = $dateofbirth;
    }

    /**
     * @return mixed
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @param mixed $middlename
     */
    public function setMiddlename($middlename): void
    {
        $this->middlename = $middlename;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIsresident()
    {
        return $this->isresident;
    }

    /**
     * @param mixed $isresident
     */
    public function setIsresident($isresident): void
    {
        $this->isresident = $isresident;
    }

    /**
     * @return mixed
     */
    public function getIsverify()
    {
        return $this->isverify;
    }

    /**
     * @param mixed $isverify
     */
    public function setIsverify($isverify): void
    {
        $this->isverify = $isverify;
    }

    /**
     * @return mixed
     */
    public function getIsadmin()
    {
        return $this->isadmin;
    }

    /**
     * @param mixed $isadmin
     */
    public function setIsadmin($isadmin): void
    {
        $this->isadmin = $isadmin;
    }

    /**
     * @return mixed
     */
    public function getBankcard()
    {
        return $this->bankcard;
    }

    /**
     * @param mixed $bankcard
     */
    public function setBankcard($bankcard): void
    {
        $this->bankcard = $bankcard;
    }





}
