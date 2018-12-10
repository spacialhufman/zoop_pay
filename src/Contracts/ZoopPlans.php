<?php

namespace Zoop\Contracts;

use Zoop\Lib\APIResource;

interface ZoopPlans{

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
     * @param $planID string
    */
    public function delete($planID);

    /**
     * Retrieve the details of a Seller by id
     *
     * @param $planID string
     */
    public function get($planID);

    /**
     * Returns a JSON object with a list of Sellers.
     */
    public function getAll();

}