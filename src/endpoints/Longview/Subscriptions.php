<?php

namespace HnhDigital\LinodeApi\Longview;

/*
 * This file is part of the PHP Linode API.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use HnhDigital\LinodeApi\Foundation\Base;

/**
 * This is the Subscriptions class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/longview/subscriptions
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Subscriptions extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'longview/subscriptions';

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * View a list of available Longview subscription levels.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/longview/subscriptions#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiCall('get', '');
    }
}
