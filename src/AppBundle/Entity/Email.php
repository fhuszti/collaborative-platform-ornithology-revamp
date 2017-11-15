<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Email
{
    /**
     * @var string
     *
     * @Assert\NotBlank(
     *     message = "Votre nom complet doit être renseigné."
     * )
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "Votre nom complet ne peut être moins long que 2 caractères.",
     *      max = 100,
     *      maxMessage = "Votre nom complet ne peut être plus long que 100 caractères."
     * )
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *     message = "Votre adresse email doit être renseignée."
     * )
     * @Assert\Type("string")
     * @Assert\Email(
     *     message = "L'adresse email n'a pas un format valide."
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *     message = "Le sujet doit être renseigné."
     * )
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "Le sujet ne peut être moins long que 2 caractères.",
     *      max = 255,
     *      maxMessage = "Le sujet ne peut être plus long que 100 caractères."
     * )
     */
    private $title;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *     message = "Votre message doit avoir un contenu."
     * )
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 1,
     *      minMessage = "Le contenu de votre message ne peut être moins long que 1 caractère."
     * )
     */
    private $content;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Email
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
     * Set email
     *
     * @param string $email
     *
     * @return Email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * Set title
     *
     * @param string $title
     *
     * @return Email
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Email
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
