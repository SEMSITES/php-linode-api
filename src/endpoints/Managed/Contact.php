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
 * This is the Contact class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Managed-Contacts
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Contact extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'managed/contacts/%s';
    /**
     * Contact Id.
     *
     * @var int
     */
    protected $contact_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($contact_id)
    {
        $this->contact_id = $contact_id;
        parent::__construct($contact_id);
    }

    /**
     * Returns a single Managed Contact.
     *
     * @link https://developers.linode.com/api/v4#operation/getManagedContact
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Updates information about a Managed Contact.
     *
     * @param int $contact_id The ID of the contact to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updateManagedContact
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'contact_id' => $contact_id,
        ]]);
    }

    /**
     * Deletes a Managed Contact.
     *
     * @param int $contact_id The ID of the contact to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteManagedContact
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}