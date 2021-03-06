<?php

declare(strict_types=1);

namespace Setono\SyliusCalloutPlugin\Model;

use Doctrine\Common\Collections\Collection;

interface CalloutsAwareInterface
{
    /**
     * @return Collection|CalloutInterface[]
     */
    public function getCallouts(): Collection;

    /**
     * @return Collection|CalloutInterface[]
     */
    public function getCalloutsByPosition(string $position): Collection;

    public function hasCallout(CalloutInterface $callout): bool;

    public function addCallout(CalloutInterface $callout): void;

    public function removeCallout(CalloutInterface $callout): void;

    public function setCallouts(iterable $callouts): void;
}
