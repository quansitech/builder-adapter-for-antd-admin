<?php

namespace Quansitech\BuilderAdapterForAntdAdmin\BuilderAdapter\FormAdapter;

use AntdAdmin\Component\ColumnType\BaseColumn;

interface IAntdFormColumn
{
    public function formColumnAntdRender($options): BaseColumn;
}