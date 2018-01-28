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
 * This is the Longview class.
 *
 * This file is automatically generated.
 *
 * @link 
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Longview extends Api
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = '';

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

}
