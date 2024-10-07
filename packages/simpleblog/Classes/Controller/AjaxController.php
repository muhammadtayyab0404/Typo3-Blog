<?php
namespace ExtbaseBook\Simpleblog\Controller;
use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;
use \TYPO3\CMS\Extbase\Mvc\View\JsonView;
use \ExtbaseBook\Simpleblog\Domain\Model\Post;
use \ExtbaseBook\Simpleblog\Domain\Model\Comment;
use \ExtbaseBook\Simpleblog\Domain\Repository\PostRepository;
class AjaxController extends ActionController
{
/**
* @var JsonView
*/
protected $defaultViewObjectName = JsonView::class;
/**
* @var PostRepository
*/
protected $postRepository;
/**
 * * @param PostRepository $postRepository
*/
public function injectPostRepository(PostRepository $postRepository): void
{
$this->postRepository = $postRepository;
}
/**
* @param Post $post
* @param Comment $comment
*/
public function commentAction(Post $post, Comment $comment = null)
{
// Do not persist, if comment is empty
if ($comment->getComment() == "") {
return false;
}
// set date/time of comment and add comment to the Post
$comment->setCommentdate(new \DateTime());
$post->addComment($comment);
$this->postRepository->update($post);
$this->objectManager->get(PersistenceManager::class)->persistAll();
$this->view->assign('comments', $post->getComments());
$this->view->setConfiguration(['comments' => ['_descendAll' => ['_only' => ['comment', 'commentdate'],'_descend' => ['commentdate' => []
]
]
]
]);
$this->view->setVariablesToRender(['comments']);
}
}