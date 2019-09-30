<?php

namespace App\Presenters;

use Robbo\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function idWithName(){
        return $this->id . ': ' . $this->name;
    }
}
