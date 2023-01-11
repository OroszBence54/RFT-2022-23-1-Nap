<?php
    require PATH . '/libs/News.php';
?>
<div id="homepage">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-bold my-3">Időjárás előrejelzés</h1>
            </div>
            <div class="col-12">
                <a class="weatherwidget-io" href="https://forecast7.com/hu/47d9020d38/eger/" data-label_1="Eger" data-label_2="Időjárás" data-theme="original" >Eger időjárás</a>
            </div>
            <div class="col-12 mt-4">
                <p>Pénteken egy melegfront felhőzetéből fordulhat elő több helyen kisebb eső, a napsütést ezen a napon mellőznünk kell. Többfelé lesz élénk a déli-délnyugati szél. Hajnalban csak néhol fagyhat gyengén, délután 3-10 fokot mérhetünk.</p>
                <p>Szombaton egy hidegfront mögött már sok lesz a napsütés, legfeljebb eleinte keleten, északkeleten fordulhat elő kisebb eső, egy-egy zápor. Többfelé megerősödik az északnyugati szél. Marad az enyhe idő 6-11 fokos maximumokkal.</p>               
                </p>
                <small><em>Kiadta: Időkép (ma 19:28)</em><small>
            </div>
        </div>
    </div>
</div>

<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>