<?php declare(strict_types=1);

namespace Exdrals\Identity\Infrastructure\Hydrator;

use Exdrals\Identity\Domain\AccountCollectionInterface;
use Exdrals\Identity\Domain\AccountInterface;
use Exdrals\Shared\Infrastructure\Hydrator\HydratorInterface;

interface AccountHydratorInterface extends HydratorInterface
{
    public function extract(AccountInterface $object): array;

    public function extractCollection(AccountCollectionInterface $collection): array;
}
