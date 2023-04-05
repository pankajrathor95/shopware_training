<?php declare(strict_types=1);

namespace SwagNews\Core\Content\News\Aggregate\SwagNewsTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use SwagNews\Core\Content\News\SwagNewsEntity;
use Shopware\Core\System\Language\LanguageEntity;

class SwagNewsTranslationEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface|null
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $swagNewsId;

    /**
     * @var string
     */
    protected $languageId;

    /**
     * @var SwagNewsEntity|null
     */
    protected $swagNews;

    /**
     * @var LanguageEntity|null
     */
    protected $language;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getSwagNewsId(): string
    {
        return $this->swagNewsId;
    }

    public function setSwagNewsId(string $swagNewsId): void
    {
        $this->swagNewsId = $swagNewsId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getSwagNews(): ?SwagNewsEntity
    {
        return $this->swagNews;
    }

    public function setSwagNews(?SwagNewsEntity $swagNews): void
    {
        $this->swagNews = $swagNews;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }
}