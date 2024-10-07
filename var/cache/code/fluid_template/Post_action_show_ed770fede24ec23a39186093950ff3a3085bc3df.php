<?php

class Post_action_show_ed770fede24ec23a39186093950ff3a3085bc3df extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
 <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'post.headline.show';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
<div class="card">
    <h5 class="card-header">
        ';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.title', $array3)]);

$output0 .= '
     <span class="float-right">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['date'] = NULL;
$arguments4['format'] = '';
$arguments4['base'] = NULL;
$array6 = array (
);$arguments4['date'] = $renderingContext->getVariableProvider()->getByPath('post.postdate', $array6);
$arguments4['format'] = 'd/M/Y';
$renderChildrenClosure5 = ($arguments4['date'] !== null) ? function() use ($arguments4) { return $arguments4['date']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
         </span>
    </h5>
    <div class="card-body">
        <p class="card-text">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.content', $array9)]);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </p>
        <p class="card-text tags">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
        <span class="badge badge-pill badge-secondary">';
$array14 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.tagvalue', $array14)]);

$output13 .= '</span>
        ';
return $output13;
};
$arguments10 = array();
$arguments10['each'] = NULL;
$arguments10['as'] = NULL;
$arguments10['key'] = NULL;
$arguments10['reverse'] = false;
$arguments10['iteration'] = NULL;
$array12 = array (
);$arguments10['each'] = $renderingContext->getVariableProvider()->getByPath('post.tags', $array12);
$arguments10['as'] = 'tag';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
        </p>
        </div>
    <p>
        This post belongs to Blog: <strong>&quot;';
$array15 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array15)]);

$output0 .= '&quot;</strong>.
    </p>
</div>
</div>

   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '
    <i class="fas fa-list"></i>
    Back to Blog
   ';
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['aria'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['name'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['rev'] = NULL;
$arguments16['target'] = NULL;
$arguments16['action'] = NULL;
$arguments16['controller'] = NULL;
$arguments16['extensionName'] = NULL;
$arguments16['pluginName'] = NULL;
$arguments16['pageUid'] = NULL;
$arguments16['pageType'] = NULL;
$arguments16['noCache'] = NULL;
$arguments16['noCacheHash'] = NULL;
$arguments16['section'] = NULL;
$arguments16['format'] = NULL;
$arguments16['linkAccessRestrictedPages'] = NULL;
$arguments16['additionalParams'] = NULL;
$arguments16['absolute'] = NULL;
$arguments16['addQueryString'] = NULL;
$arguments16['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments16['addQueryStringMethod'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['action'] = 'show';
$arguments16['controller'] = 'Blog';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array19);
$arguments16['arguments'] = $array18;
$arguments16['class'] = 'btn btn-primary';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '

   <h3>Comments</h3>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
   <div class="form-group">
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['aria'] = NULL;
$arguments26['name'] = NULL;
$arguments26['value'] = NULL;
$arguments26['property'] = NULL;
$arguments26['autofocus'] = NULL;
$arguments26['rows'] = NULL;
$arguments26['cols'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['placeholder'] = NULL;
$arguments26['errorClass'] = 'f3-form-error';
$arguments26['readonly'] = NULL;
$arguments26['required'] = false;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['property'] = 'comment';
$arguments26['class'] = 'form-control';
$arguments26['id'] = 'comment-input';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
   </div>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['name'] = NULL;
$arguments28['value'] = NULL;
$arguments28['property'] = NULL;
$arguments28['disabled'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['value'] = 'Submit Comment';
$arguments28['class'] = 'btn btn-primary';
$arguments28['id'] = 'comment-submit';

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
   ';
return $output25;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['aria'] = NULL;
$arguments20['action'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['controller'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['pluginName'] = NULL;
$arguments20['pageUid'] = NULL;
$arguments20['object'] = NULL;
$arguments20['pageType'] = 0;
$arguments20['noCache'] = false;
$arguments20['noCacheHash'] = false;
$arguments20['section'] = '';
$arguments20['format'] = '';
$arguments20['additionalParams'] = array (
);
$arguments20['absolute'] = false;
$arguments20['addQueryString'] = false;
$arguments20['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments20['addQueryStringMethod'] = 'GET';
$arguments20['fieldNamePrefix'] = NULL;
$arguments20['actionUri'] = NULL;
$arguments20['objectName'] = NULL;
$arguments20['hiddenFieldClassName'] = NULL;
$arguments20['enctype'] = NULL;
$arguments20['method'] = NULL;
$arguments20['name'] = NULL;
$arguments20['onreset'] = NULL;
$arguments20['onsubmit'] = NULL;
$arguments20['target'] = NULL;
$arguments20['novalidate'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['action'] = 'ajax';
$arguments20['name'] = 'comment';
$array22 = array (
);$arguments20['object'] = $renderingContext->getVariableProvider()->getByPath('comment', $array22);
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array24);
$arguments20['arguments'] = $array23;
$arguments20['id'] = 'comments';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
   <ul class="list-group" id="comment-list">
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
   <li class="list-group-item">
   ';
$array36 = array (
);
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('comment.comment', $array36)]);

$output35 .= '
   <span class="text-muted">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['date'] = NULL;
$arguments37['format'] = '';
$arguments37['base'] = NULL;
$array39 = array (
);$arguments37['date'] = $renderingContext->getVariableProvider()->getByPath('comment.commentdate', $array39);
$arguments37['format'] = 'd/M/Y';
$renderChildrenClosure38 = ($arguments37['date'] !== null) ? function() use ($arguments37) { return $arguments37['date']; } : $renderChildrenClosure38;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output35 .= ')</span>
   </li>
   ';
return $output35;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('post.comments', $array32);
$arguments30['as'] = 'comment';
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array33['0'] = 'true';

$expression34 = function($context) {return TRUE;};
$arguments30['reverse'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '
   </ul>
   <script>
    var ajaxUrl = \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['action'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['controller'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['pluginName'] = NULL;
$arguments42['pageUid'] = NULL;
$arguments42['pageType'] = 0;
$arguments42['noCache'] = false;
$arguments42['noCacheHash'] = false;
$arguments42['section'] = '';
$arguments42['format'] = '';
$arguments42['linkAccessRestrictedPages'] = false;
$arguments42['additionalParams'] = array (
);
$arguments42['absolute'] = false;
$arguments42['addQueryString'] = false;
$arguments42['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments42['addQueryStringMethod'] = NULL;
$arguments42['action'] = 'comment';
$arguments42['pageType'] = 1550786448;
$arguments42['controller'] = 'Ajax';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array45);
$arguments42['arguments'] = $array44;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output0 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output0 .= '\';
    </script>
    
    
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '{namespace simpleblog = \\ExtbaseBook\\Simpleblog\\ViewHelpers}
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'default';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, ['']);

$output46 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
 <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'post.headline.show';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '</h1>
<div class="card">
    <h5 class="card-header">
        ';
$array54 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.title', $array54)]);

$output51 .= '
     <span class="float-right">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['date'] = NULL;
$arguments55['format'] = '';
$arguments55['base'] = NULL;
$array57 = array (
);$arguments55['date'] = $renderingContext->getVariableProvider()->getByPath('post.postdate', $array57);
$arguments55['format'] = 'd/M/Y';
$renderChildrenClosure56 = ($arguments55['date'] !== null) ? function() use ($arguments55) { return $arguments55['date']; } : $renderChildrenClosure56;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output51 .= '
         </span>
    </h5>
    <div class="card-body">
        <p class="card-text">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array60 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('post.content', $array60)]);
};
$arguments58 = array();
$arguments58['value'] = NULL;
$renderChildrenClosure59 = ($arguments58['value'] !== null) ? function() use ($arguments58) { return $arguments58['value']; } : $renderChildrenClosure59;
$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output51 .= '
        </p>
        <p class="card-text tags">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
        <span class="badge badge-pill badge-secondary">';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.tagvalue', $array65)]);

$output64 .= '</span>
        ';
return $output64;
};
$arguments61 = array();
$arguments61['each'] = NULL;
$arguments61['as'] = NULL;
$arguments61['key'] = NULL;
$arguments61['reverse'] = false;
$arguments61['iteration'] = NULL;
$array63 = array (
);$arguments61['each'] = $renderingContext->getVariableProvider()->getByPath('post.tags', $array63);
$arguments61['as'] = 'tag';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output51 .= '
        </p>
        </div>
    <p>
        This post belongs to Blog: <strong>&quot;';
$array66 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('blog.title', $array66)]);

$output51 .= '&quot;</strong>.
    </p>
</div>
</div>

   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return '
    <i class="fas fa-list"></i>
    Back to Blog
   ';
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['aria'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['name'] = NULL;
$arguments67['rel'] = NULL;
$arguments67['rev'] = NULL;
$arguments67['target'] = NULL;
$arguments67['action'] = NULL;
$arguments67['controller'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['pluginName'] = NULL;
$arguments67['pageUid'] = NULL;
$arguments67['pageType'] = NULL;
$arguments67['noCache'] = NULL;
$arguments67['noCacheHash'] = NULL;
$arguments67['section'] = NULL;
$arguments67['format'] = NULL;
$arguments67['linkAccessRestrictedPages'] = NULL;
$arguments67['additionalParams'] = NULL;
$arguments67['absolute'] = NULL;
$arguments67['addQueryString'] = NULL;
$arguments67['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments67['addQueryStringMethod'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['action'] = 'show';
$arguments67['controller'] = 'Blog';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['blog'] = $renderingContext->getVariableProvider()->getByPath('blog', $array70);
$arguments67['arguments'] = $array69;
$arguments67['class'] = 'btn btn-primary';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output51 .= '

   <h3>Comments</h3>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
   <div class="form-group">
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['aria'] = NULL;
$arguments77['name'] = NULL;
$arguments77['value'] = NULL;
$arguments77['property'] = NULL;
$arguments77['autofocus'] = NULL;
$arguments77['rows'] = NULL;
$arguments77['cols'] = NULL;
$arguments77['disabled'] = NULL;
$arguments77['placeholder'] = NULL;
$arguments77['errorClass'] = 'f3-form-error';
$arguments77['readonly'] = NULL;
$arguments77['required'] = false;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['property'] = 'comment';
$arguments77['class'] = 'form-control';
$arguments77['id'] = 'comment-input';

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
   </div>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['aria'] = NULL;
$arguments79['name'] = NULL;
$arguments79['value'] = NULL;
$arguments79['property'] = NULL;
$arguments79['disabled'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['value'] = 'Submit Comment';
$arguments79['class'] = 'btn btn-primary';
$arguments79['id'] = 'comment-submit';

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output76 .= '
   ';
return $output76;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['aria'] = NULL;
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['object'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = false;
$arguments71['noCacheHash'] = false;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = 'GET';
$arguments71['fieldNamePrefix'] = NULL;
$arguments71['actionUri'] = NULL;
$arguments71['objectName'] = NULL;
$arguments71['hiddenFieldClassName'] = NULL;
$arguments71['enctype'] = NULL;
$arguments71['method'] = NULL;
$arguments71['name'] = NULL;
$arguments71['onreset'] = NULL;
$arguments71['onsubmit'] = NULL;
$arguments71['target'] = NULL;
$arguments71['novalidate'] = NULL;
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
$arguments71['action'] = 'ajax';
$arguments71['name'] = 'comment';
$array73 = array (
);$arguments71['object'] = $renderingContext->getVariableProvider()->getByPath('comment', $array73);
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array75);
$arguments71['arguments'] = $array74;
$arguments71['id'] = 'comments';

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output51 .= '
   <ul class="list-group" id="comment-list">
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
   <li class="list-group-item">
   ';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('comment.comment', $array87)]);

$output86 .= '
   <span class="text-muted">(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['date'] = NULL;
$arguments88['format'] = '';
$arguments88['base'] = NULL;
$array90 = array (
);$arguments88['date'] = $renderingContext->getVariableProvider()->getByPath('comment.commentdate', $array90);
$arguments88['format'] = 'd/M/Y';
$renderChildrenClosure89 = ($arguments88['date'] !== null) ? function() use ($arguments88) { return $arguments88['date']; } : $renderChildrenClosure89;
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output86 .= ')</span>
   </li>
   ';
return $output86;
};
$arguments81 = array();
$arguments81['each'] = NULL;
$arguments81['as'] = NULL;
$arguments81['key'] = NULL;
$arguments81['reverse'] = false;
$arguments81['iteration'] = NULL;
$array83 = array (
);$arguments81['each'] = $renderingContext->getVariableProvider()->getByPath('post.comments', $array83);
$arguments81['as'] = 'comment';
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array84['0'] = 'true';

$expression85 = function($context) {return TRUE;};
$arguments81['reverse'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output51 .= '
   </ul>
   <script>
    var ajaxUrl = \'';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['action'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['controller'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['pluginName'] = NULL;
$arguments93['pageUid'] = NULL;
$arguments93['pageType'] = 0;
$arguments93['noCache'] = false;
$arguments93['noCacheHash'] = false;
$arguments93['section'] = '';
$arguments93['format'] = '';
$arguments93['linkAccessRestrictedPages'] = false;
$arguments93['additionalParams'] = array (
);
$arguments93['absolute'] = false;
$arguments93['addQueryString'] = false;
$arguments93['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments93['addQueryStringMethod'] = NULL;
$arguments93['action'] = 'comment';
$arguments93['pageType'] = 1550786448;
$arguments93['controller'] = 'Ajax';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['post'] = $renderingContext->getVariableProvider()->getByPath('post', $array96);
$arguments93['arguments'] = $array95;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
};
$arguments91 = array();
$arguments91['value'] = NULL;

$output51 .= isset($arguments91['value']) ? $arguments91['value'] : $renderChildrenClosure92();

$output51 .= '\';
    </script>
    
    
';
return $output51;
};
$arguments49 = array();
$arguments49['name'] = NULL;
$arguments49['name'] = 'content';

$output46 .= '';

return $output46;
}


}
#