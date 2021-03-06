<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->flashdata('messages'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div class="collapse" id="pdfCollapse">
            <button id="generatePDF" data-link="<?= base_url('pdfview/index/frozen_ticket'); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Frozen Ticket</button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-6">
            <form action="<?= base_url('consol/add'); ?>" method="post">
                <input type="hidden" id="picklist_ke" name="picklist_ke">
                <input type="hidden" id="total_picklist" name="total_picklist">
                <div class="form-group">
                    <label for="ca_no">External Order No</label>
                    <input type="text" class="form-control" id="ca_no" name="ca_no" placeholder="External Order No" value="<?= set_value('ca_no'); ?>" autocomplete="off" required>
                    <?= form_error('ca_no', '<small class="text text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="palet_no">Lokasi Palet Consol</label>
                    <input type="number" class="form-control" id="palet_no" name="palet_no" placeholder="Lokasi Palet Consol" value="<?= set_value('palet_no'); ?>" autocomplete="off" required>
                    <?= form_error('palet_no', '<small class="text text-danger">', '</small>'); ?>
                    <small class="d-none" id="suggested"></small>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" data-toggle="collapse" data-target="#pdfCollapse" value="1" id="remarks" name="remarks">
                    <label class="form-check-label" for="remarks">
                        Frozen / Chiller
                    </label>
                </div>
                <div class="form-group mt-2">
                    <label for="koli">Jumlah Koli</label>
                    <input type="number" class="form-control" id="koli" name="koli" placeholder="Jumlah Koli" value="<?= set_value('koli'); ?>" autocomplete="off" required>
                    <?= form_error('koli', '<small class="text text-danger">', '</small>'); ?>
                </div>
                <div class="d-none" id="jmlPicklist"></div>
                <div class="d-none" id="jmlKoli"></div>
                <div class="d-none" id="kotaZona"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

</script>