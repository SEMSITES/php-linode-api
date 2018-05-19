<?php

namespace HnhDigital\LinodeApi\Profile;

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
 * This is the Token class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Profile-Tokens
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Token extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'profile/tokens/%s';
    /**
     * Token Id.
     *
     * @var 
     */
    protected $token_id;
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($token_id)
    {
        $this->token_id = $token_id;
        parent::__construct($token_id);
    }

    /**
     * Returns a single Personal Access Token.
     *
     * @link https://developers.linode.com/api/v4#operation/getPersonalAccessToken
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Updates a Personal Access Token.
     *
     * @param integer $token_id The ID of the token to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updatePersonalAccessToken
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'token_id' => $token_id,
        ]]);
    }

    /**
     * Revokes a Personal Access Token. The token will be invalidated immediately, and requests using that token will fail with
     * a 401. It is possible to revoke access to the token making the request to revoke a token, but keep in mind that doing so
     * could lose you access to the api and require you to create a new token through some other means.
     *
     * @param integer $token_id The ID of the token to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deletePersonalAccessToken
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
