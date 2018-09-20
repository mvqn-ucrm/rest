<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;


// Collections
use MVQN\REST\UCRM\Endpoints\Collections\StateCollection;

// Endpoints
use MVQN\REST\UCRM\Endpoints\Country;
use MVQN\REST\UCRM\Endpoints\State;

/**
 * Trait CountryHelper
 *
 * @package UCRM\REST\Endpoints\Helpers
 * @author Ryan Spaeth <rspaeth@mvqn.net>
 */
trait CountryHelper
{
    // =================================================================================================================
    // OBJECT METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return StateCollection
     * @throws AnnotationReaderException
     * @throws ArraysException
     * @throws CollectionException
     * @throws EndpointException
     * @throws PatternsException
     * @throws RestClientException
     * @throws \ReflectionException
     */
    public function getStates(): StateCollection
    {
        if($this->id === null)
            throw new EndpointException("Country->getStates() cannot be called when the Country ID is not set!");

        return new StateCollection(State::get("/countries/".$this->id."/states")->elements());
    }

    // =================================================================================================================
    // CREATE METHODS
    // -----------------------------------------------------------------------------------------------------------------

    // =================================================================================================================
    // READ METHODS
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @param string $name
     * @return Country|null
     * @throws AnnotationReaderException
     * @throws ArraysException
     * @throws CollectionException
     * @throws EndpointException
     * @throws PatternsException
     * @throws RestClientException
     * @throws \ReflectionException
     */
    public static function getByName(string $name): ?Country
    {
        $countries = Country::get();

        /** @var Country $country */
        $country = $countries->where("name", $name)->first();
        return $country;
    }

    /**
     * @param string $code
     * @return Country|null
     * @throws AnnotationReaderException
     * @throws ArraysException
     * @throws CollectionException
     * @throws EndpointException
     * @throws PatternsException
     * @throws RestClientException
     * @throws \ReflectionException
     */
    public static function getByCode(string $code): ?Country
    {
        $countries = Country::get();

        /** @var Country $country */
        $country = $countries->where("code", $code)->first(); // UNIQUE?
        return $country;
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