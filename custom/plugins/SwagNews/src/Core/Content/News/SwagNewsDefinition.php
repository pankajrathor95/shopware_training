<?php

declare(strict_types=1);

namespace SwagNews\Core\Content\News;

use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ReferenceVersionField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition;
use Shopware\Core\System\Country\CountryDefinition;

class SwagNewsDefinition extends EntityDefinition
{
    // table name
    public const ENTITY_NAME = 'swag_news';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return SwagNewsCollection::class;
    }

    public function getEntityClass(): string
    {
        return SwagNewsEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('name', 'name'))->addFlags(new ApiAware(), new Required()),
            (new StringField('city', 'city'))->addFlags(new ApiAware(), new Required()),
            (new BoolField('active', 'active')),
            (new FkField('country_id', 'countryId', CountryDefinition::class))->addFlags(new ApiAware()),
            (new FkField('country_state_id', 'countryStateId', CountryStateDefinition::class))->addFlags(new ApiAware()),
            (new FkField('image_id', 'imageId', MediaDefinition::class,'id'))->addFlags(new ApiAware()),
            (new FkField('product_id', 'productId', ProductDefinition::class))->addFlags(new ApiAware(), new Required()),
            (new ReferenceVersionField(ProductDefinition::class))->addFlags(new ApiAware(), new Required()),

            (new ManyToOneAssociationField('country', 'country_id', CountryDefinition::class, 'id', false)),
            (new ManyToOneAssociationField('countryState', 'country_state_id', CountryStateDefinition::class, 'id', false)),
            (new ManyToOneAssociationField('image', 'image_id', MediaDefinition::class, 'id', false)),
            new ManyToOneAssociationField('product', 'product_id', ProductDefinition::class, 'id', false)
        ]);
    }
}













