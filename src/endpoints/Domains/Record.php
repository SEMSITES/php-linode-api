<?php

namespace HnhDigital\LinodeApi\Domains;

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
 * @link https://developers.linode.com/api/v4#tag/Domains-Records
 *
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
     * Domain Id.
     *
     * @var int
     */
    protected $domain_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($domain_id)
    {
        $this->domain_id = $domain_id;
        parent::__construct($domain_id);
    }

    /**
     * View a single Record on this Domain.
     *
     * @link https://developers.linode.com/api/v4#operation/getDomainRecord
     *
     * @return array
     */
    public function get($record_id)
    {
        return $this->apiCall('get', '');
    }

    /**
     * Updates a single Record on this Domain.
     *
     * @param int $domain_id The ID of the Domain whose Record you are accessing.
     * @param int $record_id The ID of the Record you are accessing.
     *
     * @link https://developers.linode.com/api/v4#operation/updateDomainRecord
     *
     * @return void
     */
    public function update($record_id)
    {
        return $this->apiCall('put', '', ['json' => [
            'domain_id' => $domain_id,
            'record_id' => $record_id,
        ]]);
    }

    /**
     * Deletes a Record on this Domain.
     *
     * @param int $domain_id The ID of the Domain whose Record you are accessing.
     * @param int $record_id The ID of the Record you are accessing.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteDomainRecord
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}