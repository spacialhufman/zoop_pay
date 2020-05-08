<?php

namespace Zoop\Lib;

class ZoopSellers implements \Zoop\Contracts\ZoopSellers {

    /**
     * API Resource
     *
     * @var object
     */
    protected $APIResource;

    /**
     * ZoopSellers constructor.
     * @param APIResource $APIResource
     */
    public function __construct(APIResource $APIResource){
        $this->APIResource = $APIResource;
    }

    /**
     * @param array $post
     * @return mixed
     */
    public function createIndividuals($post = []){
        $api = 'sellers/individuals';
        return $this->APIResource->createAPI($api, $post);
    }

    public function createBusiness($post){
        $api = 'sellers/businesses';
        return $this->APIResource->createAPI($api, $post);
    }

    /**
     * @param string $sellerID
     * @return mixed
     */
    public function delete($sellerID){
        $api = 'sellers/' . $sellerID;
        return $this->APIResource->deleteAPI($api);
    }

    /**
     * @param string $sellerID
     * @return mixed
     */
    public function get($sellerID){
        $api = 'sellers/' . $sellerID;
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @return mixed
     */
    public function getAll(){
        $api = 'sellers';
        return $this->APIResource->searchAPI($api);
    }


    /**
     * @param $sellerID string
     * @param $files array
     *
     * @return mixed
     */
    public function sendDocs($sellerID, $files){
        $api = 'sellers/' . $sellerID . '/documents';
        return $this->APIResource->fileAPI($api, $files);
    }

    /**
     * @param $docID string
     *
     * @return mixed
     */
    public function getDoc($docID){
        $api = 'documents/' . $docID;
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @param $sellerID string
     *
     * @return mixed
    */
    public function getAllDocs($sellerID){
        $api = 'sellers/' . $sellerID . '/documents';
        return $this->APIResource->searchAPI($api);
    }

    /**
     * @param $sellerID string
     *
     * @return mixed
    */
    public function getBankAccounts($sellerID){
        $api = 'sellers/' . $sellerID . '/balances';
        return $this->APIResource->searchAPI($api);
    }
}