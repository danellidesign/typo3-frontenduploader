<?php
/**
 * Created by PhpStorm.
 * User: danny
 * Date: 13.05.2019
 * Time: 21:35
 */
namespace Danny\Frontenduploader\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Entry extends AbstractEntity
{
    /**
     * image1
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $image1;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image1
     */
    public function setImage1(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image1)
    {
        $this->image1 = $image1;
    }




}