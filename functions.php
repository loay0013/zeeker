<?php
function couponCodeGenerator()
{
$couponGenerated = randomString();

$attributes = [
'name' => $couponGenerated
];

// Check if coupon code generated is unique
if(isRecordUnique($attributes, 'name', 'coupons')):

// Connect to database
$db = connectDB();

// SQL Statement
$sql = "INSERT INTO coupons (name)
VALUES (
'".$couponGenerated."'
)";

// Process the query
if (!$db->query($sql)):
echo "Error: " . $sql . "<br>" . $db->error;
endif;

// Close the connection after using it
$db->close();

return $couponGenerated;

else://if not unique re-call the function and generate again
couponCodeGenerator();
endif;
}


function randomString($length = 10) {
// Set the chars
$chars='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Count the total chars
$totalChars = strlen($chars);

// Get the total repeat
$totalRepeat = ceil($length/$totalChars);

// Repeat the string
$repeatString = str_repeat($chars, $totalRepeat);

// Shuffle the string result
$shuffleString = str_shuffle($repeatString);

// get the result random string
return substr($shuffleString,1,$length);
}
?>