<?php

// For older (pre-2.7.2) verions of google/apiclient
if (
    file_exists(__DIR__ . '/../apiclient/src/Google/Client.php')
    && !class_exists('Deconf_AIWP_Google_Client', false)
) {
    require_once(__DIR__ . '/../apiclient/src/Google/Client.php');
    if (
        defined('Deconf_AIWP_Google_Client::LIBVER')
        && version_compare(Deconf_AIWP_Google_Client::LIBVER, '2.7.2', '<=')
    ) {
        $servicesClassMap = [
            'Deconf\AIWP\Google\\Client' => 'Deconf_AIWP_Google_Client',
            'Deconf\\AIWP\\Google\\Service' => 'Deconf_AIWP_Google_Service',
            'Deconf\\AIWP\\Google\\Service\\Resource' => 'Deconf_AIWP_Google_Service_Resource',
            'Deconf\AIWP\Google\\Model' => 'Deconf_AIWP_Google_Model',
            'Deconf\AIWP\Google\\Collection' => 'Deconf_AIWP_Google_Collection',
        ];
        foreach ($servicesClassMap as $alias => $class) {
            class_alias($class, $alias);
        }
    }
}
spl_autoload_register(function ($class) {
    if (0 === strpos($class, 'Google_Service_')) {
        // Autoload the new class, which will also create an alias for the
        // old class by changing underscores to namespaces:
        //     Google_Service_Speech_Resource_Operations
        //      => Deconf\AIWP\Google\Service\Speech\Resource\Operations
        $classExists = class_exists($newClass = str_replace('_', '\\', $class));
        if ($classExists) {
            return true;
        }
    }
}, true, true);
