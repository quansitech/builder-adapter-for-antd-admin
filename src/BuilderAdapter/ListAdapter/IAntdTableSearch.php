<?php

namespace Quansitech\BuilderAdapterForAntdAdmin\BuilderAdapter\ListAdapter;

use AntdAdmin\Component\ColumnType\BaseColumn;

interface IAntdTableSearch
{
    public function tableSearchAntdRender($options, $listBuilder): BaseColumn|array;
}