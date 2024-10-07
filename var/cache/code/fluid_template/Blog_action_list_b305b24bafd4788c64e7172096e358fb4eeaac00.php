<?php

class Blog_action_list_b305b24bafd4788c64e7172096e358fb4eeaac00 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'default';
}
public function hasLayout() {
return TRUE;
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
  'simpleblog' => 
  array (
    0 => 'ExtbaseBook\\Simpleblog\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<h1>Blog List</h1>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['queueIdentifier'] = NULL;
$arguments1['as'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
 <div class="input-group mb-3">
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['aria'] = NULL;
$arguments8['name'] = NULL;
$arguments8['value'] = NULL;
$arguments8['property'] = NULL;
$arguments8['autofocus'] = NULL;
$arguments8['disabled'] = NULL;
$arguments8['maxlength'] = NULL;
$arguments8['readonly'] = NULL;
$arguments8['size'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['pattern'] = NULL;
$arguments8['errorClass'] = 'f3-form-error';
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['required'] = false;
$arguments8['type'] = 'text';
$arguments8['name'] = 'search';
$array10 = array (
);$arguments8['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments8['class'] = 'form-control';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
  <div class="input-group-appned">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
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
$arguments11['disabled'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['value'] = 'Search';
$arguments11['class'] = 'btn btn-outline-secondary';

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output7 .= '
  </div>
 </div>
 ';
return $output7;
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['aria'] = NULL;
$arguments3['action'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['controller'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['pluginName'] = NULL;
$arguments3['pageUid'] = NULL;
$arguments3['object'] = NULL;
$arguments3['pageType'] = 0;
$arguments3['noCache'] = false;
$arguments3['noCacheHash'] = false;
$arguments3['section'] = '';
$arguments3['format'] = '';
$arguments3['additionalParams'] = array (
);
$arguments3['absolute'] = false;
$arguments3['addQueryString'] = false;
$arguments3['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments3['addQueryStringMethod'] = 'GET';
$arguments3['fieldNamePrefix'] = NULL;
$arguments3['actionUri'] = NULL;
$arguments3['objectName'] = NULL;
$arguments3['hiddenFieldClassName'] = NULL;
$arguments3['enctype'] = NULL;
$arguments3['method'] = NULL;
$arguments3['name'] = NULL;
$arguments3['onreset'] = NULL;
$arguments3['onsubmit'] = NULL;
$arguments3['target'] = NULL;
$arguments3['novalidate'] = NULL;
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['action'] = 'list';
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['role'] = $renderingContext->getVariableProvider()->getByPath('form', $array6);
$arguments3['additionalAttributes'] = $array5;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
<ul class="list-group ">
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
    <li class="list-group-item d-flex justify-content-between align-items-center">
        ';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array17)]);

$output16 .= '
        <div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
      <i class="fas fa-eye"></i>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'blog.headline.show';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
    ';
return $output22;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['aria'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['name'] = NULL;
$arguments18['rel'] = NULL;
$arguments18['rev'] = NULL;
$arguments18['target'] = NULL;
$arguments18['action'] = NULL;
$arguments18['controller'] = NULL;
$arguments18['extensionName'] = NULL;
$arguments18['pluginName'] = NULL;
$arguments18['pageUid'] = NULL;
$arguments18['pageType'] = NULL;
$arguments18['noCache'] = NULL;
$arguments18['noCacheHash'] = NULL;
$arguments18['section'] = NULL;
$arguments18['format'] = NULL;
$arguments18['linkAccessRestrictedPages'] = NULL;
$arguments18['additionalParams'] = NULL;
$arguments18['absolute'] = NULL;
$arguments18['addQueryString'] = NULL;
$arguments18['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments18['addQueryStringMethod'] = NULL;
$arguments18['arguments'] = NULL;
$arguments18['action'] = 'show';
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array21);
$arguments18['arguments'] = $array20;
$arguments18['class'] = 'btn btn-primary btn-sm';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output16 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return '
    <i class="fas fa-edit"></i>    
    Edit
    ';
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['aria'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$arguments25['action'] = NULL;
$arguments25['controller'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['pluginName'] = NULL;
$arguments25['pageUid'] = NULL;
$arguments25['pageType'] = NULL;
$arguments25['noCache'] = NULL;
$arguments25['noCacheHash'] = NULL;
$arguments25['section'] = NULL;
$arguments25['format'] = NULL;
$arguments25['linkAccessRestrictedPages'] = NULL;
$arguments25['additionalParams'] = NULL;
$arguments25['absolute'] = NULL;
$arguments25['addQueryString'] = NULL;
$arguments25['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments25['addQueryStringMethod'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['action'] = 'updateForm';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array28);
$arguments25['arguments'] = $array27;
$arguments25['class'] = 'btn btn-primary btn-sm';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output16 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return '
      <i class="fas fa-trash"></i>
      Delete
    ';
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['aria'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['name'] = NULL;
$arguments29['rel'] = NULL;
$arguments29['rev'] = NULL;
$arguments29['target'] = NULL;
$arguments29['action'] = NULL;
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = NULL;
$arguments29['noCache'] = NULL;
$arguments29['noCacheHash'] = NULL;
$arguments29['section'] = NULL;
$arguments29['format'] = NULL;
$arguments29['linkAccessRestrictedPages'] = NULL;
$arguments29['additionalParams'] = NULL;
$arguments29['absolute'] = NULL;
$arguments29['addQueryString'] = NULL;
$arguments29['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments29['addQueryStringMethod'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['action'] = 'deleteConfirm';
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array32);
$arguments29['arguments'] = $array31;
$arguments29['class'] = 'btn btn-primary btn-sm';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output16 .= '
  </div>
    </li>

  ';
return $output16;
};
$arguments13 = array();
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$array15 = array (
);$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array15);
$arguments13['as'] = 'blog';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
  <p><small>Max ';
$array33 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.blog.max', $array33)]);

$output0 .= ' Blogs are shown.</small></p>
</ul>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
  <i class="fas fa-plus-circle"></i>
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['languageKey'] = NULL;
$arguments37['alternativeLanguageKeys'] = NULL;
$arguments37['key'] = 'blog.list.button.add-blogs';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '
';
return $output36;
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['aria'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = NULL;
$arguments34['controller'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['pluginName'] = NULL;
$arguments34['pageUid'] = NULL;
$arguments34['pageType'] = NULL;
$arguments34['noCache'] = NULL;
$arguments34['noCacheHash'] = NULL;
$arguments34['section'] = NULL;
$arguments34['format'] = NULL;
$arguments34['linkAccessRestrictedPages'] = NULL;
$arguments34['additionalParams'] = NULL;
$arguments34['absolute'] = NULL;
$arguments34['addQueryString'] = NULL;
$arguments34['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments34['addQueryStringMethod'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['action'] = 'addForm';
$arguments34['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output39 = '';

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'default';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output39 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
<h1>Blog List</h1>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['queueIdentifier'] = NULL;
$arguments45['as'] = NULL;

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
 ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
 <div class="input-group mb-3">
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['additionalAttributes'] = NULL;
$arguments52['data'] = NULL;
$arguments52['aria'] = NULL;
$arguments52['name'] = NULL;
$arguments52['value'] = NULL;
$arguments52['property'] = NULL;
$arguments52['autofocus'] = NULL;
$arguments52['disabled'] = NULL;
$arguments52['maxlength'] = NULL;
$arguments52['readonly'] = NULL;
$arguments52['size'] = NULL;
$arguments52['placeholder'] = NULL;
$arguments52['pattern'] = NULL;
$arguments52['errorClass'] = 'f3-form-error';
$arguments52['class'] = NULL;
$arguments52['dir'] = NULL;
$arguments52['id'] = NULL;
$arguments52['lang'] = NULL;
$arguments52['style'] = NULL;
$arguments52['title'] = NULL;
$arguments52['accesskey'] = NULL;
$arguments52['tabindex'] = NULL;
$arguments52['onclick'] = NULL;
$arguments52['required'] = false;
$arguments52['type'] = 'text';
$arguments52['name'] = 'search';
$array54 = array (
);$arguments52['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array54);
$arguments52['class'] = 'form-control';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
  <div class="input-group-appned">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['aria'] = NULL;
$arguments55['name'] = NULL;
$arguments55['value'] = NULL;
$arguments55['property'] = NULL;
$arguments55['disabled'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['value'] = 'Search';
$arguments55['class'] = 'btn btn-outline-secondary';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output51 .= '
  </div>
 </div>
 ';
return $output51;
};
$arguments47 = array();
$arguments47['additionalAttributes'] = NULL;
$arguments47['data'] = NULL;
$arguments47['aria'] = NULL;
$arguments47['action'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['controller'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['pluginName'] = NULL;
$arguments47['pageUid'] = NULL;
$arguments47['object'] = NULL;
$arguments47['pageType'] = 0;
$arguments47['noCache'] = false;
$arguments47['noCacheHash'] = false;
$arguments47['section'] = '';
$arguments47['format'] = '';
$arguments47['additionalParams'] = array (
);
$arguments47['absolute'] = false;
$arguments47['addQueryString'] = false;
$arguments47['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments47['addQueryStringMethod'] = 'GET';
$arguments47['fieldNamePrefix'] = NULL;
$arguments47['actionUri'] = NULL;
$arguments47['objectName'] = NULL;
$arguments47['hiddenFieldClassName'] = NULL;
$arguments47['enctype'] = NULL;
$arguments47['method'] = NULL;
$arguments47['name'] = NULL;
$arguments47['onreset'] = NULL;
$arguments47['onsubmit'] = NULL;
$arguments47['target'] = NULL;
$arguments47['novalidate'] = NULL;
$arguments47['class'] = NULL;
$arguments47['dir'] = NULL;
$arguments47['id'] = NULL;
$arguments47['lang'] = NULL;
$arguments47['style'] = NULL;
$arguments47['title'] = NULL;
$arguments47['accesskey'] = NULL;
$arguments47['tabindex'] = NULL;
$arguments47['onclick'] = NULL;
$arguments47['action'] = 'list';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['role'] = $renderingContext->getVariableProvider()->getByPath('form', $array50);
$arguments47['additionalAttributes'] = $array49;

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
<ul class="list-group ">
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
    <li class="list-group-item d-flex justify-content-between align-items-center">
        ';
$array61 = array (
);
$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array61)]);

$output60 .= '
        <div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
      <i class="fas fa-eye"></i>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'blog.headline.show';

$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output66 .= '
    ';
return $output66;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['aria'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['name'] = NULL;
$arguments62['rel'] = NULL;
$arguments62['rev'] = NULL;
$arguments62['target'] = NULL;
$arguments62['action'] = NULL;
$arguments62['controller'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['pluginName'] = NULL;
$arguments62['pageUid'] = NULL;
$arguments62['pageType'] = NULL;
$arguments62['noCache'] = NULL;
$arguments62['noCacheHash'] = NULL;
$arguments62['section'] = NULL;
$arguments62['format'] = NULL;
$arguments62['linkAccessRestrictedPages'] = NULL;
$arguments62['additionalParams'] = NULL;
$arguments62['absolute'] = NULL;
$arguments62['addQueryString'] = NULL;
$arguments62['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments62['addQueryStringMethod'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['action'] = 'show';
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array65);
$arguments62['arguments'] = $array64;
$arguments62['class'] = 'btn btn-primary btn-sm';

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output60 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return '
    <i class="fas fa-edit"></i>    
    Edit
    ';
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['aria'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$arguments69['name'] = NULL;
$arguments69['rel'] = NULL;
$arguments69['rev'] = NULL;
$arguments69['target'] = NULL;
$arguments69['action'] = NULL;
$arguments69['controller'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['pluginName'] = NULL;
$arguments69['pageUid'] = NULL;
$arguments69['pageType'] = NULL;
$arguments69['noCache'] = NULL;
$arguments69['noCacheHash'] = NULL;
$arguments69['section'] = NULL;
$arguments69['format'] = NULL;
$arguments69['linkAccessRestrictedPages'] = NULL;
$arguments69['additionalParams'] = NULL;
$arguments69['absolute'] = NULL;
$arguments69['addQueryString'] = NULL;
$arguments69['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments69['addQueryStringMethod'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['action'] = 'updateForm';
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array72);
$arguments69['arguments'] = $array71;
$arguments69['class'] = 'btn btn-primary btn-sm';

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output60 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '
      <i class="fas fa-trash"></i>
      Delete
    ';
};
$arguments73 = array();
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['aria'] = NULL;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['name'] = NULL;
$arguments73['rel'] = NULL;
$arguments73['rev'] = NULL;
$arguments73['target'] = NULL;
$arguments73['action'] = NULL;
$arguments73['controller'] = NULL;
$arguments73['extensionName'] = NULL;
$arguments73['pluginName'] = NULL;
$arguments73['pageUid'] = NULL;
$arguments73['pageType'] = NULL;
$arguments73['noCache'] = NULL;
$arguments73['noCacheHash'] = NULL;
$arguments73['section'] = NULL;
$arguments73['format'] = NULL;
$arguments73['linkAccessRestrictedPages'] = NULL;
$arguments73['additionalParams'] = NULL;
$arguments73['absolute'] = NULL;
$arguments73['addQueryString'] = NULL;
$arguments73['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments73['addQueryStringMethod'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['action'] = 'deleteConfirm';
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array76);
$arguments73['arguments'] = $array75;
$arguments73['class'] = 'btn btn-primary btn-sm';

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output60 .= '
  </div>
    </li>

  ';
return $output60;
};
$arguments57 = array();
$arguments57['each'] = NULL;
$arguments57['as'] = NULL;
$arguments57['key'] = NULL;
$arguments57['reverse'] = false;
$arguments57['iteration'] = NULL;
$array59 = array (
);$arguments57['each'] = $renderingContext->getVariableProvider()->getByPath('blogs', $array59);
$arguments57['as'] = 'blog';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output44 .= '
  <p><small>Max ';
$array77 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.blog.max', $array77)]);

$output44 .= ' Blogs are shown.</small></p>
</ul>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
  <i class="fas fa-plus-circle"></i>
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'blog.list.button.add-blogs';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output80 .= '
';
return $output80;
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['aria'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['action'] = NULL;
$arguments78['controller'] = NULL;
$arguments78['extensionName'] = NULL;
$arguments78['pluginName'] = NULL;
$arguments78['pageUid'] = NULL;
$arguments78['pageType'] = NULL;
$arguments78['noCache'] = NULL;
$arguments78['noCacheHash'] = NULL;
$arguments78['section'] = NULL;
$arguments78['format'] = NULL;
$arguments78['linkAccessRestrictedPages'] = NULL;
$arguments78['additionalParams'] = NULL;
$arguments78['absolute'] = NULL;
$arguments78['addQueryString'] = NULL;
$arguments78['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['arguments'] = NULL;
$arguments78['action'] = 'addForm';
$arguments78['class'] = 'btn btn-primary';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output44 .= '
';
return $output44;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'content';

$output39 .= '';

return $output39;
}


}
#