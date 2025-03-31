<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class MedicalHistoryButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Historial Médico';
    }

    public function getIcon()
    {
        return 'voyager-activity';
    }

    public function getDefaultRoute()
    {
        return route('pets.medicalhistory', $this->data->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'pets';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
            'style' => 'margin-right: 5px',
        ];
    }
}
