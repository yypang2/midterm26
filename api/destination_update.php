<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");

if (isset($_GET['continent'])) {
    $continent = $_GET['continent'];

    if ($continent === 'AS') {
        echo "<option value='Tokyo, Japan'>1. Tokyo, Japan</option>";
        echo "<option value='Seoul, South Korea'>2. Seoul, South Korea</option>";
        echo "<option value='Bali, Indonesia'>3. Bali, Indonesia</option>";
        echo "<option value='Bangkok, Thailand'>4. Bangkok, Thailand</option>";
        echo "<option value='Kyoto, Japan'>5. Kyoto, Japan</option>";
        echo "<option value='Hanoi, Vietnam'>6. Hanoi, Vietnam</option>";
    } elseif ($continent === 'EU') {
        echo "<option value='Paris, France'>1. Paris, France</option>";
        echo "<option value='London, UK'>2. London, UK</option>";
        echo "<option value='Rome, Italy'>3. Rome, Italy</option>";
        echo "<option value='Berlin, Germany'>4. Berlin, Germany</option>";
        echo "<option value='Madrid, Spain'>5. Madrid, Spain</option>";
        echo "<option value='Athens, Greece'>6. Athens, Greece</option>";
    } else {
        echo "<option value=''>No destinations found</option>";
    }
} else {
    echo "<option value=''>Missing continent parameter</option>";
}
?>
