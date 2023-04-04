<?php declare(strict_types=1);

namespace SwagNews\Core\Content\News;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void                add(SwagNewsEntity $entity)
 * @method void                set(string $key, SwagNewsEntity $entity)
 * @method SwagNewsEntity[]    getIterator()
 * @method SwagNewsEntity[]    getElements()
 * @method SwagNewsEntity|null get(string $key)
 * @method SwagNewsEntity|null first()
 * @method SwagNewsEntity|null last()
 */
 #[Package('core')]
class SwagNewsCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return SwagNewsEntity::class;
    }
}