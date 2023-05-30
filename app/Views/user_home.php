<?= $this->extend('base_user') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Exercise</h5>
            <div class="pb-5">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="exerciseDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter Exercise
                    </button>
                    <div class="dropdown-menu" aria-labelledby="exerciseDropdown">
                        <a class="dropdown-item filter-option" href="/user/home?video=all">Lihat Semua</a>
                        <a class="dropdown-item filter-option" href="/user/home?video=Arms">Arms</a>
                        <a class="dropdown-item filter-option" href="/user/home?video=Legs">Legs</a>
                        <a class="dropdown-item filter-option" href="/user/home?video=Back">Back</a>
                        <a class="dropdown-item filter-option" href="/user/home?video=Abs">Abs</a>
                        <a class="dropdown-item filter-option" href="/user/home?video=Chest">Chest</a>
                        <a class="dropdown-item filter-option" href="/user/home?video=Full Body">Full Body</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data as $item) : ?>
                    <div class="col-md-6">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video class="embed-responsive-item" controls>
                                        <source src=<?= $item['video'] ?> type='video/mp4'>
                                    </video>
                                </div>
                                <h5 class="card-title py-4"><?= $item['name'] ?></h5>
                                <p class="badge badge-dark"><?= $item['type'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.getElementById('exerciseDropdown');
        const selectedOption = sessionStorage.getItem('selectedOption');
       
        if (selectedOption) {
            dropdownButton.textContent = selectedOption;
        }
       
        document.querySelectorAll('.filter-option').forEach(option => {
            option.addEventListener('click', function() {
                const selectedText = option.textContent;
                dropdownButton.textContent = selectedText;
                sessionStorage.setItem('selectedOption', selectedText);
            });
        });
    });
</script>

<?= $this->endSection() ?>
