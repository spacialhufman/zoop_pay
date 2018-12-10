<?php

namespace Zoop\Lib;

class ZoopTransactions implements \Zoop\Contracts\ZoopTransactions {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopTransactions constructor.
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
        $api = 'transactions';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $transactionID
     * @return mixed
     */
    public function delete($transactionID){
        $api = 'transactions/' . $transactionID;
        return $this->APIResource->deleteAPI($api);
    }

    /**
     * @param string $transactionID
     * @return mixed
     */
    public function get($transactionID){
        $api = 'transactions/' . $transactionID;
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @return mixed
     */
    public function getAll(){
        $api = 'transactions';
        return $this->APIResource->searchAPI($api);
    }

}