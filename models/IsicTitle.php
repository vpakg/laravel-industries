<?php

class IsicTitle extends \Eloquent {
	protected $fillable = [ ];

	public function codeLevel() {
		return $this->hasOne( "IsicLevel" );
	}

	public function structure() {
		return $this->belongsTo( "IsicStructure", "code", "code" );
	}
}