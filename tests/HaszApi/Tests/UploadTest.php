<?php

namespace HaszApi\Tests;

use Silex\WebTestCase;

class UploadTest extends WebTestCase
{

    public function createApplication()
    {
        $app = require $this->getApplicationDirectory() . 'app.php';
        $app['debug'] = true;
        unset($app['exception_handler']);

        return $app;
    }

    public function testUploadResponseCode()
    {
        /** @var $client \Symfony\Component\HttpKernel\Client */
        $client = $this->createClient();
        $crawler = $client->request('POST', '/upload');
        $this->assertTrue($client->getResponse()->isOk());
    }

    protected function getApplicationDirectory()
    {
        return __DIR__ . '/../../../app/';
    }

}
