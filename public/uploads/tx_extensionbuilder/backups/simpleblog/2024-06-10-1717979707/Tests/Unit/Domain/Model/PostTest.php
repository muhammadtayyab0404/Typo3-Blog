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
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContent()
        );
    }

    /**
     * @test
     */
    public function setContentForStringSetsContent()
    {
        $this->subject->setContent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'content',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPostdateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPostdate()
        );
    }

    /**
     * @test
     */
    public function setPostdateForDateTimeSetsPostdate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPostdate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'postdate',
            $this->subject
        );
    }
}
