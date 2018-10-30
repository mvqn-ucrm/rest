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
use MVQN\REST\UCRM\Endpoints\Lookups\TicketActivityComment;

//use MVQN\REST\UCRM\Endpoints\Helpers\PaymentHelper;
//use MVQN\REST\UCRM\Endpoints\Lookups\PaymentCover;

/**
 * Class Ticket
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 *
 * @Endpoint { "get": "/ticketing/tickets", "getById": "/ticketing/tickets/:id" }
 * @Endpoint { "post": "/ticketing/tickets" }
 * @Endpoint { "patch": "/ticketing/tickets/:id" }
 * @Endpoint { "delete": "/ticketing/tickets/:id" }
 *
 * @method string|null getSubject()
 * @method Ticket setSubject(string $subject)
 * @method int|null getClientId()
 * @method Ticket setClientId(int $clientId)
 * @method string|null getEmailFromAddress()
 * @method Ticket setEmailFromAddress(string $email)
 * @method string|null getEmailFromName()
 * @method Ticket setEmailFromName(string $name)
 * @method int|null getAssignedGroupId()
 * @method Ticket setAssignedGroupId(int $groupId)
 * @method int|null getAssignedUserId()
 * @method Ticket setAssignedUserId(int $userId)
 * @method string|null getCreatedAt()
 * @see    Ticket setCreatedAt(\DateTimeImmutable $date)
 * @method int|null getStatus()
 * @method Ticket setStatus(int $status)
 * @method bool|null getPublic()
 * @method Ticket setPublic(bool $public)
 * @method int[]|null getAssignedJobIds()
 * @method Ticket setAssignedJobIds(int[] $subject)
 * @method    string|null getLastActivity()
 * @see    Ticket setLastActivity(\DateTimeImmutable $date)
 * @method    string|null getLastCommentAt()
 * @see    Ticket setLastCommentAt(\DateTimeImmutable $date)
 * @method    string|null getIsLastActivityByClient()
 * @see    Ticket setIsLastActivityByClient(\DateTimeImmutable $date)
 * @see    Collection|null getActivity()
 */
final class Ticket extends EndpointObject
{
    //use PaymentHelper;

    // =================================================================================================================
    // ENUMS
    // -----------------------------------------------------------------------------------------------------------------

    public const STATUS_NEW     = 0;
    public const STATUS_OPEN    = 1;
    public const STATUS_PENDING = 2;
    public const STATUS_SOLVED  = 3;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     * @PostRequired
     * @PatchRequired
     */
    protected $subject;

    /**
     * @var int
     * @PostRequired
     * @PatchRequired
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $emailFromAddress;

    /**
     * @var string
     */
    protected $emailFromName;

    /**
     * @var int
     */
    protected $assignedGroupId;

    /**
     * @var int
     */
    protected $assignedUserId;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @param \DateTimeImmutable $value
     * @return Ticket
     */
    public function setCreatedAt(\DateTimeImmutable $value): Ticket
    {
        $this->createdAt = $value->format("c");
        return $this;
    }

    /**
     * @var int
     */
    protected $status;

    /**
     * @var bool
     */
    protected $public;

    /**
     * @var array[]
     */
    protected $assignedJobIds;

    /**
     * @var string
     */
    protected $lastActivity;

    /**
     * @param \DateTimeImmutable $value
     * @return Ticket
     */
    public function setLastActivity(\DateTimeImmutable $value): Ticket
    {
        $this->lastActivity = $value->format("c");
        return $this;
    }

    /**
     * @var string
     */
    protected $lastCommentAt;

    /**
     * @param \DateTimeImmutable $value
     * @return Ticket
     */
    public function setLastCommentAt(\DateTimeImmutable $value): Ticket
    {
        $this->lastCommentAt = $value->format("c");
        return $this;
    }

    /**
     * @var string
     */
    protected $isLastActivityByClient;


    /**
     * @param \DateTimeImmutable $value
     * @return Ticket
     */
    public function setIsLastActivityByClient(\DateTimeImmutable $value): Ticket
    {
        $this->isLastActivityByClient = $value->format("c");
        return $this;
    }

    /**
     * @var TicketActivity[]
     * @PostRequired
     * @PatchRequired
     */
    protected $activity;

    /**
     * @return Collection
     * @throws \Exception
     */
    public function getActivity(): Collection
    {
        return new Collection(TicketActivity::class, $this->activity);
    }

    public function setActivity(Collection $activities): Ticket
    {
        if($activities->type() !== TicketActivity::class)
            throw new \Exception("A collection of TicketActivity was expected, received '{$activities->type()}'!");

        $this->activity = $activities->elements();

        return $this;
    }

    public function addActivity(TicketActivity $activity): Ticket
    {
        $this->activity[] = $activity;
        return $this;
    }




    public function addActivityComment(string $body, array $attachments = []): Ticket
    {
        /*
        $activity = (new TicketActivity())
            ->setType(TicketActivity::TYPE_COMMENT)
            ->setComment((new TicketActivityComment())
                ->setBody($body)
                ->setAttachments($attachments));
        */

        return $this;
    }



}
