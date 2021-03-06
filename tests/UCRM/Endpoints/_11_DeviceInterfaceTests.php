<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints;

use MVQN\REST\RestClient;

require_once __DIR__ . "/TestFunctions.php";

class _11_DeviceInterfaceTests extends \PHPUnit\Framework\TestCase
{
    // =================================================================================================================
    // INITIALIZATION
    // -----------------------------------------------------------------------------------------------------------------

    /** @var string Location of the .env file for development. */
    protected const DOTENV_PATH = __DIR__ . "/../../rest/";

    protected function setUp()
    {
        // Load ENV variables from a file during development.
        if(file_exists(self::DOTENV_PATH))
        {
            $dotenv = new \Dotenv\Dotenv(self::DOTENV_PATH);
            $dotenv->load();
        }

        //RestClient::cacheDir(__DIR__);

        RestClient::setBaseUrl(getenv("REST_URL"));
        RestClient::setHeaders([
            "Content-Type: application/json",
            "X-Auth-App-Key: ".getenv("REST_KEY")
        ]);
    }

    // =================================================================================================================
    // TESTS
    // -----------------------------------------------------------------------------------------------------------------

    public function testAllGetters()
    {
        $deviceInterface = DeviceInterface::getById(1);

        $test = TestFunctions::testAllGetters($deviceInterface);
        $this->assertTrue($test);
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function testGet()
    {
        $device = Device::getById(1);

        $deviceInterface = DeviceInterface::get("", ["deviceId" => $device->getId()]);
        $this->assertNotNull($deviceInterface);

        echo ">>> DeviceInterface::get('', [ 'deviceId' => \$device->getId() ])\n";
        echo $deviceInterface."\n";
        echo "\n";
    }

    public function testGetById()
    {
        /** @var DeviceInterface $deviceInterface */
        $deviceInterface = DeviceInterface::getById(1);
        $this->assertEquals(1, $deviceInterface->getId());

        echo ">>> DeviceInterface::getById(1)\n";
        echo $deviceInterface."\n";
        echo "\n";
    }

}
