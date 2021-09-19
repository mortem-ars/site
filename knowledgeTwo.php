<figure class="text-center">
    <blockquote class="blockquote">
        <h3 class="mb-0">Лесов с каждым днем становится все меньше:</h3>
    </blockquote>
</figure>
<div class="navbar">
    <?php
    for ($i = 0; $i < 3; $i ++):
    ?>
        <div class="container card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header badge bg-success"><h5>Wood</h5></div>
            <div class="card-body">
                <h4 class="card-title">Эти места вы можете больше не увидеть...</h4>
                <img src="/img/<?php echo($i + 1)?>.jpg" alt="Ooops!" class="img-thumbnail">
                <p class="card-text">И вам не жаль?</p>
            </div>
        </div>
    <?php endfor; ?>
</div>
