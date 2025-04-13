<?php

/**
 * A report of an individual’s relatives, in a narrative style.
 * Redesigned from individual_ext_report.xml and ahnentafel_report.xml
 */

declare(strict_types=1);

namespace MyCustomNamespace;

use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleReportInterface;
use Fisharebest\Webtrees\Module\ModuleReportTrait;
use Fisharebest\Webtrees\I18N;

return new class extends AbstractModule implements ModuleCustomInterface, ModuleReportInterface {
    use ModuleCustomTrait;
    use ModuleReportTrait;

    /**
     * @return string
     */
    public function title(): string
    {
        return I18N::translate('Family history');
    }

    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return 'Seved Torstendahl';
    }

    /**
     * Additional translations for module.
     *
     * @param string $language
     *
     * @return string[]
     */

     public function customTranslations(string $language): array
     {
         $lang_dir   = $this->resourcesFolder() . 'lang/';
         $file       = $lang_dir . $language . '/messages.po';
         if (file_exists($file)) {
             return (new Translation($file))->asArray();
         } else {
             return [];
         }
     }

    /**
     * The version of this module.
     *
     * @return string  e.g. '1.2.3'
     */
    public function customModuleVersion(): string
    {
        return '1.0.3';
    }

    /**
     * A URL that will provide the latest version of this module.
     *
     * @return string
     */
    public function customModuleLatestVersionUrl(): string
    {
        return 'https://raw.githubusercontent.com/sevtor/modules/master/family-history/latest-version.txt';
    }

    /**
     * Where to get support for this module.  Perhaps a github respository?
     *
     * @return string
     */
    public function customModuleSupportUrl(): string
    {
        return 'https://github.com/sevtor/modules/';
    }

    public function resourcesFolder(): string
    {
        return __DIR__ . '/resources/';
    }

    /**
     * A sentence describing what this module does.
     *
     * @return string
     */
    public function description(): string
    {
        // This text also appears in the .XML file - update both together
        /* I18N: Description of the “Ancestors” module */
        return I18N::translate('A report of an individual’s relatives, in a narrative style.');
    }

    /**
     * Name of the XML report file, relative to the resources folder.
     *
     * @return string
     */
    public function xmlFilename(): string
    {
        return 'family_history_report.xml';
    }
};
