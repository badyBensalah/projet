<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guide
 *
 * @ORM\Table(name="guide")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GuideRepository")
 */
class Guide
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
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="date")
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User",inversedBy="mail")
     * @ORM\JoinColumn(name="user",referencedColumnName="id")
     */
    private $publisher;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays",inversedBy="nom")
     * @ORM\JoinColumn(name="pays",referencedColumnName="id")
     */
    private $pays;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Guide
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Guide
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Guide
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }



}

