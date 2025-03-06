<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class VaccineButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Vacunas';
    }

    public function getIcon()
    {
        return 'voyager-file-text';
    }

    public function getDefaultRoute()
    {
        return route('medicalhistories.vaccine', $this->data->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'medical-histories';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
            'style' => 'margin-right: 5px',
        ];
    }
}
