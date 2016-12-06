<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovieRepository")
 * @Vich\Uploadable
 */
class Movie
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateTime", type="datetime", nullable=true)
     */
    private $dateTime;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @ORM\ManyToOne(targetEntity="Language", inversedBy="movie")
     * @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=255)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="vpackId", type="string", length=255)
     */
    private $vpackId;

    /**
     * @ORM\ManyToMany(targetEntity="Quality")
     * @ORM\JoinTable(name="Quality_movie")
     */
    private $quality;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=700)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="youtubeLink", type="string", length=255)
     */
    private $youtubeLink;

    /**
     * @var string
     *
     * @ORM\Column(name="coverImage", type="string", length=255, nullable=true)
     */
    private $coverImage;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Assert\File(
     *     maxSize="2M",
     *     mimeTypes={"image/png", "image/jpeg", "image/gif", "application/pdf", "text/rtf"},
     *     mimeTypesMessage = "Sorry. File type not supported. Only file types supported are *.JPEG, *.PNG, *.GIF, *.PDF, *.RTF"
     * )
     *
     * @Vich\UploadableField(mapping="movie", fileNameProperty="coverImage")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime", nullable=true)
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
     * Set name
     *
     * @param string $name
     * @return Movie
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
     * Set year
     *
     * @param string $year
     * @return Movie
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Movie
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Movie
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set rating
     *
     * @param string $rating
     * @return Movie
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set vpackId
     *
     * @param string $vpackId
     * @return Movie
     */
    public function setVpackId($vpackId)
    {
        $this->vpackId = $vpackId;

        return $this;
    }

    /**
     * Get vpackId
     *
     * @return string 
     */
    public function getVpackId()
    {
        return $this->vpackId;
    }

    /**
     * Set quality
     *
     * @param string $quality
     * @return Movie
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string 
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set youtubeLink
     *
     * @param string $youtubeLink
     * @return Movie
     */
    public function setYoutubeLink($youtubeLink)
    {
        $this->youtubeLink = $youtubeLink;

        return $this;
    }

    /**
     * Get youtubeLink
     *
     * @return string 
     */
    public function getYoutubeLink()
    {
        return $this->youtubeLink;
    }

    /**
     * Set coverImage
     *
     * @param string $coverImage
     * @return Movie
     */
    public function setCoverImage($coverImage)
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    /**
     * Get coverImage
     *
     * @return string 
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quality = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add quality
     *
     * @param \AppBundle\Entity\Quality $quality
     * @return Movie
     */
    public function addQuality(\AppBundle\Entity\Quality $quality)
    {
        $this->quality[] = $quality;

        return $this;
    }

    /**
     * Remove quality
     *
     * @param \AppBundle\Entity\Quality $quality
     */
    public function removeQuality(\AppBundle\Entity\Quality $quality)
    {
        $this->quality->removeElement($quality);
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Movie
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Movie
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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Movie
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }
}
