<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints;

use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\Annotations\EndpointAnnotation as Endpoint;
use MVQN\REST\Annotations\PostAnnotation as Post;
use MVQN\REST\Annotations\PostRequiredAnnotation as PostRequired;
use MVQN\REST\Annotations\PatchAnnotation as Patch;
use MVQN\REST\Annotations\PatchRequiredAnnotation as PatchRequired;
use MVQN\REST\RestClient;
use MVQN\REST\UCRM\Endpoints\Lookups\TicketActivityCommentAttachment;

//use MVQN\REST\UCRM\Endpoints\Helpers\PaymentHelper;
//use MVQN\REST\UCRM\Endpoints\Lookups\PaymentCover;

/**
 * Class TicketCommentAttachment
 *
 * @package UCRM\REST\Endpoints
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 * @final
 */
final class TicketCommentAttachment extends EndpointObject
{
    //use PaymentHelper;

    // =================================================================================================================
    // PROPERTIES
    // -----------------------------------------------------------------------------------------------------------------

    public static function download(int $attachmentId)
    {
        return RestClient::download("/ticketing/tickets/comments/attachments/$attachmentId/file");
    }

}
