<?php
foreach ($clients as $client) {
    unset($client['Client']['generated_html']);
}
echo json_encode(compact('clients'));

?>
