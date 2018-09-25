<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Lookups;

use MVQN\Collections\Collection;

/**
 * Class TicketActivityComment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 *
 * @method string|null getBody()
 * @method TicketActivityComment setBody(string $body)
 * @see    TicketActivityComment::getAttachments()
 * @see    TicketActivityComment::setAttachments()
 */
final class TicketActivityComment extends Lookup
{

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $body;

    /**
     * @var TicketAttachment[]
     */
    protected $attachments;

    /**
     * @return Collection
     * @throws \Exception
     */
    public function getAttachments(): Collection
    {
        return new Collection(TicketAttachment::class, $this->attachments);
    }

    /**
     * @param Collection $value
     * @return TicketActivityComment
     */
    public function setAttachments(Collection $value): TicketActivityComment
    {
        $this->attachments = $value->elements();
        return $this;
    }

}
