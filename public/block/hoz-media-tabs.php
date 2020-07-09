<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="hotel-1-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Khách sạn 1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="hotel-2-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Khách sạn 2</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="hotel-3-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Khách sạn 3</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <?php require_once 'public/block/image-gallery.php'; ?>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>