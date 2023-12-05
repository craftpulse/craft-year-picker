<?php

namespace craftpulse\yearpicker;

use Craft;
use craft\base\Plugin;

/**
 * Year Picker plugin
 *
 * @method static YearPicker getInstance()
 * @author Craftpulse <craftpulse.plugins@gmail.com>
 * @copyright Craftpulse
 * @license MIT
 */
class YearPicker extends Plugin
{
    public string $schemaVersion = '1.0.0';

    public static function config(): array
    {
        return [
            'components' => [
                // Define component configs here...
            ],
        ];
    }

    public function init(): void
    {
        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();
            // ...
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)
    }
}
