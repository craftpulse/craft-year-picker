<?php

namespace craftpulse\yearpicker\fields;

use craft\fields\Dropdown;

class Year extends Dropdown
{
    protected bool $optgroups = false;

    public function init(): void
    {
        $this->setYears();
        parent::init();
    }

    public static function displayName(): string
    {
        return "Year Picker";
    }

    protected function setYears(): void
    {
        $years = range(date("Y"), 1910);

        $this->options = [
            [
                'label' => 'Pick a year',
                'value' => '',
                'disabled' => true,
            ]
        ];

        foreach ($years as $year) {
            $this->options[] = [
                'label' => $year,
                'value' => $year
            ];
        }
    }

    public function getSettingsHtml(): ?string
    {
        return null;
    }
}