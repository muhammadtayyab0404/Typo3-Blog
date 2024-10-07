<?php
namespace ExtbaseBook\Simpleblog\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class AuthorRepository extends Repository
{
    /**
     * Default orderings for the repository
     *
     * @var array
     */
    protected $defaultOrderings = [
        'fullname' => QueryInterface::ORDER_ASCENDING
    ];

    /**
     * Initializes the repository with custom settings.
     *
     * @return void
     */
    public function initializeObject(): void
    {
        /** @var Typo3QuerySettings $querySettings */
        $querySettings = $this->objectManager->get(Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
