<?php
/**
 * This file is part of the Ikarus Framework.
 *
 * The Ikarus Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * The Ikarus Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with the Ikarus Framework. If not, see <http://www.gnu.org/licenses/>.
 */
namespace ikarus\system\application;

/**
 * Defines default methods for applications
 * @author		Johannes Donath
 * @copyright		2011 Evil-Co.de
 * @package		de.ikarus-framework.core
 * @subpackage		system
 * @category		Ikarus Framework
 * @license		GNU Lesser Public License <http://www.gnu.org/licenses/lgpl.txt>
 * @version		2.0.0-0001
 */
interface IApplication {
	
	/**
	 * Creates a new instance of type IApplication
	 * @param			string			$abbreviation
	 * @param			string			$libraryNamespace
	 * @param			integer			$packageID
	 * @param			string			$environment
	 */
	public function __construct($abbreviation, $libraryNamespace, $packageID, $environment, $primaryApplication = false);
	
	/**
	 * Boots the application
	 * @return			void
	 */
	public function boot();
	
	/**
	 * Returns the application abbreviation
	 * @return			string
	 */
	public function getAbbreviation();
	
	/**
	 * Returns the choosen environment for this application instance
	 * @return			string
	 */
	public function getEnvironment();
	
	/**
	 * Returns the library namespace of this application
	 * @return			string
	 */
	public function getLibraryNamespace();
	
	/**
	 * Returns the packageID of this application
	 * @return			integer
	 */
	public function getPackageID();
	
	/**
	 * Returns true if this application is the main application of this framework instance
	 * @return			boolean
	 */
	public function isPrimaryApplication();
	
	/**
	 * Closes all application components
	 * @return			void
	 */
	public function shutdown();
	
	/**
	 * Shuts down all default components
	 * @return			void
	 */
	public function shutdownDefaultComponents();
}
?>