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
 * This is the Instances class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/instances
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Instances extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/instances';

    /**
     * Hypervisor.
     *
     * @var array
     */
    public $hypervisor = [
        'kvm' => 'KVM',
        'xen' => 'XEN',
    ];

    /**
     * Status.
     *
     * @var array
     */
    public $status = [
        'offline'       => 'The Linode is powered off.',
        'booting'       => 'The Linode is currently booting up.',
        'running'       => 'The Linode is currently running.',
        'shutting_down' => 'The Linode is currently shutting down.',
        'rebooting'     => 'The Linode is rebooting.',
        'provisioning'  => 'The Linode is being created.',
        'deleting'      => 'The Linode is being deleted.',
        'migrating'     => 'The Linode is being migrated to a new host/region.',
    ];

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
     * Returns a list of Linodes.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Instance', 'parameters' => ['id']]);
    }

    /**
     * Creates a new Linode.
     *
     * @param string $region   A region ID to provision this Linode in.
     * @param string $type     A Linode type ID to use for this Linode.
     * @param array  $optional
     *                         - [label='linode'] (string) The label to assign this Linode. Defaults to "linode".
     *                         - [group='empty'] (string) The group to assign this Linode. Defaults to "empty".
     *                         - [configs=[]] (array) A list of config ID's to include in the clone process. All configs will be cloned from the source Linode if not provided.
     *                         - [root_pass] (string) The root password to use when sourcing this Linode from a distribution.
     *                         - [authorized_keys=[]] (array) An array of public SSH keys to be installed into the distribution's default user's `authorized_keys` file when rebuilding a Linode.
     *                         - [stackscript_id] (int) The stackscript ID to deploy with this disk. Must provide a distribution. Distribution must be one that the stackscript can be deployed to.
     *                         - [stackscript_data] (json) UDF (user-defined fields) for this stackscript. Defaults to "{}". Must match UDFs required by stackscript.
     *                         - [image] (string) The gold-master image to use for the newly created Linode. May not be included if 'backup_id' is sent. Official images start with "linode/", while your own images start with "private/"
     *                         - [backups_enabled=false] (boolean) Subscribes this Linode with the Backup service. (Additional charges apply.) Defaults to "false".
     *                         - [booted=true] (boolean) Whether the instance should be booted upon completion of creation. This defaults to true if created with a distribution.
     *
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances#POST
     *
     * @return bool
     */
    public function create($region, $type, $optional = [])
    {
        return $this->call('post', '', array_merge([
            'region' => $region,
            'type' => $type,
        ], $optional));
    }
}
