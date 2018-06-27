<?php
require("conexao.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Select all the rows in the markers table
$query_places = "SELECT * FROM places";
$result_places = mysqli_query($conn, $query_places);
if (!$result_places) {
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row_places = mysqli_fetch_assoc($result_places)){
  // Add to XML document node
  echo '<markers ';
  echo 'id="' . $row_places['id'] . '" ';
  echo 'name="' . parseToXML($row_places['name']) . '" ';
  echo 'address="' . parseToXML($row_places['address']) . '" ';
  echo 'lat="' . $row_places['lat'] . '" ';
  echo 'lng="' . $row_places['lng'] . '" ';
  echo 'type="' . $row_places['type'] . '" ';
  echo 'hours="' . $row_places['hours'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>