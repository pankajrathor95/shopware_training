<?php declare(strict_types=1);

namespace SwagNews\Core\Content\News\Aggregate\SwagNewsTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use SwagNews\Core\Content\News\SwagNewsDefinition;

class SwagNewsTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'swag_news_translation';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getParentDefinitionClass(): string
    {
        return SwagNewsDefinition::class;
    }

    public function getEntityClass(): string
    {
        return SwagNewsTranslationEntity::class;
    }

    public function getCollectionClass(): string
    {
        return SwagNewsTranslationCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('name', 'name'))->addFlags(new Required()),
            (new StringField('city', 'city'))->addFlags(new Required()),
        ]);
    }
}
