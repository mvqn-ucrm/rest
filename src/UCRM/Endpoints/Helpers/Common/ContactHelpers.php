<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers\Common;

use MVQN\Collections\Collection;
use MVQN\REST\UCRM\Endpoints\ClientContact;


/**
 * Trait ContactHelpers
 * @package UCRM\REST\Endpoints\Helpers\Common
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
trait ContactHelpers
{
    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param int $id
     * @return ClientContact|null
     * @throws \Exception
     */
    public function getContactById(int $id): ?ClientContact
    {
        /** @var ClientContact $contact */
        $contact = (new Collection(ClientContact::class, $this->{"contacts"}))->where("id", $id)->first();
        return $contact;
    }

    /**
     * @param ClientContact $contact
     * @return self Returns the appropriate Endpoint instance, for method chaining purposes.
     * @throws \Exception
     */
    public function addContact(ClientContact $contact): self
    {
        $this->{"contacts"}[] = $contact->toArray();

        /** @var self $this */
        return $this;
    }

    // TODO: Add delContact() abilities as they become available.

}