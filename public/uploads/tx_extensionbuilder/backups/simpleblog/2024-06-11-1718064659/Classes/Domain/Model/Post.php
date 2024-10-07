<?php
namespace ExtbaseBook\Simpleblog\Domain\Model;


/***
 *
 * This file is part of the "Simple Blog Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2024 MalikDon01 <greattayyab22441005@gmail.com>, NEON GROUP
 *
 ***/
/**
 * Posts
 */
class Post extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * content
     * 
     * @var string
     */
    protected $content = '';

    /**
     * date/time
     * 
     * @var \DateTime
     */
    protected $postdate = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the content
     * 
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     * 
     * @param string $content
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Returns the postdate
     * 
     * @return \DateTime $postdate
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Sets the postdate
     * 
     * @param \DateTime $postdate
     * @return void
     */
    public function setPostdate(\DateTime $postdate)
    {
        $this->postdate = $postdate;
    }
}
