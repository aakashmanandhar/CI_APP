<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>New Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1>New task</h1>

<?= form_open("/tasks/create") ?>

    <div>
        <label for="description">Desscription</label>
        <input type="text" name="description" id="description" value="">
    </div>

    <button>Save</button>
    <a href="<?= site_url("/tasks") ?>">Cancel</a>

</form>

<?= $this->endSection() ?>