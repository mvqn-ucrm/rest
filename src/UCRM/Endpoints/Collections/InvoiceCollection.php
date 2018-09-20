<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Collections;

use MVQN\Collections\Collectible;
use MVQN\Collections\Collection;

use MVQN\REST\UCRM\Endpoints\Invoice;

/**
 * Class InvoiceCollection
 *
 * @package UCRM\REST\Endpoints\Collections
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
final class InvoiceCollection extends Collection
{
    /**
     * @param Collectible[]|null $elements
     * @throws \Exception
     */
    public function __construct(?array $elements = [])
    {
        parent::__construct(Invoice::class, $elements);
    }
}