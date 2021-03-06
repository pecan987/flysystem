<?php
/**
 * SftpFactory.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:Flysystem!
 * @subpackage     Adapters
 * @since          1.0.0
 *
 * @date           23.04.16
 */

namespace IPub\Flysystem\Factories\Adapters;

use Nette;
use Nette\Utils;

use League\Flysystem;
use League\Flysystem\Sftp;

/**
 * SFTP adapter filesystem factory
 *
 * @package        iPublikuj:Flysystem!
 * @subpackage     Adapters
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class SftpFactory
{
	/**
	 * @param Utils\ArrayHash $parameters
	 *
	 * @return Sftp\SftpAdapter
	 */
	public static function create(Utils\ArrayHash $parameters)
	{
		return new Sftp\SftpAdapter([
			'host'       => $parameters->host,
			'port'       => $parameters->port,
			'username'   => $parameters->username,
			'password'   => $parameters->password,
			'privateKey' => $parameters->privateKey,

			'root'    => $parameters->root,
			'timeout' => $parameters->timeout,
		]);
	}
}
