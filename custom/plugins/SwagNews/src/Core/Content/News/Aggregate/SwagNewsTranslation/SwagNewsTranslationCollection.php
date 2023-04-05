<?php declare(strict_types=1);

namespace SwagNews\Core\Content\News\Aggregate\SwagNewsTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void                add(SwagNewsTranslationEntity $entity)
 * @method void                set(string $key, SwagNewsTranslationEntity $entity)
 * @method SwagNewsTranslationEntity[]    getIterator()
 * @method SwagNewsTranslationEntity[]    getElements()
 * @method SwagNewsTranslationEntity|null get(string $key)
 * @method SwagNewsTranslationEntity|null first()
 * @method SwagNewsTranslationEntity|null last()
 */
 #[Package('core')]
class SwagNewsTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SwagNewsTranslationEntity::class;
    }
}