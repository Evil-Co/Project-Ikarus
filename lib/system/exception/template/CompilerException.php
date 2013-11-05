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
namespace ikarus\system\exception\template;

/**
 * Class CompilerException
 * @author			Johannes Donath
 * @copyright			Copyright (C) 2013 Evil-Co <http://www.evil-co.com>
 * @package			ikarus\system\exception\template
 * @category			Ikarus Framework
 * @license			GNU Lesser Public License <http://www.gnu.org/licenses/lgpl.txt>
 * @version			2.0.0-0001
 */
class CompilerException extends TemplateEngineException implements ITemplateException {

	/**
	 * @see ikarus\system\exception.SystemException::EXCEPTION_TITLE
	 */
	const EXCEPTION_TITLE = 'Template Compiler error';
}
?> 