<?php

namespace App\JsonApi\V1;

use LaravelJsonApi\Core\Server\Server as BaseServer;

use App\JsonApi\V1\Countries\CountrySchema;
use App\JsonApi\V1\States\StateSchema;
use App\JsonApi\V1\Cities\CitySchema;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        // no-op
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            // @TODO

            // Countries\CountrySchema::class,
            // States\StateSchema::class,
            // Cities\CitySchema::class,

            CountrySchema::class,
            StateSchema::class,
            CitySchema::class,
        ];
    }
}
