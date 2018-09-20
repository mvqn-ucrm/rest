<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

use MVQN\REST\UCRM\Endpoints\{Endpoint,Client,Service};


trait ServiceHelper
{
    use Common\OrganizationHelpers;
    use Common\CountryHelpers;
    use Common\StateHelpers;
    use Common\InvoiceCountryHelpers;
    use Common\InvoiceStateHelpers;

    // =================================================================================================================
    // HELPER METHODS
    // -----------------------------------------------------------------------------------------------------------------


    public function create(): Service
    {
        /** @var Endpoint $data */
        $data = $this;

        /** @var Service $service */
        $service = Service::post($data, ["clientId" => $this->clientId]);

        return $service;
    }








    public function sendInvitationEmail(): Client
    {
        /** @var Client $client */
        $client = Client::patch($this->id, null, "/send-invitation");
        return $client;
    }

}