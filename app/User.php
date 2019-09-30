<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\UserPresenter;
use Robbo\Presenter\PresentableInterface;

class User extends Model implements PresentableInterface
{
    protected $fillable = [
        'name',
    ];

    /**
     * Return a created presenter.
     *
     * @return Robbo\Presenter\Presenter
     */
    public function getPresenter()
    {
        return new UserPresenter($this);
    }
}
