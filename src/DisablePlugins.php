<?php

namespace Androlax2\WordPress\PluginControl;

class DisablePlugins extends TogglePlugins
{

	protected $message = 'Disabled in this environment.';

	public function change_action_links($actions)
	{
		unset($actions['activate']);
		unset($actions['delete']);
		unset($actions['enabled']);
		$message = esc_html($this->message);
		$actions['disabled'] = "<i><span style='color: #f05545;'>$message</span></i>";

		return $actions;
	}

	public function set_activation($enabled_plugins)
	{
		foreach ($this->plugins as $plugin) {
			$key = array_search($plugin, $enabled_plugins);

			if (false !== $key) {
				unset($enabled_plugins[$key]);
			}
		}

		return $enabled_plugins;
	}

}