<?php

namespace HnhDigital\LinodeApi;

/*
 * This file is part of the PHP Linode API.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use HnhDigital\LinodeApi\Api;

/**
 * This is the Types class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/types
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Types extends Api
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/types';

    /**
     * Endpoint placeholders.
     *
     * @var array
     */
    protected $endpoint_placeholders = [];


    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($load = true)
    {
        $this->endpoint_placeholders = [];
    }

    /**
     * Returns a list of types for a given Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/types#GET
     *
     * @return array
     */
    public function all()
    {
        return $this->call('get', '');
    }

}
