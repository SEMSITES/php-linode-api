<?php

namespace HnhDigital\LinodeApi\Managed;

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
 * This is the Service class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Managed-Services
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Service extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'managed/services/%s';
    /**
     * Service Id.
     *
     * @var 
     */
    protected $service_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($service_id)
    {
        $this->service_id = $service_id;
        parent::__construct($service_id);
    }

    /**
     * Returns information about a single Managed Service on your Account.
     *
     * @link https://developers.linode.com/api/v4#operation/getManagedService
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Updates information about a Managed Service.
     *
     * @param int $service_id The ID of the Managed Service to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updateManagedService
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'service_id' => $service_id,
        ]]);
    }

    /**
     * Temporarily disables monitoring of a Managed Service.
     *
     * @param int $service_id The ID of the Managed Service to disable.
     *
     * @link https://developers.linode.com/api/v4#operation/disableManagedService
     *
     * @return mixed
     */
    public function disable()
    {
        return $this->apiCall('post', '/disable', ['json' => [
            'service_id' => $service_id,
        ]]);
    }

    /**
     * Enables monitoring of a Managed Service.
     *
     * @param int $service_id The ID of the Managed Service to enable.
     *
     * @link https://developers.linode.com/api/v4#operation/enableManagedService
     *
     * @return mixed
     */
    public function enable()
    {
        return $this->apiCall('post', '/enable', ['json' => [
            'service_id' => $service_id,
        ]]);
    }

    /**
     * Deletes a Managed Service.  This service will no longer be monitored by Linode Managed.
     *
     * @param int $service_id The ID of the Managed Service to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteManagedService
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
