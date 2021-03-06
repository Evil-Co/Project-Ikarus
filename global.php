<?php
/**
 * This file is part of the Ikarus Framework.
 * The Ikarus Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * The Ikarus Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * You should have received a copy of the GNU Lesser General Public License
 * along with the Ikarus Framework. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * The core namespace which stores all components of Ikarus.
 * @author                    Johannes Donath
 * @copyright                 2011 Evil-Co.de
 * @package                   de.ikarus-framework.core
 * @subpackage                system
 * @category                  Ikarus Framework
 * @license                   GNU Lesser Public License <http://www.gnu.org/licenses/lgpl.txt>
 * @version                   2.0.0-0001
 */
namespace ikarus;

	/* defines */

/**
 * Contains Ikarus' main directory with a trailing slash.
 * @var                        string
 * @deprecated                Use Ikarus::getPath()
 */
define('IKARUS_DIR', dirname (__FILE__) . '/');

/**
 * Contains the start time.
 * @var                        integer
 * @deprecated                Please use Ikarus::getTime()
 */
define('TIME_NOW', time ());

// include core functions and application core
require_once (IKARUS_DIR . 'lib/system/Ikarus.class.php');
system\Ikarus::init ();
?>