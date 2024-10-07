<?php
namespace ExtbaseBook\Simpleblog\Controller;
use TYPO3\CMS\Backend\View\BackendTemplateView;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Extbase\Mvc\Web\Routing\UriBuilder;

/**
* Abstract backend controller provides functions for all backend controllers
*/
class AbstractBackendController extends ActionController
{
/**
* @var BackendTemplateView
*/
protected $view;
/**
* @var string
*/
protected $defaultViewObjectName = BackendTemplateView::class;
protected function translate($key, $arguments = null): string
{
return LocalizationUtility::translate(
$key,
'simpleblog',
$arguments
);
}
protected function resolveView(): BackendTemplateView
{
$view = parent::resolveView();
$view->assignMultiple([
'extensionName' => $this->request->getControllerExtensionName(),
'controllerName' => $this->request->getControllerName(),
'actionName' => $this->request->getControllerActionName()
]);
return $view;
}
protected function generateMenu()
{
$menuItems = [
'comments' => [
'controller' => 'Comment',
'action' => 'list',
'label' => $this->translate('backend.comment.list.headline')
]
];
$menu = $this->view->getModuleTemplate()->getDocHeaderComponent()->getMenuRegistry()->makeMenu();
$menu->setIdentifier('SimpleblogModuleMenu');
foreach ($menuItems as $menuItemConfig) {
$isActive = false;
if ($this->request->getControllerName() === $menuItemConfig['controller']) {
if ($this->request->getControllerActionName() === $menuItemConfig['action']) {
$isActive = true;
}
}
$menuItem = $menu->makeMenuItem()
->setTitle($menuItemConfig['label'])
->setHref($this->getHref($menuItemConfig['controller'], $menuItemConfig['action']))
->setActive($isActive);
$menu->addMenuItem($menuItem);
}
$this->view->getModuleTemplate()->getDocHeaderComponent()->getMenuRegistry()->addMenu($menu);
}
protected function getHref($controller, $action, $parameters = [])
{
$uriBuilder = $this->objectManager->get(UriBuilder::class);
$uriBuilder->setRequest($this->request);
return $uriBuilder->reset()->uriFor($action, $parameters, $controller);
}
}