<?php include 'functionsORIENTATION';

$pdf = '<?php echo $key?>';
header('Content-type: application/pdf');
header('Content-Description: inline; filename="'.$pdf.'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges:bytes');
@readfile($pdf);

?>