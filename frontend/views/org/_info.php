<?php

$model = \common\models\TaxPayerReester::findOne(['tin'=>$tin]);

?>

<div class="dashboard-area">
    <div class="row">
        <div class="col-md-3">
            <div class="dsh-card bg-success shadow">
                <div class="dsh-icon">
                    <img src="/img/money-bag.png" width="35px">
                </div>
                <div class="dh-text text-white">
                    <div>
                        Jami to`langan soliqlar
                    </div>
                    <?= number_format($model->total_paid_tax,2)?> so'm
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dsh-card bg-warning shadow">
                <div class="dsh-icon">
                    <img src="/img/document.png" width="35px">
                </div>
                <div class="dh-text">
                    <div>
                        Soliq qarzi
                    </div>
                    <?= number_format($model->to_be_paid_tax,2)?> so'm
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dsh-card bg-danger shadow">
                <div class="dsh-icon">
                    <img src="/img/taxes.png" width="35px">
                </div>
                <div class="dh-text text-white">
                    <div>
                        Moliyaviy jarima
                    </div>
                    <?= number_format($model->fine,2)?> so'm
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dsh-card bg-primary shadow">
                <div class="dsh-icon">
                    <img src="/img/tax.png" width="35px">
                </div>
                <div class="dh-text text-white">
                    <div>
                        Ustav fondi
                    </div>
                    0.00 so'm
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <h4 class="pt-2 text-white">Qo'shimcha ma'lumotlar</h4>
                <table class="table  table-bordered">

                    <tbody>
                        <tr>
                            <td>Yirik soliq to`lovchisi</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>QQS soliq to`lovchisi</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>THSHT</td>
                            <td>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat</td>
                        </tr>
                        <tr>
                            <td>DBIBT</td>
                            <td>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</td>
                        </tr>
                        <tr>
                            <td>IFUT</td>
                            <td>62010 - Kompyuter dasturlashtirish sohasidagi faoliyat</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6" style="align-content: center;">
            <h4 class="pt-2 text-white">Tizim tomonidan berilgan ball</h4>
            <div style="row">
                <div class="col-md-6">
                    <div id="demoGauge2"></div>
                </div>
                <div class="col-md-6">

                </div>
            </div>

        </div>
    </div>


</div>

<script>
    $(document).ready(function() {
        $('#demoGauge2').simpleGauge({
            value:  6,
            min:    0,
            max:    10,

            type:   'analog digital', // enable one or the other, or both
            container: {
                scale:  100,            // scale of gauge, in percent
                style:  'background: #ddd; background: linear-gradient(335deg, #ddd 0%, #fff 30%, #fff 50%, #bbb 100%); border-radius: 1000px; border: 5px solid #bbb;'
            },
            title: {
                text:   '',
                style:  'color: #555; font-size: 20px; padding: 10px;'
            },
            digital: {
                text:   '{value.3}', // value with number of decimals
                style:  'color: auto; font-size: 35px;'
            },
            analog: {
                minAngle:   -150,
                maxAngle:   150
            },
            labels: {
                text:   '{value}',
                count:  10,
                scale:  73,
                style:  'font-size: 20px;'
            },
            ticks: {
                count:  20,
                scale1: 84,
                scale2: 93,
                style:  'width: 2px; color: #999;'
            },
            subTicks: {
                count:  5,
                scale1: 93,
                scale2: 96,
                style:  'width: 1px; color: #bbb;'
            },
            bars: {
                scale1: 88,
                scale2: 94,
                style:  '',
                colors: [
                    [ 0,   '#666666', 91, 92 ],
                    [ 1.0, '#dc3545', 0, 0 ],
                    [ 3.0, '#ffc107', 0, 0 ],
                    [ 5.5, '#007bff', 0, 0 ],
                    [ 8.0, '#28a745', 0, 0 ],
                ]
            },
            pointer: {
                scale: 95,
                //shape: '2,100 -2,100 ...', // x,y coordinates for custom shape
                style: 'color: red; opacity: 0.6; filter: drop-shadow(-3px 3px 2px rgba(0, 0, 0, .7));'
            }
        });
    });
</script>

<style>
    #demoGauge2 { width:  15em; height: 15em; }
</style>
