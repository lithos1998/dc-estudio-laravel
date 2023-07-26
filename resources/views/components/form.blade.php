<div id="contact-home" class="contact">
        <h2>Contacto</h2>
        <p class="contact-text">Creemos que la comunicación es una herramienta fundamental para lograr las metas propuestas y satisfacer las demandas de nuestros clientes, no dudes en contactarnos.</p>
        <div class="w-100 contact-div">
            <div class="contact-us d-column container">
                <div class="contact-data d-column">
                    <p>Tel.: (+54) 9 11 2787-1148</p>
                    <p>Email: administracion@dc.ar </p>   
                </div>

                @include('components.social-media')
            </div>
            
            <div class="contact-us-form d-column container">            
                <form action="sentMail.php" name="form-contact" method="post" class="w-100" id="contact-form">
                    <input type="text" name="name" id="name" class="name" placeholder="Nombre y apellido">

                    <input type="email" name="email" id="email" class="email" placeholder="Email: Ejemplo@mail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">                    

                    <select name="reason" id="reason" class="reason" placeholder="Razon por la que se comunica">
                        <option value="razon">motivo por la cual se contacta</option>
                        <option value="consorcio">Administracion de consorcio</option>
                        <option value="contable">Consultaria contable</option>
                        <option value="contratista">Contratista</option>
                        <option value="newairs">New airs</option>
                        <option value="certificaciones">Certificaciones</option>
                        <option value="otros">Otros</option>
                    </select>

                    <input type="text" name="address" id="address" class="address d-none" placeholder="Domicilio"> 

                    <input type="submit" value="Enviar" class="w-100 sent-form">                                   
                </form>                                   
            </div>  
        </div>
    </div>