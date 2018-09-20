<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

// Core
use MVQN\Annotations\AnnotationReaderException;

// Exceptions
use MVQN\REST\RestObjectException;

// Lookups
use MVQN\REST\UCRM\Endpoints\Lookups\PaymentCover;

// Endpoints
use MVQN\REST\UCRM\Endpoints\Refund;

/**
 * Trait RefundHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
trait RefundHelper
{
    use Common\ClientHelpers;
    use Common\CurrencyHelpers;

    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param PaymentCover $paymentCover
     * @return Refund
     * @throws AnnotationReaderException
     * @throws RestObjectException
     * @throws \ReflectionException
     */
    public function addPaymentCover(PaymentCover $paymentCover): Refund
    {
        $this->paymentCovers[] = $paymentCover->toArray();

        /** @var Refund $this */
        return $this;
    }

    // =================================================================================================================
    // CREATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // UPDATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // DELETE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // EXTRA FUNCTIONS
    // -----------------------------------------------------------------------------------------------------------------

}