<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

// Collections
use MVQN\REST\UCRM\Endpoints\Collections\DeviceInterfaceCollection;

// Endpoints
use MVQN\REST\UCRM\Endpoints\Device;
use MVQN\REST\UCRM\Endpoints\DeviceInterface;

/**
 * Trait DeviceInterfaceHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
trait DeviceInterfaceHelper
{
    use Common\DeviceHelpers;

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
     * @param Device $device
     * @return DeviceInterfaceCollection
     * @throws AnnotationReaderException
     * @throws ArraysException
     * @throws CollectionException
     * @throws EndpointException
     * @throws PatternsException
     * @throws RestClientException
     * @throws \ReflectionException
     */
    public function getByDevice(Device $device): DeviceInterfaceCollection
    {
        $devicesInterfaces = DeviceInterface::get("", [ "deviceId" => $device->getId() ]);

        return new DeviceInterfaceCollection($devicesInterfaces->elements());
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