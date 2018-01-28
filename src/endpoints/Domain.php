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
 * This is the Domain class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/domains/$id
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Domain extends Api
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'domains/%s';

    /**
     * Endpoint placeholders.
     *
     * @var array
     */
    protected $endpoint_placeholders = [];

    /**
     * linode_id.
     *
     * @var integer
     */
    protected $linode_id;
    /**
     * domain_id.
     *
     * @var integer
     */
    protected $domain_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id, $domain_id, $load = true)
    {
        $this->linode_id = $linode_id;
        $this->domain_id = $domain_id;
        $this->endpoint_placeholders = [$linode_id, $domain_id];
    }

    /**
     * Returns information for the Domain identified by :id.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->call('get', '');
    }

    /**
     * Clones the provided Domain into a new Domain. You must provide a new domain for the cloned domain as Domains must be unique.
     *
     * @param string $domain The Domain name for the new Domain.
     *
     * 
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id
     *
     * @return void
     */
    public function clone($optional)
    {
        return $this->call('put', "/clone", $optional);
    }

    /**
     * Modifies a given Domain.
     *
     * @param array $optional 
     *      - [domain] (string) The name of the domain.
     *      - [description] (string) A description to keep track of this Domain.
     *      - [display_group] (string) A display group to keep track of this Domain.
     *      - [status=active] (string) The status of the Domain. Can be "disabled", "active", or "edit_mode".
     *      - [soa_email] (string) Start of Authority (SOA) contact email.
     *      - [refresh_sec] (integer) Time interval before the Domain should be refreshed, in seconds.
     *      - [retry_sec] (integer) Time interval that should elapse before a failed refresh should be retried, in seconds.
     *      - [expire_sec] (integer) Time value that specifies the upper limit on the time interval that can elapse before the Domain is no longer authoritative, in seconds.
     *      - [ttl_sec] (integer) Time interval that the resource record may be cached before it should be discarded, in seconds.
     *      - [master_ips] (array) An array of IP addresses for this Domain.
     *      - [axfr_ips] (array) An array of IP addresses allowed to AXFR the entire Domain.
     * 
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id#PUT
     *
     * @return void
     */
    public function update($optional)
    {
        return $this->call('put', "", $optional);
    }

    /**
     * Deletes the Domain. This action cannot be undone.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id#DELETE
     *
     * @return void
     */
    public function delete()
    {
        return $this->call('delete', "");
    }

}
