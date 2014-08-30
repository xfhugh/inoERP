<?php include_once("../../includes/basics/basics.inc"); ?>
<?php

 if ((!empty($_GET['bu_org_id'])) && (!empty($_GET['find_bpa_list']))) {
  $bpa_list = po_header::find_all_active_bpa($_GET['bu_org_id']);
  echo header('Content-Type: application/json');
  echo json_encode(($bpa_list));
 }

 if ((!empty($_GET['po_header_id'])) && (!empty($_GET['find_bpa_details']))) {
  $bpa_details = po_all_v::find_by_id($_GET['po_header_id']);
  echo header('Content-Type: application/json');
  echo json_encode(($bpa_details));
 }

 if ((!empty($_GET['find_bpa_line_details'])) && (!empty($_GET['po_line_id']))) {
  $bpa_line_details_a = po_all_v::find_all_by_poLineId($_GET['po_line_id']);
  $bpa_line_details = $bpa_line_details_a[0];
  echo header('Content-Type: application/json');
  echo json_encode(($bpa_line_details));
 }
?>