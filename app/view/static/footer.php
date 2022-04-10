<footer class="container">
    <div class="row">
        <div class="col-md-12">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt=""
                             width="24" height="24">
                        <small class="d-block mb-3 text-muted">© 1993-2018</small>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md pr-5">
                        <h5>Hakkımda</h5>
                        <p class="small">
                            1993 yılında Eskişehir'de doğdum. 2008'den beri front-end 2011'den beri back-end developer
                            olarak çalışıyorum.
                        </p>
                    </div>
                    <div class="col-12 col-md">
                        <h5>Sosyal Medya</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="<?= $settingsQuery->facebook ?? "#" ?>"><i class="fab fa-facebook-square"></i> /mcankaya4</a>
                            </li>
                            <li><a class="text-muted" href="<?= $settingsQuery->twitter ?? "#" ?>"><i class="fab fa-twitter-square"></i> /mcankaya4</a>
                            </li>
                            <li><a class="text-muted" href="<?= $settingsQuery->instagram ?? "#" ?>"><i class="fab fa-instagram"></i> /mcankaya4</a></li>
                            <li><a class="text-muted" href="<?= $settingsQuery->youtube ?? "#" ?>"><i class="fab fa-youtube"></i> /mcankaya4</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</footer>

</body>
</html>