<section id="content">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h4>Silahkan pilih preferensi laptop yang anda inginkan</h4>
                <br>
                <div class="alert alert-success hidden" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>
                <div class="alert alert-error hidden" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                </div>
                <div class="contact-form">
                    <form id="contact-form" role="form" method="post" action="<?php echo base_url(); ?>Form/find" novalidate="novalidate">
                        <h4>Test</h4>
                        <div class="form-group has-feedback">
                            <label for="name">Download</label>
                            <input type="range" min="0" max="10" value="0" name="option1">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Listening music</label>
                            <input type="range" min="0" max="10" value="0" name="option2">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Playing game</label>
                            <input type="range" min="0" max="10" value="0" name="option3">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Watching movie</label>
                            <input type="range" min="0" max="10" value="0" name="option4">
                        </div>
                        <hr>
                        <h4>Test</h4>
                        <div class="form-group has-feedback">
                            <label for="name">Programming</label>
                            <input type="range" min="0" max="10" value="0" name="option5">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Wordprocessing</label>
                            <input type="range" min="0" max="10" value="0" name="option6">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Data analysis</label>
                            <input type="range" min="0" max="10" value="0" name="option7">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Graphic handling</label>
                            <input type="range" min="0" max="10" value="0" name="option8">
                        </div>
                        <hr>
                        <h4>Test</h4>
                        <div class="form-group has-feedback">
                            <label for="name">Price consideration</label>
                            <input type="range" min="0" max="10" value="0" name="option9">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Weight of computer</label>
                            <input type="range" min="0" max="10" value="0" name="option10">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Battery backup</label>
                            <input type="range" min="0" max="10" value="0" name="option11">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Screen size</label>
                            <input type="range" min="0" max="10" value="0" name="option12">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
