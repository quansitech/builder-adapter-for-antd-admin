<?php

namespace Quansitech\BuilderAdapterForAntdAdmin\BuilderAdapter\ListAdapter;

use AntdAdmin\Component\ColumnType\BaseColumn;

interface IAntdTableColumn
{
    public function tableColumnAntdRender($options, &$datalist, $listBuilder): BaseColumn;
}