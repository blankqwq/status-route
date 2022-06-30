<?php

namespace Blankqwq\StatusRoute\Contract;

interface RuleContract
{
    public function get();

    public function match();

    public function next();

    public function withCancel();

    public function timeout();
}