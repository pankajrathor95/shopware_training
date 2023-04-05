<?php
declare(strict_types=1);
namespace SwagNews\Extension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Country\CountryDefinition;
use SwagNews\Core\Content\News\SwagNewsDefinition;

class CountryExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToManyAssociationField(
                'country',
                SwagNewsDefinition::class,
                'country_id',
                'id'
            )
        );
    }

    public function getDefinitionClass(): string
    {
        return CountryDefinition::class;
    }
}
