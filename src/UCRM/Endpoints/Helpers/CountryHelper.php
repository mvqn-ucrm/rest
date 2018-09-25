<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints\Helpers;

use MVQN\Collections\Collection;
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
     * @return Collection
     * @throws \Exception
     */
    public function getStates(): Collection
    {
        if($this->id === null)
            throw new \Exception("Country->getStates() cannot be called when the Country ID is not set!");

        return State::get("/countries/".$this->id."/states");
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
     * @throws \Exception
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
     * @throws \Exception
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