# WP Plugin Control

(INSPIRED BY [https://github.com/PrimeTimeCode/wp-plugin-control](https://github.com/PrimeTimeCode/wp-plugin-control))

A simple library for WordPress plugin activation control.

## Basic Usage

Intended for use within a [Must Use](http://codex.wordpress.org/Must_Use_Plugins) plugin.

#### Force-enable a plugin

```php
new \Androlax2\WordPress\PluginControl\EnablePlugins('akismet/akismet.php');
```

#### Force-disable a plugin

```php
new \Androlax2\WordPress\PluginControl\DisablePlugins('akismet/akismet.php');
```

The contructors can also accept an array of plugin files:

```php
new \Androlax2\WordPress\PluginControl\EnablePlugins(['akismet/akismet.php', 'hello.php']);
```

## Multisite

#### Force-network-enable a plugin

```php
new \Androlax2\WordPress\PluginControl\NetworkEnablePlugins('akismet/akismet.php');
```

#### Force-network-disable a plugin

```php
new \Androlax2\WordPress\PluginControl\NetworkDisablePlugins('akismet/akismet.php');
```

> Note: Network disabling a plugin does not prevent the plugin from being loaded, it may still be enabled at the site-level unless force-disabled.

## Installation

**Via Composer (recommended)**

```
composer require androlax2/wp-plugin-control:~0.1.0
```
