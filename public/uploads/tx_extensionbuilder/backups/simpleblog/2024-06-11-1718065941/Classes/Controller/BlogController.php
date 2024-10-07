<?php
namespace ExtbaseBook\Simpleblog\Controller;


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
 * BlogController
 */
class BlogController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * blogRepository
     * 
     * @var \ExtbaseBook\Simpleblog\Domain\Repository\BlogRepository
     * @inject
     */
    protected $blogRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $blogs = $this->blogRepository->findAll();
        $this->view->assign('blogs', $blogs);
    }
}
