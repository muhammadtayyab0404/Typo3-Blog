<?php
namespace ExtbaseBook\Simpleblog\Controller;
use ExtbaseBook\Simpleblog\Controller\AbstractBackendController;
use TYPO3\CMS\Core\Page\PageRenderer;
use ExtbaseBook\Domain\Repository\CommentRepository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Backend\View\BackendTemplateView;
use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use ExtbaseBook\Simpleblog\Domain\Repository;
use ExtbaseBook\Simpleblog\Domain\Repository\CommentRepository as RepositoryCommentRepository;

class CommentController extends AbstractBackendController
{
/**
* @var CommentRepository
*/
protected $commentRepository;
/**
* @param CommentRepository $commentRepository
*/
public function injectCommentRepository(CommentRepository $commentRepository): void
{
$this->commentRepository = $commentRepository;
}
protected function initializeView(ViewInterface $view)
{
if ($view instanceof BackendTemplateView) {
/** @var BackendTemplateView $view */
parent::initializeView($view);
$this->generateMenu();
}
}
public function initializeAction()
{
$querySettings = $this->objectManager->get(Typo3QuerySettings::class);
$querySettings->setRespectStoragePage(false);
$querySettings->setIgnoreEnableFields(true);
$this->commentRepository->setDefaultQuerySettings($querySettings);
}
public function listAction()
{
$comments = $this->commentRepository->findAll();
$query = $comments->getQuery();
$query->setOrderings(['commentdate' => QueryInterface::ORDER_DESCENDING]);
$this->view->assign('comments', $query->execute());
}
}