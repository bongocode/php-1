<?php
for ($i = 0; $i<2; $i++) {
	$data = new \ArrayObject(new stdClass(), ArrayObject::ARRAY_AS_PROPS);
	$data->itemType = 'bulletin';
	var_dump(!is_null($data['itemType']));
}
?>
