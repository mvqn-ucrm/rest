<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Lookups;

use MVQN\REST\Annotations\PostAnnotation as Post;
use MVQN\REST\Annotations\PatchAnnotation as Patch;

use MVQN\Collections\Collection;

/**
 * Class ClientContact
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 *
 * @method int|null getClientId()
 * @method string|null getEmail()
 * @method ClientContact setEmail(string $email)
 * @method string|null getPhone()
 * @method ClientContact setPhone(string $phone)
 * @method string|null getName()
 * @method ClientContact setName(string $name)
 * @method bool|null getIsBilling()
 * @method ClientContact setIsBilling(bool $billing)
 * @method bool|null getIsContact()
 * @method ClientContact setIsContact(bool $contact)
 * @see ClientContact::getTypes()
 * @see ClientContact::setTypes()
 *
 */
final class ClientContact extends Lookup
{
    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $email;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $phone;

    /**
     * @var string
     * @Post
     * @Patch
     */
    protected $name;

    /**
     * @var bool
     * @Post
     * @Patch
     */
    protected $isBilling;

    /**
     * @var bool
     * @Post
     * @Patch
     */
    protected $isContact;

    /**
     * @var ClientContactType[]
     * @Post
     * @Patch
     */
    protected $types;

    /**
     * @return Collection
     * @throws \Exception
     */
    public function getTypes(): Collection
    {
        $types = new Collection(ClientContactType::class, $this->types);
        return $types;
    }

    /**
     * @param Collection $types
     * @return ClientContact
     */
    public function setTypes(Collection $types): ClientContact
    {
        $this->types = $types->elements();
        return $this;
    }

}
