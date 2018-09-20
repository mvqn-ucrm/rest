<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

// Core
use MVQN\Annotations\AnnotationReaderException;
use MVQN\Collections\CollectionException;
use MVQN\Common\ArraysException;
use MVQN\Common\PatternsException;

// Exceptions
use MVQN\REST\RestClientException;

// Collections
use MVQN\REST\UCRM\Endpoints\Collections\ServiceDeviceCollection;

// Endpoints
use MVQN\REST\UCRM\Endpoints\DeviceInterface;
use MVQN\REST\UCRM\Endpoints\EndpointException;
use MVQN\REST\UCRM\Endpoints\Service;
use MVQN\REST\UCRM\Endpoints\ServiceDevice;
use MVQN\REST\UCRM\Endpoints\Vendor;

/**
 * Trait ServiceDeviceHelper
 * @package UCRM\REST\Endpoints\Helpers
 */
trait ServiceDeviceHelper
{
    use Common\ServiceHelpers;
    use Common\VendorHelpers;

    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // CREATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param Service $service
     * @param DeviceInterface $deviceInterface
     * @param Vendor $vendor
     * @param string $ip
     * @return ServiceDevice
     */
    public static function create(Service $service, DeviceInterface $deviceInterface, Vendor $vendor, string $ip)
    {
        $serviceDevice = (new ServiceDevice())
            ->setServiceId($service->getId())
            // REQUIRED
            ->setInterfaceId($deviceInterface->getId())
            ->setSendPingNotifications(false)
            ->setCreatePingStatistics(false)
            ->setCreateSignalStatistics(false)
            ->setQosEnabled(ServiceDevice::QOS_ENABLED_NO)
            ->setVendorId($vendor->getId())
            ->setIpRange([$ip]);

        return $serviceDevice;
    }

    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param Service $service
     * @return ServiceDeviceCollection
     *
     * @throws AnnotationReaderException
     * @throws ArraysException
     * @throws CollectionException
     * @throws EndpointException
     * @throws PatternsException
     * @throws RestClientException
     * @throws \ReflectionException
     */
    public static function getByService(Service $service): ServiceDeviceCollection
    {
        $serviceDevices = ServiceDevice::get("", [ "serviceId" => $service->getId() ]);

        return new ServiceDeviceCollection($serviceDevices->elements());
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