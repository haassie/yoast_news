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
     * @var string
     */
    protected $twitterTitle;

    /**
     * @var string
     */
    protected $twitterDescription;

    /**
     * @return string
     */
    public function getOgTitle(): string
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
    public function getOgDescription(): string
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
     * @return string
     */
    public function getTwitterTitle(): string
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
    public function getTwitterDescription(): string
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
}
