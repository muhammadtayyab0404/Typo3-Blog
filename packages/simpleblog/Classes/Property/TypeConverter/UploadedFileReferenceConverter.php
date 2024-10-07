<?php
namespace ExtbaseBook\Simpleblog\Property\TypeConverter;
use TYPO3\CMS\Extbase\Property\TypeConverter\AbstractTypeConverter;

/**
* Class UploadedFileReferenceConverter
*/
class UploadedFileReferenceConverter extends AbstractTypeConverter
{
    public function convertFrom(
    $source,
    $targetType,
    array $convertedChildProperties = [],
    \TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationInterface $configuration = null
    ) {
    
    }
    protected function importUploadedResource(
    array $uploadInfo,
    \TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationInterface $configuration
    ) {
    
    }
    protected function createFileReferenceFromFalFileObject(
    \TYPO3\CMS\Core\Resource\File $file,
    $resourcePointer = null
    ) {
    
    }
    protected function createFileReferenceFromFalFileReferenceObject(
    \TYPO3\CMS\Core\Resource\FileReference $falFileReference,
    $resourcePointer = null
        ) {
        
        }
        }