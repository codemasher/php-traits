<?php
/**
 * Interface EnumerableInterface
 *
 * @filesource   EnumerableInterface.php
 * @created      13.01.2018
 * @package      chillerlan\Traits
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2018 Smiley
 * @license      MIT
 */

namespace chillerlan\Traits;

interface EnumerableInterface{

	/**
	 * @return array
	 */
	public function __toArray():array;

	/**
	 * @param callable $callback
	 *
	 * @return mixed
	 */
	public function __each($callback);

	/**
	 * @param callable $callback
	 *
	 * @return array
	 */
	public function __map($callback):array;

	/**
	 * @return \chillerlan\Traits\EnumerableInterface
	 */
	public function __reverse():EnumerableInterface;

	/**
	 * @return mixed
	 */
	public function __first();

	/**
	 * @return mixed
	 */
	public function __last();

	/**
	 * @return \chillerlan\Traits\EnumerableInterface
	 */
	public function __clear():EnumerableInterface;

	/**
	 * @return string
	 */
	public function __inspect():string;

	/**
	 * @param callable $callback
	 *
	 * @return array
	 */
	public function __findAll($callback):array;

	/**
	 * @param callable $callback
	 *
	 * @return array
	 */
	public function __reject($callback):array;

}
