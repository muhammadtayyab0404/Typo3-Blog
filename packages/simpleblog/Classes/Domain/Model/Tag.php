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
 * Tags
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * tag
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $tagvalue = '';

    /**
     * Returns the tagvalue
     * 
     * @return string $tagvalue
     */
    public function getTagvalue()
    {
        return $this->tagvalue;
    }

    /**
     * Sets the tagvalue
     * 
     * @param string $tagvalue
     * @return void
     */
    public function setTagvalue($tagvalue)
    {
        $this->tagvalue = $tagvalue;
    }
}
