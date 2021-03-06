<?php
namespace TYPO3\Base\Core\Rendering;

/*                                                                        *
 * This script belongs to the TYPO3  package "Base".                 *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

interface RenderingContextInterface {

	/**
	 * Get the template variable container
	 *
	 * @return \TYPO3\Base\Core\ViewHelper\TemplateVariableContainer The Template Variable Container
	 */
	public function getTemplateVariableContainer();



	/**
	 * Get the ViewHelperVariableContainer
	 *
	 * @return \TYPO3\Base\Core\ViewHelper\ViewHelperVariableContainer
	 */
	public function getViewHelperVariableContainer();
}

?>
