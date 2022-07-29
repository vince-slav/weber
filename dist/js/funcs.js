function confDel(event, form){
  event.preventDefault();
  var conf = confirm("Deseja excluir o produto?");
  if(conf){
    form.submit();
  }
}

