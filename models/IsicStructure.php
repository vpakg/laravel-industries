<?php

class IsicStructure extends \Eloquent {

public function titles(){
	return $this->hasOne("IsicTitle", "code", "code" );
}

}