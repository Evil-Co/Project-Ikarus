<?php
namespace ikarus\system\configuration\type;

/**
 * Manages a boolean option in configuration module
 * @author		Johannes Donath
 * @copyright		2011 Evil-Co.de
 * @package		de.ikarus-framework.core
 * @subpackage		system
 * @category		Ikarus Framework
 * @license		GNU Lesser Public License <http://www.gnu.org/licenses/lgpl.txt>
 * @version		2.0.0-0001
 */
class BooleanConfigurationType implements ConfigurationType {

	/**
	 * @see ikarus\system\configuration\type.ConfigurationType
	 */
	public static function getRealValue($value) {
		return (bool) $value;
	}
}
?>