
<div class="modal fade" id="modal-container-743975" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--INICIO DO CORPO DA MODAL-->
            <div class="modal-body">
                <form class="navbar-form" role="search" action="autentica.php" method="POST">
                    <div class="form-group">
                        <div class="modal-header" id="modal-header2">
                            <!-- Logo Container -->
                         
                            
                            <!-- Title -->
                            <div class="modal-title-container">
    <h3 class="modal-title">SEEPS 2024</h3>
</div>
                            <!-- Form Fields -->
                            <div class="form-container">
                                <div id="separador1">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input required type="text" 
                                               class="form-control" 
                                               id="inputModal3" 
                                               placeholder="Email" 
                                               name="email">
                                          
                                    </div>
                                </div>

                                <div id="separador1">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input required type="text" 
                                               class="form-control" 
                                               id="inputModal3" 
                                               placeholder="Senha" 
                                               name="senha">
                                            
                                    </div>
                                </div>

                                <!-- Login Button -->
                                <div id="separadorBtn">
                                
                                </div>

                           
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--FIM DO CORPO DA MODAL-->
        </div>
    </div>
</div>
<!--FIM DA MODAL-->
<Script> 
  document.querySelector('.login-button').addEventListener('click', function() {
    document.getElementById('loginModal').classList.add('show');
});

document.getElementById('loginModal').addEventListener('click', function(e) {
    if (e.target === this) {
        this.classList.remove('show');
    }
});
</script>
<!-- Adicione estes links no head do seu HTML -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Roboto:wght@400;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Adicione estes scripts antes do fechamento do body -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>