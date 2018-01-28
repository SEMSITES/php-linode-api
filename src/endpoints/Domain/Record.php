<?php

namespace HnhDigital\LinodeApi\Domain;

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
 * This is the Record class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records/$id
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Record extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'domains/%s/records/%s';

    /**
     * domain_id.
     *
     * @var int
     */
    protected $domain_id;
    /**
     * record_id.
     *
     * @var int
     */
    protected $record_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($domain_id, $record_id)
    {
        $this->domain_id = $domain_id;
        $this->record_id = $record_id;

        parent::__construct($domain_id, $record_id);
    }

    /**
     * Returns information for the Domain Record identified by ":id".
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records/$id#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Modifies a given Domain Record.
     *
     * @param array $optional 
     *                         - [type] (string) Type of record. Can be one of "A", "AAAA", "NS", "MX", "CNAME", "TXT", "SRV", "PTR", or "CAA".
     *                         - [name] (string) The hostname or FQDN. When type=MX the subdomain to delegate to the Target MX server.
     *                         - [target] (string) When Type=MX the hostname. When Type=CNAME the target of the alias. When Type=TXT or CAA the value of the record. When Type=A or AAAA the token of '[remote_addr]' will be substituted with the IP address of the request.
     *                         - [priority] (int) Priority for MX and SRV records.
     *                         - [weight] (int) A relative weight for records with the same priority, higher value means more preferred.
     *                         - [port] (int) The TCP or UDP port on which the service is to be found.
     *                         - [service] (string) The service to append to an SRV record.
     *                         - [protocol] (string) The protocol to append to an SRV record.
     *                         - [tag] (string) The tag attribute for a CAA record. One of "issue", "issuewild", or "iodef". Ignored on other record types.
     *                         - [ttl] (integer) Time interval that the resource record may be cached before it should be discarded. In seconds. Leave as 0 to accept our default.
     * 
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records/$id#PUT
     *
     * @return void
     */
    public function update($optional)
    {
        return $this->call('put', "", $optional);
    }

    /**
     * Deletes the Domain Record. This action cannot be undone.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records/$id#DELETE
     *
     * @return void
     */
    public function delete()
    {
        return $this->call('delete', "");
    }

}
