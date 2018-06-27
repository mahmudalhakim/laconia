<?php include __DIR__ . '/partials/header.php'; ?>

<?php include __DIR__ . '/partials/page-header.php'; ?>

    <section class="content-section">
        <div class="small-container">
            <h2><?= $this->user['username']; ?></h2>
            <p>Welcome to your settings page. Here you can update your email address and other information on your profile.</p> 

            <?php include __DIR__ . '/partials/message.php'; ?>

            <form id="form-settings">
                <label for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname" value="<?= $this->user['fullname']; ?>">

                <label for="location">Location</label>
                <input type="text" name="location" id="location" value="<?= $this->user['location']; ?>">

                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?= $this->user['email']; ?>">

                <label for="description">Descripton</label>
                <textarea name="description" id="description" cols="30" rows="10"><?= $this->user['description']; ?></textarea>

                <input type="submit" value="Update"> <a class="button" href="/home">Back</a>
            </form>

        </div>
    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>