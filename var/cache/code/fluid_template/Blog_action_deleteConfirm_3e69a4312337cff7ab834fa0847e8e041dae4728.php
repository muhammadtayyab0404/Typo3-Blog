<?php

class Blog_action_deleteConfirm_3e69a4312337cff7ab834fa0847e8e041dae4728 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h1>Delete Blog</h1>
<p>
    Are you sure you want to delete the blog ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array1)]);

$output0 .= '
</p>

 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return '
   <i class="fas fa-times-circle"></i>
    No
 ';
};
$arguments2 = array();
$arguments2['additionalAttributes'] = NULL;
$arguments2['data'] = NULL;
$arguments2['aria'] = NULL;
$arguments2['class'] = NULL;
$arguments2['dir'] = NULL;
$arguments2['id'] = NULL;
$arguments2['lang'] = NULL;
$arguments2['style'] = NULL;
$arguments2['title'] = NULL;
$arguments2['accesskey'] = NULL;
$arguments2['tabindex'] = NULL;
$arguments2['onclick'] = NULL;
$arguments2['name'] = NULL;
$arguments2['rel'] = NULL;
$arguments2['rev'] = NULL;
$arguments2['target'] = NULL;
$arguments2['action'] = NULL;
$arguments2['controller'] = NULL;
$arguments2['extensionName'] = NULL;
$arguments2['pluginName'] = NULL;
$arguments2['pageUid'] = NULL;
$arguments2['pageType'] = NULL;
$arguments2['noCache'] = NULL;
$arguments2['noCacheHash'] = NULL;
$arguments2['section'] = NULL;
$arguments2['format'] = NULL;
$arguments2['linkAccessRestrictedPages'] = NULL;
$arguments2['additionalParams'] = NULL;
$arguments2['absolute'] = NULL;
$arguments2['addQueryString'] = NULL;
$arguments2['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments2['addQueryStringMethod'] = NULL;
$arguments2['arguments'] = NULL;
$arguments2['action'] = 'list';
$arguments2['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
   <i class="fas fa-check-circle"></i>
    Yes
 ';
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['aria'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$arguments4['action'] = NULL;
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = NULL;
$arguments4['noCache'] = NULL;
$arguments4['noCacheHash'] = NULL;
$arguments4['section'] = NULL;
$arguments4['format'] = NULL;
$arguments4['linkAccessRestrictedPages'] = NULL;
$arguments4['additionalParams'] = NULL;
$arguments4['absolute'] = NULL;
$arguments4['addQueryString'] = NULL;
$arguments4['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['action'] = 'delete';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['blog'] = $renderingContext->getVariableProvider()->getByPath('blog1', $array7);
$arguments4['arguments'] = $array6;
$arguments4['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#