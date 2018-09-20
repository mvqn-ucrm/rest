<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Collections;

use MVQN\Collections\Collectible;
use MVQN\Collections\Collection;

use MVQN\REST\UCRM\Endpoints\Device;

/**
 * Class DeviceCollection
 *
 * @package UCRM\REST\Endpoints\Collections
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
final class DeviceCollection extends Collection
{
    /**
     * @param Collectible[]|null $elements
     * @throws \Exception
     */
    public function __construct(?array $elements = [])
    {
        parent::__construct(Device::class, $elements);
    }
}