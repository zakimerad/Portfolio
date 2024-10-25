
<form action="traitement.php" method="post">
    <div class="form__group field">
        <input type="input" name="name" class="form__field" placeholder="Name" required>
        <label for="name" class="form__label">Name</label>
    </div>
    <div class="form__group field">
        <input type="input" name="email" class="form__field" placeholder="Email" required>
        <label for="email" class="form__label">Email</label>
    </div>
    <div class="form__group field">
        <textarea name="message" class="form__field" placeholder="Message" required></textarea>
        <label for="message" class="form__label">Message</label>
    </div>
    <br>
    <br>
    <button type="submit" class="btn">Envoyer</button>
    <br>
    <br>
    <?php if (isset($_SESSION['message'])) : ?>
        <h3><?php echo $_SESSION['message']; ?></h3>
        <?php unset($_SESSION['message']); // Pour éviter que le message soit affiché plusieurs fois ?>
    <?php endif; ?>

</form>
