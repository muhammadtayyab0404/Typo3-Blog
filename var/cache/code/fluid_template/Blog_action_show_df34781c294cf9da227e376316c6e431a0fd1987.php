<?php

class Blog_action_show_df34781c294cf9da227e376316c6e431a0fd1987 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<h1>Show BLog</h1>
<div class="card">
    <h5 class="card-header">
        ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array1)]);

$output0 .= '
    </h5>
<div class="card-body">
 <p class="card-text">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$array4 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.description', $array4)]);
};
$arguments2 = array();
$arguments2['value'] = NULL;
$renderChildrenClosure3 = ($arguments2['value'] !== null) ? function() use ($arguments2) { return $arguments2['value']; } : $renderChildrenClosure3;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
 </p>   
</div>    
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
<ul class="list-group">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
        <li class="list-group-item d-flex justify-content-between align-items-center">';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.title', $array15)]);

$output14 .= '
            <div class="tags">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
            <span class="badge badge-pill badge-secondary">';
$array20 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.tagvalue', $array20)]);

$output19 .= '</span>
            ';
return $output19;
};
$arguments16 = array();
$arguments16['each'] = NULL;
$arguments16['as'] = NULL;
$arguments16['key'] = NULL;
$arguments16['reverse'] = false;
$arguments16['iteration'] = NULL;
$array18 = array (
);$arguments16['each'] = $renderingContext->getVariableProvider()->getByPath('post.tags', $array18);
$arguments16['as'] = 'tag';

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output14 .= '
            </div>
            <div>
        
    <div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return '
        <i class="fas fa-trash"></i>
        Delete
        ';
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['aria'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['action'] = NULL;
$arguments21['controller'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['pluginName'] = NULL;
$arguments21['pageUid'] = NULL;
$arguments21['pageType'] = NULL;
$arguments21['noCache'] = NULL;
$arguments21['noCacheHash'] = NULL;
$arguments21['section'] = NULL;
$arguments21['format'] = NULL;
$arguments21['linkAccessRestrictedPages'] = NULL;
$arguments21['additionalParams'] = NULL;
$arguments21['absolute'] = NULL;
$arguments21['addQueryString'] = NULL;
$arguments21['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments21['addQueryStringMethod'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['action'] = 'deleteConfirm';
$arguments21['controller'] = 'Post';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array24);
$array25 = array (
);$array23['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array25);
$arguments21['arguments'] = $array23;
$arguments21['class'] = 'btn btn-primary btn-sm pull-right';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output14 .= '
       ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return '
       <i class="fas fa-edit"></i>
       EDIT
        ';
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['aria'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$arguments26['action'] = NULL;
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = NULL;
$arguments26['noCache'] = NULL;
$arguments26['noCacheHash'] = NULL;
$arguments26['section'] = NULL;
$arguments26['format'] = NULL;
$arguments26['linkAccessRestrictedPages'] = NULL;
$arguments26['additionalParams'] = NULL;
$arguments26['absolute'] = NULL;
$arguments26['addQueryString'] = NULL;
$arguments26['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments26['addQueryStringMethod'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['action'] = 'updateForm';
$arguments26['controller'] = 'Post';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array29);
$array30 = array (
);$array28['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array30);
$arguments26['arguments'] = $array28;
$arguments26['class'] = 'btn btn-primary btn-sm pull-right margin-right';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output14 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return '
       <i class="fas fa-edit"></i>
       Show
    ';
};
$arguments31 = array();
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['aria'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['name'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['rev'] = NULL;
$arguments31['target'] = NULL;
$arguments31['action'] = NULL;
$arguments31['controller'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['pluginName'] = NULL;
$arguments31['pageUid'] = NULL;
$arguments31['pageType'] = NULL;
$arguments31['noCache'] = NULL;
$arguments31['noCacheHash'] = NULL;
$arguments31['section'] = NULL;
$arguments31['format'] = NULL;
$arguments31['linkAccessRestrictedPages'] = NULL;
$arguments31['additionalParams'] = NULL;
$arguments31['absolute'] = NULL;
$arguments31['addQueryString'] = NULL;
$arguments31['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments31['addQueryStringMethod'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['action'] = 'show';
$arguments31['controller'] = 'Post';
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array34);
$array35 = array (
);$array33['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array35);
$arguments31['arguments'] = $array33;
$arguments31['class'] = 'btn btn-primary btn-sm pull-right margin-right';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output14 .= '
    
    </div>
   </li>
    ';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$array13 = array (
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('blog.posts', $array13);
$arguments11['as'] = 'post';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
</ul>
';
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('blog.posts', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return '
    <i class="fas fa-plus-circle"></i>
    Add Post
';
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['aria'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$arguments36['action'] = NULL;
$arguments36['controller'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['pluginName'] = NULL;
$arguments36['pageUid'] = NULL;
$arguments36['pageType'] = NULL;
$arguments36['noCache'] = NULL;
$arguments36['noCacheHash'] = NULL;
$arguments36['section'] = NULL;
$arguments36['format'] = NULL;
$arguments36['linkAccessRestrictedPages'] = NULL;
$arguments36['additionalParams'] = NULL;
$arguments36['absolute'] = NULL;
$arguments36['addQueryString'] = NULL;
$arguments36['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments36['addQueryStringMethod'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['action'] = 'addForm';
$arguments36['controller'] = 'Post';
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array39);
$arguments36['arguments'] = $array38;
$arguments36['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return ' <i class="fas fa-list"></i>Back to Blog List';
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['aria'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$arguments40['action'] = NULL;
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['pageType'] = NULL;
$arguments40['noCache'] = NULL;
$arguments40['noCacheHash'] = NULL;
$arguments40['section'] = NULL;
$arguments40['format'] = NULL;
$arguments40['linkAccessRestrictedPages'] = NULL;
$arguments40['additionalParams'] = NULL;
$arguments40['absolute'] = NULL;
$arguments40['addQueryString'] = NULL;
$arguments40['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments40['addQueryStringMethod'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['action'] = 'list';
$arguments40['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#