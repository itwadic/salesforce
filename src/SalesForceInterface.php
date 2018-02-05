<?php
/**
 * Created by PhpStorm.
 * User: panarican
 * Date: 2/4/18
 * Time: 7:55 PM
 */

namespace Panarican\SalesForce;

interface SalesForceInterface {
	/**
	 * Builds payload based on available payloadFields
	 *
	 * @param array $payload
	 *
	 * @return mixed
	 */
	public function buildPayload(array $payload);

	/**
	 * Get a list of available fields in the SalesForce object
	 *
	 * @return mixed
	 */
	public function fields();

	/**
	 * Returns a list of items for the SalesForce object
	 *
	 * @param array $conditions
	 *
	 * @param $limit
	 *
	 * @return mixed
	 */
	public function query(array $conditions, $limit = 0);

	/**
	 * Create an item in the SalesForce object
	 *
	 * @param array $payload
	 *
	 * @return mixed
	 */
	public function create(array $payload);

	/**
	 * Update an item in the SalesForce object
	 *
	 * @param string $objectId
	 * @param array $payload
	 *
	 * @return mixed
	 */
	public function update(string $objectId, array $payload);

	/**
	 * Query for an item to determine if you need to create or update it
	 *
	 * @param array $conditions
	 * @param array $payload
	 *
	 * @return mixed
	 */
	public function queryCreateUpdate(array $conditions, array $payload);

	/**
	 * Get an existing item in the SalesForce object
	 *
	 * @param string $objectId
	 *
	 * @return mixed
	 */
	public function get(string $objectId);

	/**
	 * Delete an existing item in the SalesForce object
	 *
	 * @param string $objectId
	 *
	 * @return mixed
	 */
	public function delete(string $objectId);
}