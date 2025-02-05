<?php

namespace Quansitech\BuilderAdapterForAntdAdmin\BuilderAdapter\FormAdapter;

use AntdAdmin\Component\Form\ActionType\BaseAction;

interface IAntdFormButton
{
    public function formButtonAntdRender($options): BaseAction;
}