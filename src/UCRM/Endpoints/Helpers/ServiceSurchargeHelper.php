<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

use MVQN\Collections\Collection;
use MVQN\REST\Endpoints\EndpointObject;
use MVQN\REST\UCRM\Endpoints\Service;
use MVQN\REST\UCRM\Endpoints\ServiceSurcharge;

/**
 * Trait ServiceSurchargeHelper
 * @package UCRM\REST\Endpoints\Helpers
 */
trait ServiceSurchargeHelper
{
    use Common\ServiceHelpers;

    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return ServiceSurcharge
     * @throws \Exception
     */
    public function create(): ServiceSurcharge
    {
        /** @var EndpointObject $data */
        $data = $this;

        /** @var ServiceSurcharge $serviceSurcharge */
        $serviceSurcharge = ServiceSurcharge::post($data, ["serviceId" => $this->serviceId]);

        return $serviceSurcharge;
    }


    /**
     * @param Service $service
     * @return Collection
     * @throws \Exception
     */
    public static function getByService(Service $service): Collection
    {
        return ServiceSurcharge::get("", [ "serviceId" => $service->getId() ]);
    }


}