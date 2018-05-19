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
 * This is the Credential class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Managed-Credentials
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Credential extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'managed/credentials/%s';
    /**
     * Credential Id.
     *
     * @var 
     */
    protected $credential_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($credential_id)
    {
        $this->credential_id = $credential_id;
        parent::__construct($credential_id);
    }

    /**
     * Returns a single Managed Credential.
     *
     * @link https://developers.linode.com/api/v4#operation/getManagedCredential
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Updates information about a Managed Credential.
     *
     * @param int $credential_id The ID of the Credential to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updateManagedCredential
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'credential_id' => $credential_id,
        ]]);
    }

    /**
     * Deletes a Managed Credential.  Linode special forces will no longer have access to this Credential when attempting to
     * resolve issues.
     *
     * @param int $credential_id The ID of the Credential to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteManagedCredential
     *
     * @return mixed
     */
    public function delete()
    {
        return $this->apiCall('post', '/revoke', ['json' => [
            'credential_id' => $credential_id,
        ]]);
    }
}
