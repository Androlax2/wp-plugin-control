<?php

namespace Androlax2\WordPress\PluginControl;

class EnablePlugins extends TogglePlugins
{

	protected $message = 'Enabled in this environment.';

	public function change_action_links($actions)
	{
		unset($actions['deactivate']);
		unset($actions['delete']);
		unset($actions['disabled']);
		$message = esc_html($this->message);
		$actions['enabled'] = "<i><span style='color: #43a047;'>$message</span></i>";

		return $actions;
	}

	public function set_activation($enabled_plugins)
	{
		foreach ($this->plugins as $plugin) {
			if (!in_array($plugin, $enabled_plugins)) {
				$enabled_plugins[] = $plugin;
			}
		}

		return $enabled_plugins;
	}

}