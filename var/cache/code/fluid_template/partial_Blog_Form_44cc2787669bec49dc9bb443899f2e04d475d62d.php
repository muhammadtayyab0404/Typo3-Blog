<?php

class partial_Blog_Form_44cc2787669bec49dc9bb443899f2e04d475d62d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<h1>';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array1)]);

$output0 .= '</h1>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['section'] = NULL;
$arguments2['partial'] = NULL;
$arguments2['delegate'] = NULL;
$arguments2['renderable'] = NULL;
$arguments2['arguments'] = array (
);
$arguments2['optional'] = false;
$arguments2['default'] = NULL;
$arguments2['contentAs'] = NULL;
$arguments2['debug'] = true;
$arguments2['partial'] = 'Error';
// Rendering Array
$array4 = array();
$array4['object'] = 'blog';
$arguments2['arguments'] = $array4;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
 <div class="form-group">
    <label>Blog Title</label>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['aria'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['autofocus'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['maxlength'] = NULL;
$arguments11['readonly'] = NULL;
$arguments11['size'] = NULL;
$arguments11['placeholder'] = NULL;
$arguments11['pattern'] = NULL;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['required'] = false;
$arguments11['type'] = 'text';
$arguments11['property'] = 'title';
$arguments11['class'] = 'form-control';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
 </div>
<div class="form-group">
    <label>Blog Description</label>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['aria'] = NULL;
$arguments13['name'] = NULL;
$arguments13['value'] = NULL;
$arguments13['property'] = NULL;
$arguments13['autofocus'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['maxlength'] = NULL;
$arguments13['readonly'] = NULL;
$arguments13['size'] = NULL;
$arguments13['placeholder'] = NULL;
$arguments13['pattern'] = NULL;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['required'] = false;
$arguments13['type'] = 'text';
$arguments13['property'] = 'description';
$arguments13['class'] = 'form-control';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '
</div>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['name'] = NULL;
$arguments15['value'] = NULL;
$arguments15['property'] = NULL;
$arguments15['disabled'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$array17 = array (
);$arguments15['value'] = $renderingContext->getVariableProvider()->getByPath('submitmessage', $array17);
$arguments15['class'] = 'btn btn-primary';

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output10 .= '
';
return $output10;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['aria'] = NULL;
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['extensionName'] = NULL;
$arguments5['pluginName'] = NULL;
$arguments5['pageUid'] = NULL;
$arguments5['object'] = NULL;
$arguments5['pageType'] = 0;
$arguments5['noCache'] = false;
$arguments5['noCacheHash'] = false;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['absolute'] = false;
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['addQueryStringMethod'] = 'GET';
$arguments5['fieldNamePrefix'] = NULL;
$arguments5['actionUri'] = NULL;
$arguments5['objectName'] = NULL;
$arguments5['hiddenFieldClassName'] = NULL;
$arguments5['enctype'] = NULL;
$arguments5['method'] = NULL;
$arguments5['name'] = NULL;
$arguments5['onreset'] = NULL;
$arguments5['onsubmit'] = NULL;
$arguments5['target'] = NULL;
$arguments5['novalidate'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$array7 = array (
);$arguments5['action'] = $renderingContext->getVariableProvider()->getByPath('action', $array7);
$array8 = array (
);$arguments5['object'] = $renderingContext->getVariableProvider()->getByPath('blog', $array8);
$arguments5['name'] = 'blog';
// Rendering Array
$array9 = array();
$array9['role'] = 'form';
$arguments5['additionalAttributes'] = $array9;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

return $output0;
}


}
#