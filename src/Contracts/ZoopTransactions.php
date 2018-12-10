<?php

namespace Zoop\Contracts;

use Zoop\Lib\APIResource;

interface ZoopTransactions{

    /**
     * API Resource.
     *
     * @param $APIResource $APIResource
    */
    public function __construct(APIResource $APIResource);

    /**
     * Create a new Business Seller
     *
     * @param $post array
     */
    public function create($post);

    /**
     * Delete a Seller by id
     *
     * @param $transactionID string
    */
    public function delete($transactionID);

    /**
     * Retrieve the details of a Seller by id
     *
     * @param $transactionID string
     */
    public function get($transactionID);

    /**
     * Returns a JSON object with a list of Sellers.
     */
    public function getAll();

}