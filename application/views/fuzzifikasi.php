<section id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h4>Implikasi (Rulebase)</h4>
                <br>
                <table class="table">
                        <td>Variable</td>
                        <td>miuLow</td>
                        <td>miuMedium</td>
                        <td>miuHigh</td>
                        <?php for ($i=0; $i < 12; $i++) {?>
                        <tr>
                            <td>
                                <?php echo $i+1 ?>
                            </td>
                            <td>
                                <?php echo $low[$i] ?>
                            </td>
                            <td>
                                <?php echo $medium[$i] ?>
                            </td>
                            <td>
                                <?php echo $high[$i] ?>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
                <br>
                <h4>Komposisi Aturan</h4>
                <br>
                <table class="table">
                        <td>Laptop</td>
                        <td>nilai max</td>
                        <?php for ($i=0; $i < 10; $i++) {?>
                        <tr>
                            <td>
                                <?php echo $i+1 ?>
                            </td>
                            <td>
                                <?php echo $nilaimax[$i] ?>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
                <h4>Z = <?php echo $wa ?></h4>
                <br>
                <a type="button" class="btn btn-default" href="result/<?php echo $laptop ?>">Lihat Laptop</a> 
            </div>
        </div>
    </div>

</section>
