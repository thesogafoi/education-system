<?php

function create($model, $numbers = 1, $customData = [])
{
    return factory($model, $numbers)->create($customData);
}
