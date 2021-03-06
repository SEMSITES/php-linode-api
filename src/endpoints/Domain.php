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
 * This is the Domain class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Domains
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Domain extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'domains/%s';

    /**
     * Domain Id.
     *
     * @var int
     */
    protected $domain_id;

    /**
     * This model is fillable.
     *
     * @var bool
     */
    protected $fillable = true;

    /**
     * This model's method that provides the data to fill it.
     *
     * @var string
     */
    protected $fill_method = 'get';

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($domain_id, $fill = [])
    {
        $this->domain_id = $domain_id;
        parent::__construct($domain_id, $fill);
    }

    /**
     * This is a single Domain that you have registered in Linode's DNS Manager. Linode is not a registrar, and in order for
     * this Domain record to work you must own the domain and point your registrar at Linode's nameservers.
     *
     * @link https://developers.linode.com/api/v4#operation/getDomain
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '', [], ['auto-fill' => true]);
    }

    /**
     * Returns a paginated list of Records configured on a Domain in Linode's
     * DNS Manager.
     *
     * @link https://developers.linode.com/api/v4#operation/getDomainRecords
     *
     * @return array
     */
    public function getRecords()
    {
        return $this->apiSearch($this->endpoint.'/records', ['class' => 'Domain\Record', 'parameters' => ['id']]);
    }

    /**
     * Update information about a Domain in Linode's DNS Manager.
     *
     * @param int $domain_id The ID of the Domain to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updateDomain
     *
     * @return void
     */
    public function update($optional = [])
    {
        return $this->apiCall('put', '', ['json' => $this->getDirty($optional)]);
    }

    /**
     * Adds a new Domain Record to the zonefile this Domain represents.
     *
     * @param int $domain_id The ID of the Domain we are accessing Records for.
     *
     * @link https://developers.linode.com/api/v4#operation/createDomainRecord
     *
     * @return mixed
     */
    public function createRecord($optional = [])
    {
        return $this->apiCall('post', '/records', ['json' => array_merge([
            'domain_id' => $domain_id,
        ], $optional)]);
    }

    /**
     * Deletes a Domain from Linode's DNS Manager. The Domain will be removed from Linode's nameservers shortly after this
     * operation completes. This also deletes all associated Domain Records.
     *
     * @param int $domain_id The ID of the Domain to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteDomain
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
