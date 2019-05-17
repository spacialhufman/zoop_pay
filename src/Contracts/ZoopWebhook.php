<?php

namespace Zoop\Contracts;

use Zoop\Lib\APIResource;

interface ZoopWebhook {

    /**
     * API Resource.
     *
     * @param $APIResource $APIResource
    */
    public function __construct(APIResource $APIResource);

    /**
     * Create a Webhook
     *
     * @param $post array
    */
    public function create($post);

    /**
     * Retrieve the details of a Webhooks by id
     *
     * @param $webhookID string
     */
    public function get($webhookID);

    /**
     * Returns a JSON object with a list of Webhooks.
     */
    public function getAll();
}