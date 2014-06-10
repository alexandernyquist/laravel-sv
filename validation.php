<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"         => ":attribute måste accepteras.",
	"active_url"       => ":attribute är inte en korrekt URL.",
	"after"            => ":attribute måste vara ett datum efter :date.",
	"alpha"            => ":attribute kan bara innehålla bokstäver.",
	"alpha_dash"       => ":attribute kan bara innehålla bokstäver, siffror, och bindestreck.",
	"alpha_num"        => ":attribute kan bara innehålla bokstäver och siffror.",
	"array"            => ":attribute måste vara en array.",
	"before"           => ":attribute måste vara ett datum innan :date.",
	"between"          => array(
		"numeric" => ":attribute måste vara mellan :min och :max.",
		"file"    => ":attribute måste vara mellan :min och :max kb.",
		"string"  => ":attribute måste vara mellan :min och :max tecken.",
		"array"   => ":attribute måste ha mellan :min och :max objekt.",
	),
	"confirmed"        => ":attribute måste bekräftas.",
	"date"             => ":attribute är inte ett giltigt datum.",
	"date_format"      => ":attribute måste ha formatet :format.",
	"different"        => ":attribute och :other kan inte vara samma.",
	"digits"           => ":attribute måste vara :digits siffror.",
	"digits_between"   => ":attribute måste vara mellan :min och :max siffror.",
	"email"            => ":attribute är inte en giltig e-postadress.",
	"exists"           => ":attribute existerar inte.",
	"image"            => ":attribute måste vara en bild.",
	"in"               => ":attribute är inte ett giltigt val.",
	"integer"          => ":attribute måste vara ett heltal.",
	"ip"               => ":attribute måste vara en giltig IP-adress.",
	"max"              => array(
		"numeric" => "The :attribute may not be greater than :max.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "The :attribute may not be greater than :max characters.",
		"array"   => "The :attribute may not have more than :max items.",
	),
	"mimes"            => "The :attribute must be a file of type: :values.",
	"min"              => array(
		"numeric" => ":attribute måste vara minst :min.",
		"file"    => ":attribute måste vara minst :min kb.",
		"string"  => ":attribute måste vara minst :min tecken.",
		"array"   => ":attribute måste ha minst :min värden.",
	),
	"not_in"           => "The selected :attribute is invalid.",
	"numeric"          => "The :attribute must be a number.",
	"regex"            => "The :attribute format is invalid.",
	"required"         => "The :attribute field is required.",
	"required_if"      => "The :attribute field is required when :other is :value.",
	"required_with"    => "The :attribute field is required when :values is present.",
	"required_without" => "The :attribute field is required when :values is not present.",
	"same"             => "The :attribute and :other must match.",
	"size"             => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	),
	"unique"           => "The :attribute has already been taken.",
	"url"              => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		'name' => 'Namn',
		'email' => 'Email',
		'message' => 'Meddelande'
	),

);
