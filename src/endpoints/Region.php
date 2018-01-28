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
 * This is the Region class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/regions
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Region extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'regions/%s';

    /**
     * region_id.
     *
     * @var integer
     */
    protected $region_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($region_id, $fill = [])
    {
        $this->region_id = $region_id;
        $this->fillable = true;

        parent::__construct($region_id, $fill);
    }

    /**
     * Returns information about this region.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/regions/$id#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

}
