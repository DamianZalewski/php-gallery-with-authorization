<div class="col-2 bg-dark text-white pl-0 pr-0">
            <div class="text-center pt-3 bg-primary pb-2">
                <h4>Menu</h4>
            </div>
            <ul class="list-unstyled">
                <li>
                    <a href="logged.php"> <div id="loggedLink" class="border-bottom p-3 border-primary "><div class="col-10 d-inline-block">Home</div><i class="col-2 d-inline-block fas fa-home"></i></div></a>
                </li>
                <li>
                    <a href="uploadImage.php"><div id="uploadImageLink" class="border-bottom p-3 border-primary "><div class="col-10 d-inline-block">Upload image</div><i class="col-2 d-inline-block fas fa-upload"></i></div></a>
                </li>
                <li>
                    <a href="galleries.php"><div id="galleriesLink" class="border-bottom p-3 border-primary "><div class="col-10 d-inline-block">Galleries</div><i class="col-2 d-inline-block fas fa-images"></i></div></a>
                </li>
                <li>
                    <a href="settings.php"><div id="settingsLink" class="border-bottom p-3 border-primary "><div class="col-10 d-inline-block">Settings</div><i class="col-2 d-inline-block fas fa-cog"></i></div></a>
                </li>
            </ul>
</div>
<script>
    document.getElementById('loggedLink').classList.add(window.location.href.indexOf("logged") > -1 ? "text-primary" : "text-light");
    document.getElementById('uploadImageLink').classList.add(window.location.href.indexOf("uploadImage") > -1 ? "text-primary" : "text-light");
    document.getElementById('galleriesLink').classList.add(window.location.href.indexOf("galleries") > -1 ? "text-primary" : "text-light");
    document.getElementById('settingsLink').classList.add(window.location.href.indexOf("settings") > -1 ? "text-primary" : "text-light");
</script>
