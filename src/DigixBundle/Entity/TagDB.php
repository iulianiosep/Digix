<?php

namespace DigixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagDB
 * @ORM\Entity
 */
class TagDB
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $tagList;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $createdTime;
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
     * Set url
     *
     * @param string $url
     * @return TagDB
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set tagList
     *
     * @param string $tagList
     * @return TagDB
     */
    public function setTagList($tagList)
    {
        $this->tagList = $tagList;

        return $this;
    }

    /**
     * Get tagList
     *
     * @return string 
     */
    public function getTagList()
    {
        return $this->tagList;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TagDB
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
     * Set type
     *
     * @param integer $userId
     * @return TagDB
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
     * Set createdTime
     *
     * @param string $createdTime
     * @return TagDB
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return string 
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }
}
