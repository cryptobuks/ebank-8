<?php

class AccountRecord extends Eloquent {

    public function recordable()
    {
        return $this->morphTo();
    }

}