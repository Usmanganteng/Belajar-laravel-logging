<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        log::info("Hello info");
        log::warning("Hello warning");
        log::error("Hello Error");
        log::critical("Hello critical");


        self::assertTrue(true);
    }

    public function testContext()
    {
        log::info("Hello Info", ["user" => "Aldizar"]);

        self::assertTrue(true);
    }

    public function testWithContext()
    {
        log::withContext(["user" => "Aldizar"]);

        log::info("Hello Info");
        log::info("Hello Info");
        log::info("Hello Info");

        self::assertTrue(true);
    }

    public function testChannel()
    {
        $slackLogger = Log::channel("slack");
        $slackLogger->error("Hello slack"); // send to slack channel

        Log::info("Hello Laravel"); //mengirim ke default channel
        self::assertTrue(true);
    }

    public function testFileHandler()
    {
        $fileLogger = Log::channel("file");
        
        $fileLogger->info("Hello info");
        $fileLogger->warning("Hello warning");
        $fileLogger->error("Hello Error");
        $fileLogger->critical("Hello critical");

        self::assertTrue(true)
;    }
}
