<footer class="d-column">
    <div class="footer-data d-column">
        <div class="footer-logo w-100">
            <a href="https://mail.hostinger.com/" target="parent" aria-label="ir a mi mail hostinger">                
                <img class="logo-buildings" src="assets/images/logo.webp" loading="lazy" alt="Logo">      
            </a>                    
            <div>
                <p class="color-w">DC</p>
                <p class="color-w">ESTUDIO COCIANCIH</p>
            </div>
        </div>

        <div class="footer-contact w-100 d-column">
            @include('components.social-media')
        </div> 

        <script>
            fetch('http://carlosriveros.online/api/signature')
            .then(response => response.json())
            .then(data => {
                document.getElementById('signature').innerHTML = data.signature;
            })
        </script>  

        <div id="signature" class="developed-by"></div>                                      
    </div>   
                
    <img src="assets/images/decoracion.webp" loading="lazy" alt="Logo" class="deco-footer">
</footer>