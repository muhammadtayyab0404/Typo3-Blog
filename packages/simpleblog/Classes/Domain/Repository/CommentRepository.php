<?php
namespace ExtbaseBook\Simpleblog\Domain\Repository;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
class CommentRepository extends Repository
{
protected $defaultOrderings = ['commentdate' => QueryInterface::ORDER_DESCENDING];
}