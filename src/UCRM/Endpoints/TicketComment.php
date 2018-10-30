<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints;

use MVQN\Collections\Collection;
use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\Annotations\EndpointAnnotation as Endpoint;
use MVQN\REST\Annotations\PostAnnotation as Post;
use MVQN\REST\Annotations\PostRequiredAnnotation as PostRequired;
use MVQN\REST\Annotations\PatchAnnotation as Patch;
use MVQN\REST\Annotations\PatchRequiredAnnotation as PatchRequired;

//use MVQN\REST\UCRM\Endpoints\Helpers\PaymentHelper;
//use MVQN\REST\UCRM\Endpoints\Lookups\PaymentCover;

/**
 * Class TicketComment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 *
 * @Endpoint { "get": "/ticketing/tickets/comments", "getById": "/ticketing/tickets/comments/:id" }
 * @Endpoint { "post": "/ticketing/tickets/comments" }
 *
 * @method int|null getUserId()
 * @method TicketComment setUserId(int $userId)
 * @method bool|null getPublic()
 * @method TicketComment setPublic(bool $isPublic)
 * @see    string|null getCreatedAt()
 * @see    TicketComment setCreatedAt(\DateTimeImmutable $date)
 * @method string|null getEmailFromAddress()
 * @method Ticket setEmailFromAddress(string $email)
 * @method string|null getEmailFromName()
 * @method Ticket setEmailFromName(string $name)
 * @method int|null getTicketId()
 * @method TicketComment setTicketId(int $ticketId)
 * @method string|null getBody()
 * @method TicketComment setBody(string $body)
 * @see    Collection|null getAttachments()
 */
final class TicketComment extends EndpointObject
{
    //use PaymentHelper;

    // =================================================================================================================
    // ENUMS
    // -----------------------------------------------------------------------------------------------------------------

    public const TYPE_COMMENT           = "comment";
    public const TYPE_ASSIGNMENT        = "assignment";
    public const TYPE_ASSIGNMENT_CLIENT = "assignment_client";
    public const TYPE_STATUS_CHANGE     = "status_change";

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var int
     * @Post
     */
    protected $userId;

    /**
     * @var bool
     * @PostRequired
     */
    protected $public;

    /**
     * @var string
     * @PostRequired
     */
    protected $createdAt;

    /**
     * @param \DateTime $value
     * @return TicketComment
     */
    public function setCreatedAt(\DateTime $value): TicketComment
    {
        $this->createdAt = $value->format("c");
        return $this;
    }

    /**
     * @var string
     * @Post
     */
    protected $emailFromAddress;

    /**
     * @var string
     * @Post
     */
    protected $emailFromName;

    /**
     * @var int
     * @PostRequired
     */
    protected $ticketId;

    /**
     * @var string
     * @PostRequired `$this->attachments === null || $this->attachments === []`
     */
    protected $body;

    /**
     * @var TicketCommentAttachment[]
     * @PostRequired `$this->body === null || $this->body === ""`
     */
    protected $attachments;

    /**
     * @return Collection
     * @throws \Exception
     */
    public function getAttachments(): Collection
    {
        return new Collection(TicketCommentAttachment::class, $this->attachments);
    }

}
