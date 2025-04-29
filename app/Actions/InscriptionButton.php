<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class InscriptionButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Inscripción';
    }

    public function getIcon()
    {
        return 'voyager-book';
    }

    public function getDefaultRoute()
    {
        return route('voyager.receipt.inscription', $this->data->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'receipts';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
            'style' => 'margin-right: 5px',
        ];
    }
}
