function validarAdicionarPreco(){
	if(document.formAdicionaProduto.preco.value == "" ){
		alert("Obrigatório Preencher Campo Preço.");
		document.formAdicionaProduto.preco.focus();
		return false;
	}
}
