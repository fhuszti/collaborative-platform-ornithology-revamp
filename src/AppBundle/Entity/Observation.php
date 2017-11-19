<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\User;
use AppBundle\Entity\Image;
use AppBundle\Entity\Bird;

/**
 * Observation
 *
 * @ORM\Table(name="observation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObservationRepository")
 */
class Observation
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
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     *
     * @Assert\Type(
     *     type="string",
     *     message="La longitude de l'observation doit être une chaîne de caractères valide."
     * )
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="La longitude de l'observation doit contenir plus de 2 caractères.",
     *     maxMessage="La longitude de l'observation ne peut contenir plus de 255 caractères."
     * )
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="lattitude", type="string", length=255)
     *
     * @Assert\Type(
     *     type="string",
     *     message="La lattitude de l'observation doit être une chaîne de caractères valide."
     * )
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="La lattitude de l'observation doit contenir plus de 2 caractères.",
     *     maxMessage="La lattitude de l'observation ne peut contenir plus de 255 caractères."
     * )
     */
    private $lattitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     *
     * @Assert\NotBlank(message="La date de l'observation doit être renseignée.")
     * @Assert\Date(message="La date de l'observation doit être une date au format valide.")
     */
    private $date;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bird", inversedBy="observation", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $bird;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", inversedBy="observation", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;

    /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="observation", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid()
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;



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
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Observation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set lattitude
     *
     * @param string $lattitude
     *
     * @return Observation
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    /**
     * Get lattitude
     *
     * @return string
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Observation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Observation
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Observation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set bird
     *
     * @param \AppBundle\Entity\Bird $bird
     *
     * @return Observation
     */
    public function setBird(Bird $bird)
    {
        $this->bird = $bird;

        $bird->addObservation($this);

        return $this;
    }

    /**
     * Get bird
     *
     * @return \AppBundle\Entity\Bird
     */
    public function getBird()
    {
        return $this->bird;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Observation
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;

        if ( !is_null($image) )
            $image->setObservation($this);

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Observation
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        $user->addObservation($this);

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
