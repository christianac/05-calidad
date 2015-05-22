<?php

Validator::extend('alpha_spaces', function($attribute, $value, $parameters)
{
    return preg_match('/^([-a-z0-9_-ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöùúûüýøþÿÐdŒ-\s])+$/i', $value);
    
});  