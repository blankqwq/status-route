<?php

namespace Blankqwq\StatusRoute\Contract;

interface RuleContract
{
    public function get();
    public function match();
}