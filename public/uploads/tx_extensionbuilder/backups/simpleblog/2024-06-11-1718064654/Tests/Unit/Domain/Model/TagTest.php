<?php
namespace ExtbaseBook\Simpleblog\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author MalikDon01 <greattayyab22441005@gmail.com>
 */
class TagTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \ExtbaseBook\Simpleblog\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ExtbaseBook\Simpleblog\Domain\Model\Tag();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTagvalueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTagvalue()
        );
    }

    /**
     * @test
     */
    public function setTagvalueForStringSetsTagvalue()
    {
        $this->subject->setTagvalue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tagvalue',
            $this->subject
        );
    }
}
