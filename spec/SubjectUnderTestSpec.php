<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class SubjectUnderTestSpec extends ObjectBehavior
{
    function it_calls_something_on_its_dependency(\DependencyWithReturnTypehinting $dependencyWithReturnTypehinting)
    {
        $this->getAnIntFromThisThing($dependencyWithReturnTypehinting);
        $dependencyWithReturnTypehinting->getAnInt()->shouldHaveBeenCalled();
    }
}
