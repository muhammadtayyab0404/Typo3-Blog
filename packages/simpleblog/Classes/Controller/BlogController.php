<?php
namespace ExtbaseBook\Simpleblog\Controller;

use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \ExtbaseBook\Simpleblog\Domain\Model\Blog;
use \ExtbaseBook\Simpleblog\Domain\Repository\BlogRepository;
use \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use \TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Resource\AbstractFile;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use \ExtbaseBook\Simpleblog\Property\TypeConverter\UploadedFileReferenceConverter;
use \TYPO3\CMS\Extbase\Property\PropertyMappingConfiguration;

class BlogController extends ActionController
{
/**
* @var BlogRepository
*/
protected $blogRepository;
/**
* @param BlogRepository $blogRepository
*/
/**
* @param string $search
*/
    public function injectBlogRepository(BlogRepository $blogRepository): void
    {
     $this->blogRepository = $blogRepository;
    }
    // List Action Method 
    public function listAction(string $search = '') : void
    {
    $search = '';
    if ($this->request->hasArgument('search'))
    {
     $search = $this->request->getArgument('search');     
    }
       $limit=($this->settings['blog']['max']) ?: null;
       $this->view->assign('blogs',$this->blogRepository->findSearchForm($search, $limit));
       $this->view->assign('search' , $search);
    } 
    //   Add Action Method
        /**
    * @param Blog $blog
    */
    public function addAction(Blog $blog){
        $this->blogRepository->add($blog);       
          $flashMessageHeadline = LocalizationUtility::translate(
            'flashmessage.blog.blog-created.headline',
            'simpleblog'
        );

        $flashMessageBody = LocalizationUtility::translate(
            'flashmessage.blog.blog-created.body',
            'simpleblog');
            $this->addFlashMessage(
                $flashMessageBody,
                $flashMessageHeadline,
                AbstractMessage::OK,
                true
            );
        $this->redirect('list');    
        }
    // AddAction Method
    public function addFormAction(Blog $blog = null) :void
    {
    $this->view->assign('blog',$blog); 

    }
    // Show Action Method
    public function showAction(Blog $blog){

    $this->view->assign('blog', $blog);

    }
    // update form
        /**
    * Show form to update an existing Blog
    *
    * 
    * @param Blog $blog
    */
    public function updateFormAction(Blog $blog ){
    $this->view->assign('blog', $blog);

    }
    public function updateAction(Blog $blog){
     $this->blogRepository->update($blog);
     $this->redirect('list');
     
    }
    //   DeleteForm ACtion
    public function deleteConfirmAction(Blog $blog){

        $this->view->assign('blog1', $blog);
       
    }
   //delete form
    public function deleteAction(Blog $blog){
     $this->blogRepository->remove($blog);
     $this->redirect('list');

    }
    // search quaries machanism
        /**
    * Set TypeConverter configuration for image upload
    */

    protected function setTypeConverterConfigurationForImageUpload($argumentName): void
    {
        $uploadConfiguration = [UploadedFileReferenceConverter::CONFIGURATION_ALLOWED_FILE_EXTENSIONS =>$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
    UploadedFileReferenceConverter::CONFIGURATION_UPLOAD_FOLDER =>'1:/simpleblog/',
    ];
    /** @var PropertyMappingConfiguration $propertyMappingConfiguration */
    $propertyMappingConfiguration = $this->arguments[$argumentName]->getPropertyMappingConfiguration();
    $propertyMappingConfiguration->forProperty('image')->setTypeConverterOptions(
    UploadedFileReferenceConverter::class,
    $uploadConfiguration
    );
    }
}









