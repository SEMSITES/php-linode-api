<?php

namespace HnhDigital\LinodeApi\Profile;

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
 * This is the App class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Profile-Apps
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class App extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'profile/apps/%s';
    /**
     * App Id.
     *
     * @var 
     */
    protected $app_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($app_id)
    {
        $this->app_id = $app_id;
        parent::__construct($app_id);
    }

    /**
     * Returns information about a single app you've authorized to access your Account.
     *
     * @link https://developers.linode.com/api/v4#operation/getProfileApp
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Expires this app token. This token may no longer be used to access your Account.
     *
     * @param int $app_id The authorized app ID to manage.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteProfileApp
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
