<?php

namespace HnhDigital\LinodeApi\Networking;

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
 * This is the Ip class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Networking-Ips
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Ip extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'networking/ips/%s';
    /**
     * Address.
     *
     * @var 
     */
    protected $address;
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($address)
    {
        $this->address = $address;
        parent::__construct($address);
    }

    /**
     * Returns information about a single IP Address on your Account.
     *
     * @link https://developers.linode.com/api/v4#operation/getIP
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Sets RDNS on an IP Address. Forward DNS must already be set up for reverse DNS to be applied. If you set the RDNS to
     * `null` for public IPv4 addresses, it will be reset to the default _members.linode.com_ RDNS value.
     *
     * @param string $address The address to operate on.
     *
     * @link https://developers.linode.com/api/v4#operation/updateIP
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'address' => $address,
        ]]);
    }
}
