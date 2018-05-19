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

use HnhDigital\LinodeApi\Foundation\Base;

/**
 * This is the Domains class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Domains
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Domains extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'domains';
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
     * This is a collection of Domains that you have registered in Linode's DNS Manager.  Linode is not a registrar, and in
     * order for these to work you must own the domains and point your registrar at Linode's nameservers.
     *
     * @link https://developers.linode.com/api/v4#operation/getDomains
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Adds a new Domain to Linode's DNS Manager. Linode is not a registrar, and you must own the domain before adding it here.
     * Be sure to point your registrar to Linode's nameservers so that the records hosted here are used.
     *
     * @link https://developers.linode.com/api/v4#operation/createDomain
     *
     * @return mixed
     */
    public function create()
    {
        return $this->apiCall('post', '');
    }
}
