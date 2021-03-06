<?php
declare(strict_types=1);

namespace MVQN\REST\UCRM\Endpoints;

use MVQN\REST\RestClient;
use MVQN\REST\UCRM\Endpoints\Lookups\TicketActivityComment;

require_once __DIR__ . "/TestFunctions.php";

class _32_TicketTests extends \PHPUnit\Framework\TestCase
{

    // =================================================================================================================
    // INITIALIZATION
    // -----------------------------------------------------------------------------------------------------------------

    /** @var string Location of the .env file for development. */
    protected const DOTENV_PATH = __DIR__ . "/../../tests/";

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
    // GETTERS & SETTERS
    // -----------------------------------------------------------------------------------------------------------------

    public function testAllGetters()
    {
        /** @var Ticket $first */
        $first = Ticket::getById(1);

        $test = TestFunctions::testAllGetters($first);
        $this->assertTrue($test);
    }

    // =================================================================================================================
    // CREATE
    // -----------------------------------------------------------------------------------------------------------------

    public function testInsert()
    {
        $name = "Ticket".rand(1, 9);

        $comment = (new TicketActivityComment())
            ->setBody("This is a test body!");

        $activity = (new TicketActivity())
            ->setComment($comment);

        $ticket = (new Ticket())
            ->setSubject($name)
            ->setClientId(1)
            ->addActivity($activity);

        /*
        if($ticket->validate("post", $missing, $ignored))
        {
            echo "MISSING: ";
            print_r($missing);
            echo "\n";

            echo "IGNORED: ";
            print_r($ignored);
            echo "\n";
        }
        */

        /** @var TicketActivity $activity */
        $activity = $ticket->getActivity()->first();
        $comment = $activity->getComment();

        /** @var Ticket $inserted */
        $inserted = $ticket->insert();
        //$this->assertEquals($name, $inserted->getName());

        echo $inserted."\n";
    }

    // =================================================================================================================
    // READ
    // -----------------------------------------------------------------------------------------------------------------

    public function testGet()
    {
        $tickets = Ticket::get();
        $this->assertNotNull($tickets);

        echo ">>> Ticket::get()\n";
        echo $tickets."\n";
        echo "\n";
    }

    // -----------------------------------------------------------------------------------------------------------------

    public function testGetById()
    {
        /** @var Ticket $first */
        //$first = Ticket::get()->first();
        //$id = $first->getId();

        /** @var Ticket $ticket */
        $ticket = Ticket::getById(1);
        //$this->assertEquals($id, $ticket->getId());

        echo ">>> Ticket::getById(1)\n";
        echo $ticket."\n";
        echo "\n";



    }

    // =================================================================================================================
    // UPDATE
    // -----------------------------------------------------------------------------------------------------------------

    // NO PATCH ENDPOINT

    // =================================================================================================================
    // DELETE
    // -----------------------------------------------------------------------------------------------------------------

    // NO DELETE ENDPOINT



    // =================================================================================================================
    // OTHER TESTS
    // -----------------------------------------------------------------------------------------------------------------

    // ...
}
