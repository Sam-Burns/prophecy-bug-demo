<?php

class SubjectUnderTest
{
    public function getAnIntFromThisThing(DependencyWithReturnTypehinting $dependencyWithReturnTypehinting)
    {
        $int = $dependencyWithReturnTypehinting->getAnInt();
    }
}
