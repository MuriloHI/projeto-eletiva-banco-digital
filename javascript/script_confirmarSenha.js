// Codigo geral para confirmacao de senha nos cadastros
// Compara em tempo real enquanto o usuario digita

document.getElementById('confirmar_senha').addEventListener('input', function() {
    var senha = document.getElementById('senha_cadastro').value;
    var confirmarSenha = this.value;
    var aviso = document.getElementById('aviso_confirmacao_senha');

    // Se senha e a confirmacao da senha nao baterem, mostra a mensagem
    if (senha !== confirmarSenha) {
        aviso.style.display = 'inline';
        aviso.style.cssText = 'color: red; text-align: center; margin-top: -15px; margin-bottom: 20px;';
    }
    else {
        aviso.style.display = 'none';
    }
});