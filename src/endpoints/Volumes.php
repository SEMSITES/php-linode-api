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
 * This is the Volumes class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Volumes
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Volumes extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'volumes';

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
     * Returns a paginated list of Volumes you have permission to view.
     *
     * @link https://developers.linode.com/api/v4#operation/getVolumes
     *
     * @return array
     */
    public function get()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Volume', 'parameters' => ['id']]);
    }

    /**
     * Creates a Volume on your Account. In order for this to complete successfully, your User must have the `add_volumes`
     * grant. Creating a new Volume will start accruing additional charges on your account.
     * Volume service may not be available in all Regions. See [/regions](/#operation/getRegions) for a list of available
     * Regions you deploy your Volume in.
     *
     * @param string $label    The Volume's label is for display purposes only.
     * @param array  $optional
     *                         - [id=null] (integer) The unique ID of this Volume.
     *                         - [filesystem_path=null] (string) The full filesystem path for the Volume based on the
     *                         Volume's label. Path is
     *                         /dev/disk/by-id/scsi-0Linode_Volume_ + Volume label.
     *                         - [status=null] (string) Can be one of `creating`, `active`, `resizing`,
     *                         `deleting`, `deleted`, and `contact_support`: 
     *                         `creating` - the Volume is being created and is not yet
     *                         available for use.  `active` - the Volume is online and
     *                         available for use.  `resizing` - the Volume is in the
     *                         process of upgrading its current capacity.  `deleting`
     *                         - the Volume is being deleted and is unavailable for
     *                         use.  `deleted` - the Volume has been deleted. 
     *                         `contact_support` - there is a problem with your
     *                         Volume. Please [open a Support
     *                         Ticket](/#operation/createTicket) to resolve the issue.
     *                         - [size=null] (integer) The Volume's size, in GiB. Minimum size is 10GiB,
     *                         maximum size is 10240GiB.
     *                         - [region=null] () 
     *                         - [linode_id=null] (integer) If a Volume is attached to a specific Linode, the ID of
     *                         that Linode will be displayed here.
     *                         - [created=null] (string) When this Volume was created.
     *                         - [updated=null] (string) When this Volume was last updated.
     *                         - [config_id=null] (integer) When creating a Volume attached to a Linode, the ID of
     *                         the Linode Config to include the new Volume in. This
     *                         Config must belong to the Linode referenced by
     *                         `linode_id`. Must _not_ be provided if `linode_id` is
     *                         not sent.
     *
     * @link https://developers.linode.com/api/v4#operation/createVolume
     *
     * @return mixed
     */
    public function create($label, $optional = [])
    {
        $result = $this->apiCall('post', '', ['json' => array_merge([
            'label' => $label,
        ], $optional)]);

        return $this->factory($result, ['class' => 'Volume', 'parameters' => ['id']]);
    }
}
