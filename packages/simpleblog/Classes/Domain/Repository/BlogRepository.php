<?php
namespace ExtbaseBook\Simpleblog\Domain\Repository;

use \TYPO3\CMS\Extbase\Persistence\Repository;
use \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult;
use \TYPO3\CMS\Extbase\Persistence\QueryInterface;
/***
 *
 * This file is part of the "Simple Blog Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2024 MalikDon01 <greattayyab22441005@gmail.com>, NEON GROUP
 *
 ***/
/**
* Returns Blogs with a specific search term in the title
*
* @param string Search keyword
* @param int Max number of Blogs to read from storage
* @return QueryResult
*/ 
class BlogRepository extends Repository
{
    public function findSearchForm($search , $limit): QueryResult
    { 
        $query=$this->createQuery();
        $query->matching(
            $query->like('title', '%' . $search .'%')
        );
        $query->setOrderings(['title' => QueryInterface::ORDER_ASCENDING]);
        $limit = intval($limit);
        if($limit > 0){
            $query->setLimit($limit);
        }
        return $query-> execute();
    }
    
}
