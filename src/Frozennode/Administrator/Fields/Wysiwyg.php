<?php
namespace Frozennode\Administrator\Fields;

class Wysiwyg extends Text {

	/**
	 * The specific defaults for the wysiwyg class
	 *
	 * @var array
	 */
	protected $wysiwygDefaults = array(
		'kcfinder' => array(
			'disabled' => true,
		),
	);

	/**
	 * The specific rules for the wysiwyg class 
	 *
	 * @var array
	 */
	protected $wysiwygRules = array(
		'kcfinder' => 'array'
	);

	/**
	 * Gets all rules
	 *
	 * @return array
	 */
	public function getRules()
	{
		$rules = parent::getRules();

		return array_merge($rules, $this->wysiwygRules);
	}

	/**
	 * Gets all default values
	 *
	 * @return array
	 */
	public function getDefaults()
	{
		$defaults = parent::getDefaults();

		return array_merge($defaults, $this->wysiwygDefaults);
	}
}