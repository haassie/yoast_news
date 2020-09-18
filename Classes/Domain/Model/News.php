<?php
namespace RichardHaeser\YoastSeoNews\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * @var string
     */
    protected $ogTitle;

    /**
     * @var string
     */
    protected $ogDescription;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $ogImage;

    /**
     * @var string
     */
    protected $twitterTitle;

    /**
     * @var string
     */
    protected $twitterDescription;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $twitterImage;

    public function __construct()
    {
        parent::__construct();
        $this->ogImage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->twitterImage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @return string
     */
    public function getOgTitle()
    {
        return $this->ogTitle;
    }

    /**
     * @param string $ogTitle
     */
    public function setOgTitle(string $ogTitle)
    {
        $this->ogTitle = $ogTitle;
    }

    /**
     * @return string
     */
    public function getOgDescription()
    {
        return $this->ogDescription;
    }

    /**
     * @param string $ogDescription
     */
    public function setOgDescription(string $ogDescription)
    {
        $this->ogDescription = $ogDescription;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getOgImage()
    {
        return $this->ogImage;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $ogImage
     */
    public function setOgImage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ogImage)
    {
        $this->ogImage = $ogImage;
    }

    /**
     * @return string
     */
    public function getTwitterTitle()
    {
        return $this->twitterTitle;
    }

    /**
     * @param string $twitterTitle
     */
    public function setTwitterTitle(string $twitterTitle)
    {
        $this->twitterTitle = $twitterTitle;
    }

    /**
     * @return string
     */
    public function getTwitterDescription()
    {
        return $this->twitterDescription;
    }

    /**
     * @param string $twitterDescription
     */
    public function setTwitterDescription(string $twitterDescription)
    {
        $this->twitterDescription = $twitterDescription;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getTwitterImage()
    {
        return $this->twitterImage;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $twitterImage
     */
    public function setTwitterImage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $twitterImage)
    {
        $this->twitterImage = $twitterImage;
    }
}
