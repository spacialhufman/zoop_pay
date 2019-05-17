<?php

namespace Zoop\Lib;

class ZoopWebhook implements \Zoop\Contracts\ZoopWebhook {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopTransfers constructor.
     * @param APIResource $APIResource
     */
    public function __construct(APIResource $APIResource){
        $this->APIResource = $APIResource;
    }

    /**
     * @param array $post
     * @return mixed
     */
    public function create($post = []){
        $api = 'webhooks';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $webhookID
     * @return mixed
     */
    public function get($webhookID){
        $api = 'webhooks/' . $webhookID;
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @return mixed
     */
    public function getAll(){
        $api = 'webhooks';
        return $this->APIResource->searchAPI($api);
    }
}