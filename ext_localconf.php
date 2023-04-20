<?php

defined('TYPO3') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        trim('
            plugin.tx_form.settings.yamlConfigurations {
                950 = EXT:form_variants/Configuration/Form/CustomFormSetup.yaml
            }

            module.tx_form.settings.yamlConfigurations {
                950 = EXT:form_variants/Configuration/Form/CustomFormSetup.yaml
            }
        ')
    );
});
