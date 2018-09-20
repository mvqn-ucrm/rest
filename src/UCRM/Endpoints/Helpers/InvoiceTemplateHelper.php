<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

// Core
use MVQN\Annotations\AnnotationReaderException;
use MVQN\Collections\CollectionException;
use MVQN\Common\ArraysException;
use MVQN\Common\PatternsException;

// Exceptions
use MVQN\REST\UCRM\Endpoints\EndpointException;
use MVQN\REST\RestClientException;

// Collections
use MVQN\REST\UCRM\Endpoints\Collections\InvoiceTemplateCollection;

// Endpoints
use MVQN\REST\UCRM\Endpoints\InvoiceTemplate;

/**
 * Trait InvoiceTemplateHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
trait InvoiceTemplateHelper
{

    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // CREATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param string $name
     * @return InvoiceTemplateCollection
     *
     * @throws AnnotationReaderException
     * @throws ArraysException
     * @throws CollectionException
     * @throws EndpointException
     * @throws PatternsException
     * @throws RestClientException
     * @throws \ReflectionException
     */
    public static function getByName(string $name): InvoiceTemplateCollection
    {
        $invoiceTemplates = InvoiceTemplate::get()->where("name", $name);

        return new InvoiceTemplateCollection($invoiceTemplates->elements());
    }

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