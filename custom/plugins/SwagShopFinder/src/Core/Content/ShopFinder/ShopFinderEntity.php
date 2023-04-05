<?php
declare(strict_types=1);

namespace SwagShopFinder\Core\Content\ShopFinder;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\Country\CountryEntity;

class ShopFinderEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string|null
     */
    protected ?string $name;
    /**
     * @var string|null
     */
    protected ?string $street;
    /**
     * @var string|null
     */
    protected ?string $city;

    /**
     * @var string|null
     */
    protected ?string $postCode;
    /**
     * @var string|null
     */
    protected ?string $url;
    /**
     * @var string|null
     */
    protected ?string $telephone;
    /**
     * @var string|null
     */
    protected ?string $openTimes;

    /**
     * @var CountryEntity|null
     */
    protected ?CountryEntity $country;
    /**
     * @var string|null
     */
    protected ?string $countryId;
    /**
     * @var bool
     */
    protected bool $active;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->getStreet();
    }

    /**
     * @param string|null $street
     * @return void
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     * @return void
     */
    public function setTelephone(?string $telephone):void
    {
        $this->telephone =$telephone;
    }
    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string|null $postCode
     * @return void
     */
    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return void
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getUrl():string
    {
        return $this->url;
    }
    /**
     * @param string|null $url
     * @return void
     */
    public function setUrl(?string $url):void
    {
        $this->url= $url;
    }


    /**
     * @return string
     */
    public function getOpenTimes():string
    {
        return $this->openTimes;
    }

    /**
     * @param string|null $openTimes
     * @return void
     */
    public function setOpenTimes(?string $openTimes):void
    {
        $this->openTimes = $openTimes;
    }

    /**
     * @return CountryEntity|null
     */
    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    /**
     * @param CountryEntity|null $country
     * @return void
     */
    public function setCountry(?CountryEntity $country): void
    {
        $this->country=$country;
    }

    /**
     * @return string
     */
    public function getCountryId():string
    {
        return $this->countryId;
    }

    /**
     * @param string|null $countryId
     * @return void
     */
    public function setCountryId(?string $countryId)
    {
        $this->countryId = $countryId;
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return void
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }
}
