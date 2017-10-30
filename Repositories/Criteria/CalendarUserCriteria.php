<?php

namespace Litepie\Calendar\Repositories\Criteria;

use Litepie\Repository\Contracts\CriteriaInterface;
use Litepie\Repository\Contracts\RepositoryInterface;

class CalendarUserCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->where('user_id','=', user_id('web'))->orWhere('assignee_id','=', user_id('web'));
  
        return $model;
    }
}