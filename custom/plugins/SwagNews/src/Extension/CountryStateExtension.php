<?php
declare(strict_types=1);
namespace SwagNews\Extension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition;
use SwagNews\Core\Content\News\SwagNewsDefinition;

class CountryStateExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToManyAssociationField(
                'countryState',
                SwagNewsDefinition::class,
                'country_state_id',
                'id'
            )
        );
    }

    public function getDefinitionClass(): string
    {
        return CountryStateDefinition::class;
    }
}
