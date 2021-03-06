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
namespace ikarus\system\io\output;

/**
 * The base interface for all output handles.
 * @author                    Johannes Donath
 * @copyright                 2012 Evil-Co.de
 * @package                   de.ikarus-framework.core
 * @subpackage                system
 * @category                  Ikarus Framework
 * @license                   GNU Lesser Public License <http://www.gnu.org/licenses/lgpl.txt>
 * @version                   2.0.0-0001
 */
interface IOutputHandle {

	/**
	 * Constructs the object.
	 * @param                        mixed   $data
	 * @param                        mixed[] $outputVariables
	 */
	public function __construct ($data, $outputVariables);

	/**
	 * Renders the output.
	 * @return                        void
	 * @throws                        ikarus\system\exception\io.OutputException
	 * @api
	 */
	public function render ();

	/**
	 * Sends all headers defined by this output handle.
	 * @return                        void
	 * @api
	 */
	public function sendHeaders ();
}

?>