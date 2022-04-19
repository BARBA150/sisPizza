function validar() {
    var nome = document.getElementById("nome");
    var endereco = document.getElementById("endereco");
    var email = document.getElementById("email");
    var telefone = document.getElementById("telefone");
    var sexo = document.getElementById("sexo");
    var cpf = document.getElementById("cpf");
    var rg = document.getElementById("rg");
    var data = document.getElementById("data_nascimento");
    var senha = document.getElementById("password");
    
    if (nome.value == ""){
      alert("Nome não informado");
      return; 
    }
    if (endereco.value == ""){
        alert("Endereço não informado");
        return;
    }
    if (email.value == ""){
      alert("E-mail não informado");
      return;
    }
    if (telefone.value == ""){
      alert("Telefone não informado");
      return;
     }
     if(cpf.value == ""){
      alert("CPF não informado");
      return;
  }
  if(rg.value == ""){
    alert("RG não informado");
    return;
}
if(data.value == ""){
  alert("Data de Nascimento não informado");
  return;
}
  if (document.form1.sexo[0].checked == false 
    && document.form1.sexo[1].checked == false){
    alert("Sexo não informado");
    return false;
}
if(senha.value == ""){
  alert("Senha não informada");
  return;
}
  
}
