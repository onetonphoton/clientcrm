<?php
foreach ($clients as $client) {
    unset($client['Client']['generated_html']);
}
echo $this->Xml->serialize($clients););

?>
