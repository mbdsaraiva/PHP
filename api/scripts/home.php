<?php 
defined ('CONTROL') or die ("Acesso inválido!");
$api = new ApiConsumer();
// $countries = $api -> get_all_contries();

// get a specific data
$country = $api -> get_country('brazil') 
?>
<!-- 
<div class="conteiner mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>Exemplo</h3>
        </div>
    </div>
</div> -->

<pre>

<?php 
//print_r($countries);
print_r($country);
?>
</pre>