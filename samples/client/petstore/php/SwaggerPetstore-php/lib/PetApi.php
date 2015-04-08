<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace SwaggerPetstore;

class PetApi {

  function __construct($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * updatePet
   *
   * Update an existing pet
   *
   * @param Pet $body Pet object that needs to be added to the store (required)
   * @return void
   */
   public function updatePet($body) {

      // parse inputs
      $resourcePath = "/pet";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PUT";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array('application/json','application/xml',);
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      
      
      
      
      // body params
      $body = null;
      if (isset($body)) {
        $body = $body;
      }

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      
  }
  
  /**
   * addPet
   *
   * Add a new pet to the store
   *
   * @param Pet $body Pet object that needs to be added to the store (required)
   * @return void
   */
   public function addPet($body) {

      // parse inputs
      $resourcePath = "/pet";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array('application/json','application/xml',);
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      
      
      
      
      // body params
      $body = null;
      if (isset($body)) {
        $body = $body;
      }

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      
  }
  
  /**
   * findPetsByStatus
   *
   * Finds Pets by status
   *
   * @param array[string] $status Status values that need to be considered for filter (required)
   * @return array[Pet]
   */
   public function findPetsByStatus($status) {

      // parse inputs
      $resourcePath = "/pet/findByStatus";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($status !== null) {
        $queryParams['status'] = $this->apiClient->toQueryValue($status);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[Pet]');
  		return $responseObject;
  }
  
  /**
   * findPetsByTags
   *
   * Finds Pets by tags
   *
   * @param array[string] $tags Tags to filter by (required)
   * @return array[Pet]
   */
   public function findPetsByTags($tags) {

      // parse inputs
      $resourcePath = "/pet/findByTags";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      // query params
      if($tags !== null) {
        $queryParams['tags'] = $this->apiClient->toQueryValue($tags);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'array[Pet]');
  		return $responseObject;
  }
  
  /**
   * getPetById
   *
   * Find pet by ID
   *
   * @param int $pet_id ID of pet that needs to be fetched (required)
   * @return Pet
   */
   public function getPetById($pet_id) {

      // parse inputs
      $resourcePath = "/pet/{petId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      
      
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      if(! $response) {
        return null;
      }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Pet');
  		return $responseObject;
  }
  
  /**
   * updatePetWithForm
   *
   * Updates a pet in the store with form data
   *
   * @param string $pet_id ID of pet that needs to be updated (required)
   * @param string $name Updated name of the pet (required)
   * @param string $status Updated status of the pet (required)
   * @return void
   */
   public function updatePetWithForm($pet_id, $name, $status) {

      // parse inputs
      $resourcePath = "/pet/{petId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array('application/x-www-form-urlencoded',);
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      
      
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      // form params
      if ($name !== null) {
        $formParams['name'] = $this->apiClient->toFormValue($name);
      }// form params
      if ($status !== null) {
        $formParams['status'] = $this->apiClient->toFormValue($status);
      }
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      
  }
  
  /**
   * deletePet
   *
   * Deletes a pet
   *
   * @param string $api_key  (required)
   * @param int $pet_id Pet id to delete (required)
   * @return void
   */
   public function deletePet($api_key, $pet_id) {

      // parse inputs
      $resourcePath = "/pet/{petId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "DELETE";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array();
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      
      // header params
      if($api_key !== null) {
        $headerParams['api_key'] = $this->apiClient->toHeaderValue($api_key);
      }
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      
  }
  
  /**
   * uploadFile
   *
   * uploads an image
   *
   * @param int $pet_id ID of pet to update (required)
   * @param string $additional_metadata Additional data to pass to server (required)
   * @param file $file file to upload (required)
   * @return void
   */
   public function uploadFile($pet_id, $additional_metadata, $file) {

      // parse inputs
      $resourcePath = "/pet/{petId}/uploadImage";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = 'application/json, application/xml';
      if ($_header_accept !== '') {
        $headerParams['Accept'] = $_header_accept;
      }
      $_header_content_type = array('multipart/form-data',);
      $headerParams['Content-Type'] = count($_header_content_type) > 0 ? $_header_content_type[0] : 'application/json';

      
      
      // path params
      if($pet_id !== null) {
        $resourcePath = str_replace("{" . "petId" . "}",
                                    $this->apiClient->toPathValue($pet_id), $resourcePath);
      }
      // form params
      if ($additional_metadata !== null) {
        $formParams['additionalMetadata'] = $this->apiClient->toFormValue($additional_metadata);
      }// form params
      if ($file !== null) {
        $formParams['file'] = '@' . $this->apiClient->toFormValue($file);
      }
      

      // for model (json/xml)
      if (isset($body)) {
        $httpBody = $body; // $body is the method argument, if present
      }
      
      // for HTTP post (form)
      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $httpBody = http_build_query($formParams);
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams);

      
  }
  

}
