<?php

class partial_TwitterShare_b30d53658b9d8ebc2b163ff3110d186b04601d2e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'simpleblog' => 
  array (
    0 => 'ExtbaseBook\\Simpleblog\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '<div class="twitter-button">
    <a href="https://img.icons8.com/?size=100&id=13963&format=png&color=000000" class="twitter-share-button" data-si\\
    ze="large" data-show-count="false">
    Tweet
    </a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>';
}


}
#