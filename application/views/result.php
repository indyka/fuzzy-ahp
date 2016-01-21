<section class="aboutUs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Kami Sarankan anda membeli <?php echo $querydetail['namalaptop']; ?> </h2>Dengan kategori dari form yang anda inputkan maka kami merekomendasikan laptop <?php echo $querydetail['namalaptop']; ?></div>
                <br/>
            </div>
        </div> 
        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>asset/img/laptop/<?php echo $querydetail['urlimage']; ?>" alt="">
                                <div class="space"></div>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $querydetail['deskripsi']; ?></p>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Processor : <?php echo $querydetail['processor']; ?></li>
                                    <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> RAM : <?php echo $querydetail['ram']; ?></li>
                                    <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Graphic Card : <?php echo $querydetail['desain']; ?></li>
                                    <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Hard Disk : <?php echo $querydetail['harddisk']; ?></li>
                                    <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Battery : <?php echo $querydetail['battery']; ?></li>
                                    <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Harga : Rp. <?php echo $querydetail['harga']; ?></li>
                                </ul>
                            </div>
                        </div>
    
    </div>
    </section>