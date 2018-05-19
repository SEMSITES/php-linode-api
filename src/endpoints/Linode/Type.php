<?php

namespace HnhDigital\LinodeApi\Linode;

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
 * This is the Type class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Linode-Types
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Type extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/types/%s';
    /**
     * Type Id.
     *
     * @var 
     */
    protected $type_id;
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($type_id)
    {
        $this->type_id = $type_id;
        parent::__construct($type_id);
    }

    /**
     * Returns information about a specific Linode Type, including pricing and specifications. This is used when
     * [creating](/#operation/createLinodeInstance) or [resizing](/#operation/resizeLinodeInstance) Linodes.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeType
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }
}
