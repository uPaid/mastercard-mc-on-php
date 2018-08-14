<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\McOn;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class User extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "cb800cd9-b56c-4e0f-87d8-c126fe3590f7":
                return new OperationConfig("/bundle/profile/v1/users", "create", array(), array("x-client-correlation-id"));
            case "5f944697-cbe2-46a0-875d-73cdb7775c57":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "delete", array(), array("x-client-correlation-id"));
            case "f02dd15c-089c-41fa-8dbc-a808008c7388":
                return new OperationConfig("/bundle/profile/v1/users/{userId}/patch", "create", array(), array("x-client-correlation-id"));
            case "dc2517df-a450-41a6-a0e1-fdeb44d73b91":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "read", array(), array("x-client-correlation-id"));
            case "27244100-2f1a-443f-93ab-14ecc397c6eb":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "update", array(), array("x-client-correlation-id"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type User
    *
    * @param Map map, containing the required parameters to create a new object
    * @return User of the response of created instance.
    */
    public static function createUser($map)
    {
        return self::execute("cb800cd9-b56c-4e0f-87d8-c126fe3590f7", new User($map));
    }








   /**
    * Delete object of type User by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return User of the response.
    */
    public static function deleteUserById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("5f944697-cbe2-46a0-875d-73cdb7775c57", new User($map));
    }

   /**
    * Delete this object of type User
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return User of the response.
    */
    public function deleteUser()
    {
        return self::execute("5f944697-cbe2-46a0-875d-73cdb7775c57", $this);
    }


   /**
    * Creates object of type User
    *
    * @param Map map, containing the required parameters to create a new object
    * @return User of the response of created instance.
    */
    public static function patchUser($map)
    {
        return self::execute("f02dd15c-089c-41fa-8dbc-a808008c7388", new User($map));
    }









    /**
     * Returns objects of type User by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return User of the response
     */
    public static function readUser($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("dc2517df-a450-41a6-a0e1-fdeb44d73b91",new User($map));
    }


    /**
     * Updates an object of type User
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return User of the response
     */
    public function updateUser()  {
        return self::execute("27244100-2f1a-443f-93ab-14ecc397c6eb",$this);
    }






}

