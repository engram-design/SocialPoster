<?php
namespace verbb\socialposter\events;

use yii\base\Event;

class TokenEvent extends Event
{
    // Properties
    // =========================================================================

    public $token;
    public $isNew = false;

}
