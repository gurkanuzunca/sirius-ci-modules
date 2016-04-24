
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <?php echo $this->utils->alert(); ?>

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Yeni Kayıt Ekle</div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="video">Youtube video adresi</label>
                        <div class="input-group">
                            <input id="video" name="video" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button id="video-info-button" data-url="<?php echo $this->module ?>/videoInfo" class="btn btn-default btn-primary" type="button">Video Bilgilerini Çek</button>
                            </span>
                        </div>
                        <div class="help-block">Örnek: <a href="http://www.youtube.com/watch?v=9hIQjrMHTv4" target="_blank">http://www.youtube.com/watch?v=9hIQjrMHTv4</a></div>
                    </div>
                </div>
            </div>


            <div id="video-detail" class="panel panel-default hide">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Video Bilgileri</div>
                <div class="panel-body">

                    <?php echo form_hidden('videoId') ?>
                    <?php echo bsFormText('title', 'Başlık', array('required' => true)) ?>
                    <?php echo bsFormSlug('slug', 'Slug', array('checked' => true)) ?>
                    <?php echo bsFormImage('image', 'Resim') ?>
                    <?php echo bsFormTextarea('summary', 'Özet', array('required' => true)) ?>

                </div>
                <div class="panel-footer">
                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <button class="btn btn-success" type="submit" name="redirect" value="<?php echo $this->module ?>/records">Kaydet ve Listeye Dön</button>
                    <a class="btn btn-default" href="<?php echo $this->module ?>/records">Vazgeç</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-plus-square"></i> Meta Bilgileri</div>

                <div class="panel-body">
                    <?php echo bsFormText('metaTitle', 'Title') ?>
                    <?php echo bsFormTextarea('metaDescription', 'Description') ?>
                    <?php echo bsFormTextarea('metaKeywords', 'Keywords') ?>
                </div>
            </div>
        </div>
    </form>
</div>