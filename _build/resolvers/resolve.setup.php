<?php

/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */

if ($transport->xpdo) {
    $modx =& $transport->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            $transport->xpdo->log(xPDO::LOG_LEVEL_INFO, 'Attempting to set which_editor setting to TinyMCE RTE.');
            $setting = $transport->xpdo->getObject('modSystemSetting', array('key' => 'which_editor'));
            if ($setting) {
                $setting->set('value', 'TinyMCE RTE');
                $setting->save();
            }
            unset($setting);

            $transport->xpdo->log(xPDO::LOG_LEVEL_INFO, 'Attempting to set use_editor setting to on.');
            $setting = $transport->xpdo->getObject('modSystemSetting', array('key' => 'use_editor'));
            if ($setting) {
                $setting->set('value', 1);
                $setting->save();
            }
            unset($setting);
            $success = true;
            break;

        case xPDOTransport::ACTION_UNINSTALL:
            $setting = $transport->xpdo->getObject('modSystemSetting',array('key' => 'which_editor'));
            if ($setting) {
                $setting->set('value','');
                $setting->save();
            }

            $setting = $transport->xpdo->getObject('modSystemSetting',array('key' => 'use_editor'));
            if ($setting) {
                $setting->set('value',0);
                $setting->save();
            }
            $success = true;
            break;
    }
}

return $success;