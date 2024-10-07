<?php
namespace ExtbaseBook\Simpleblog\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author MalikDon01 <greattayyab22441005@gmail.com>
 */
class PostTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \ExtbaseBook\Simpleblog\Domain\Model\Post
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ExtbaseBook\Simpleblog\Domain\Model\Post();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
