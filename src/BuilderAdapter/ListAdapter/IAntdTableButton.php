<?php

namespace Quansitech\BuilderAdapterForAntdAdmin\BuilderAdapter\ListAdapter;

use AntdAdmin\Component\Table\ActionType\BaseAction;

interface IAntdTableButton
{
    public function tableButtonAntdRender($options, $listBuilder): BaseAction|array;
}